<?php
/**
* Template Name: Cerberus Fluid
* @package	Inbound Email
*
*/

$key = basename(dirname(__FILE__));


/* Configures Template Information */
$inbound_email_data[$key]['info'] = array(
	'data_type' =>'email-template',
	'label' => __( 'New Post Notification' , 'inbound-mailer') ,
	'category' => 'responsive,automated',
	'demo' => '',
	'description' => __( 'Official template powering Inbound Now new post email.' , 'inbound-mailer' ),
	'acf' => true
);

/*
* Define ACF Fields to be used in this template
* Pay special attention to the 'location' key as this is where we tell ACF to load when this template is selected
*/

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_577ec49be93acinnpnf',
	'title' => 'Inbound Now - New Post Notification Fields',
	'fields' => array (
		array (
			'key' => 'field_57805f3dcc0a9innpnf',
			'label' => 'Optional: Email Header Text',
			'name' => 'optional_email_header_text',
			'type' => 'text',
			'instructions' => 'Use this optional field to put in some headline text that will display in the inbox preview, but not in the email body',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'New content from {{site_name}}',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577ec5521ab00innpnf',
			'label' => 'Logo Image',
			'name' => 'logo_image',
			'type' => 'image',
			'instructions' => 'Use this field to display your logo in the head of the email. The max width with 200px and the max height is 200px',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_577ec60a1ab01innpnf',
			'label' => 'Featured Image',
			'name' => 'featured_image',
			'type' => 'text',
			'instructions' => 'This is the main image of the email. The max width is 600px, with the height being scaled according to aspect ratio',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '{{featured_image}}',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577ec67c1ab02innpnf',
			'label' => 'Main Content A',
			'name' => 'main_content_a',
			'type' => 'wysiwyg',
			'instructions' => 'This editor is for putting text based content above the email button',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut erat.',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_577ec6dc1ab03innpnf',
			'label' => 'Email Button Text',
			'name' => 'email_button_text',
			'type' => 'text',
			'instructions' => 'Use this to change the displayed text on the email button',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Keep Reading',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577ec7821ab04innpnf',
			'label' => 'Email Button Link',
			'name' => 'email_button_link',
			'type' => 'text',
			'instructions' => 'Use this to set where the email button takes users after they click it',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '{{permalink}}',
			'placeholder' => '',
		),
		array (
			'key' => 'field_577eeb5c748f1innpnf',
			'label' => 'Email Button Text Color',
			'name' => 'email_button_text_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the text in the email button',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array (
			'key' => 'field_577eeb01748f0innpnf',
			'label' => 'Email Button Color',
			'name' => 'email_button_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the button in the email',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#222222',
		),
		array (
			'key' => 'field_577f3b2a78d08innpnf',
			'label' => 'Email Button Hover Color',
			'name' => 'email_button_hover_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the email button when the mouse hovers over it',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#555555',
		),
		array (
			'key' => 'field_578004e0e675dinnpnf',
			'label' => 'Button Font size',
			'name' => 'button_font_size',
			'type' => 'text',
			'instructions' => 'Use this to change the font size of the button text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '13px',
			'placeholder' => 'Use standard CSS font measurements, like: 13px, 1.4em',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577ec7f21ab05innpnf',
			'label' => 'Main Content B',
			'name' => 'main_content_b',
			'type' => 'wysiwyg',
			'instructions' => 'This editor is for putting text based content below the email button',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent laoreet malesuada cursus. Maecenas scelerisque congue eros eu posuere. Praesent in felis ut velit pretium lobortis rhoncus ut erat.',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_5780048fe675binnpnf',
			'label' => 'Main Content Font Size',
			'name' => 'main_content_font_size',
			'type' => 'text',
			'instructions' => 'Use this to change the font size of the main content area. (Main Content A & B)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '15px',
			'placeholder' => 'Use standard CSS font measurements, like: 15px, 1.5em',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577eefd19cf41innpnf',
			'label' => 'Email Colors',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_577ee73f748edinnpnf',
			'label' => 'Email Background Color',
			'name' => 'email_background_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to set the background color of the email. This is the overall background color, not the background for the email content',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#222222',
		),
		array (
			'key' => 'field_577eea5e748eeinnpnf',
			'label' => 'Email Content Background Color',
			'name' => 'email_content_background_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the background color of the email\'s content',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array (
			'key' => 'field_577eeabf748efinnpnf',
			'label' => 'Email Text Color',
			'name' => 'email_text_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the text in the email',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#555555',
		),
		array (
			'key' => 'field_577eee5f748f3innpnf',
			'label' => 'Contact Information',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_57844029e5864innpnf',
			'label' => 'Contact Information Content',
			'name' => 'contact_information_content',
			'type' => 'wysiwyg',
			'instructions' => 'Use this editor to put in your company\'s contact information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Name?
Address?
Phone?
Anything Else?',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_577eee34748f2innpnf',
			'label' => 'Contact Information Text Color',
			'name' => 'contact_information_text_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the contact information.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#888888',
		),
		array (
			'key' => 'field_57800750e675einnpnf',
			'label' => 'Contact Information Font Size',
			'name' => 'contact_information_font_size',
			'type' => 'text',
			'instructions' => 'Use this to change the font size of the contact information',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '12px',
			'placeholder' => 'Use standard CSS font measurements, like: 12px, 1.3em',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577eef079cf3finnpnf',
			'label' => 'View Email Online Link Text',
			'name' => 'view_email_online_link_text',
			'type' => 'text',
			'instructions' => 'Use this to change the text of the "view online" link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'View email as a webpage',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577ef0399cf42innpnf',
			'label' => 'View Online Link Color',
			'name' => 'view_online_link_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the "view online" link text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#cccccc',
		),
		array (
			'key' => 'field_5784497bb4de9innpnf',
			'label' => 'View Online Link Text Size',
			'name' => 'view_online_link_text_size',
			'type' => 'text',
			'instructions' => 'Use this to change the font size of the "view online" link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '12px',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_577f24996f960innpnf',
			'label' => 'Unsubscribe Link Text',
			'name' => 'unsubscribe_link_text',
			'type' => 'text',
			'instructions' => 'Use this to change the text of the "unsubscribe" link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Unsubscribe from this list',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57800c078fe56innpnf',
			'label' => 'Unsubscribe Link Color',
			'name' => 'unsubscribe_link_color',
			'type' => 'color_picker',
			'instructions' => 'Use this to change the color of the "unsubscribe" link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#888888',
		),
		array (
			'key' => 'field_578449eab4deainnpnf',
			'label' => 'Unsubscribe Link Text Size',
			'name' => 'unsubscribe_link_text_size',
			'type' => 'text',
			'instructions' => 'Use this to change the font size of the "unsubscribe" link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '12px',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'inbound-email',
			),
			array (
				'param' => 'template_id',
				'operator' => '==',
				'value' => 'new-post-notification',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
