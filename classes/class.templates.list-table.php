<?php

/**
 * List table for visualizing 4rd party installed templates
 *
 * @package	Inbound Mailer
 * @subpackage	Templates
*/


if ( !class_exists('Inbound_Mailer_Template_Manager_List') ) {

	if( ! class_exists( 'WP_List_Table' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}

	class Inbound_Mailer_Template_Manager_List extends WP_List_Table {
		private $template_data;
		private $singular;
		private $plural;

		function __construct() {

			$Inbound_Mailer_Load_Extensions = Inbound_Mailer_Load_Extensions();
			$inbound_email_data = $Inbound_Mailer_Load_Extensions->template_definitions;

			$final_data = array();

			foreach ($inbound_email_data as $template_id=>$data)
			{
				$array_core_templates = array( 'simple-responsive' );
				$array_core_templates = array( );


				if (in_array($template_id,$array_core_templates)) {
					continue;
				}


				if (isset($_POST['s'])&&!empty($_POST['s'])) {
					if (!stristr($data['info']['label'],$_POST['s'])) {
						continue;
					}
				}

				/* Get Thumbnail */
				if (file_exists(INBOUND_EMAIL_PATH.'templates/'.$template_id."/thumbnail.png")) {
					$thumbnail = INBOUND_EMAIL_URLPATH.'templates/'.$template_id."/thumbnail.png";
				} else {
					$thumbnail = INBOUND_EMAIL_UPLOADS_URLPATH.$template_id."/thumbnail.png";
				}

				$this_data['ID']  = $template_id;
				$this_data['template']  = $template_id;
				( array_key_exists('info',$data) ) ? $this_data['name'] = $data['info']['label'] :  $this_data['name'] = $data['label'];
				( array_key_exists('info',$data) ) ? $this_data['category'] = $data['info']['category'] :  $this_data['category'] = $data['category'];
				( array_key_exists('info',$data) ) ? $this_data['description'] = $data['info']['description'] :  $this_data['description'] = $data['description'];

				$this_data['thumbnail']  = $thumbnail;

				if (isset($data['version'])&&!empty($data['info']['version']))
				{
					$this_data['version']  = $data['info']['version'];
				}
				else
				{
					$this_data['version'] = "1.0.1";
				}

				$final_data[] = $this_data;
			}

			$this->template_data = $final_data;


			$this->singular = 'ID';
			$this->plural = 'ID';
			$this->_actions = array();

			$args = $this->_args;

			$args['plural'] = sanitize_key( '' );
			$args['singular'] = sanitize_key( '' );

			$this->_args = $args;
		}

		function get_columns() {
			$columns = array(
			'cb'        => '<input type="checkbox" />',
			'template' => 'Template',
			'description' => 'Description',
			'category' => 'Category',
			'version' => 'Current Version'

			);
			return $columns;
		}

		function column_cb($item){
			return sprintf(
				'<input type="checkbox" name="template[]" value="%s" />', $item['ID']
			);
		}

		function get_sortable_columns()	{
			$sortable_columns = array(
				'template'  => array('template',false),
				'category' => array('category',false),
				'version'   => array('version',false)
			);

			return $sortable_columns;
		}

		function usort_reorder( $a, $b ){
			// If no sort, default to title
			$orderby = ( ! empty( $_GET['orderby'] ) ) ? $_GET['orderby'] : 'template';
			// If no order, default to asc
			$order = ( ! empty($_GET['order'] ) ) ? $_GET['order'] : 'asc';
			// Determine sort order
			$result = strcmp( $a[$orderby], $b[$orderby] );
			// Send final sort direction to usort
			//print_r($b);exit;
			//echo $order;exit;
			return ( $order === 'asc' ) ? $result : -$result;
		}

		function prepare_items() {
			$columns  = $this->get_columns();

			$hidden = array('ID');
			$sortable = $this->get_sortable_columns();

			$this->_column_headers = array( $columns, $hidden, $sortable );
			if(is_array($this->template_data))
			{
				usort( $this->template_data, array( &$this, 'usort_reorder' ) );
			}

			$per_page = 25;
			$current_page = $this->get_pagenum();

			$total_items = count( $this->template_data );

			if (is_array($this->template_data))
			{
				$this->found_data = array_slice( $this->template_data,( ( $current_page-1 )* $per_page ), $per_page );
			}

			$this->set_pagination_args( array(
				'total_items' => $total_items,                  //WE have to calculate the total number of items
				'per_page'    => $per_page                     //WE have to determine how many items to show on a page
			) );


			$this->items = $this->found_data;
		}

		function column_default( $item, $column_name ) {
			//echo $item;exit;
			switch( $column_name )
			{
				case 'template':
					return '<div class="capty-wrapper" style="overflow: hidden; position: relative; "><div class="capty-image"><img src="'.$item[ 'thumbnail' ].'" class="template-thumbnail" alt="'.$item['name'].'" id="id_'.$item['ID'].'" title="'.$item['name'].'">
					</div><div class="capty-caption" style="text-align:center;width:158px;margin-left:-6px;height: 20px; opacity: 0.7; top:-82px;position: relative;">'.$item['name'].'</div></div>';
				case 'category':
					return '<span class="post-state">
							<span class="pending states">'.$item[ $column_name ].'</span>
							</span>';
				case 'description':
					return $item[ $column_name ];
				case 'version':
					echo Inbound_Mailer_Template_Manager::api_check_template_for_updates($item);
					return;
				case 'actions':
					//echo inbound_email_templates_print_delete_button($item);

					return;
				default:
					return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
			}
		}

		function admin_header() {
			$page = ( isset($_GET['page'] ) ) ? esc_attr( $_GET['page'] ) : false;

			if( 'inbound_email_manage_templates' != $page )
			return;
		}

		function no_items() {
			_e( 'No premium templates installed. Templates included in the Call to Action core plugin will not be listed here.' );
		}

		function get_bulk_actions() {
			$actions = array(

				'upgrade'    => 'Upgrade',
				'delete'    => 'Delete',

			);

			return $actions;
		}

	}
}