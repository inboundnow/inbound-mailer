<?php
/**
* Template Name: Gallery
* @package	Inbound Email
* 
*/

$key = basename(dirname(__FILE__));


/* Configures Template Information */
$inbound_email_data[$key]['info'] = array(
	'data_type' =>'email-template',
	'label' => __( 'Gallery' , 'inbound-mailer') ,
	'category' => 'responsive',
	'demo' => '',
	'description' => __( 'Gallery email template' , 'inbound-mailer' ),
	'acf' => true
);

/*
* Define ACF Fields to be used in this template
* Pay special attention to the 'location' key as this is where we tell ACF to load when this template is selected
*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55e45e5ee1057',
	'title' => 'Gallery',
	'fields' => array (
		array (
			'key' => 'field_55e45e6d5e11b',
			'label' => 'Header',
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
			'key' => 'field_55e45e848413f',
			'label' => 'Logo Image',
			'name' => 'logo_url',
			'type' => 'image',
			'instructions' => 'Please add your logo. It will be positioned at the center of the header. The logo max height is 100 pixels. A bigger logo will be resized.
Please notice that png files are not read correctly by Outlook, if you want maximum cross client compatibility use jpg images.',
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
			'key' => 'field_55e4600d12a1f',
			'label' => 'Header Background Color',
			'name' => 'header_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#dfdfdf',
		),
		array (
			'key' => 'field_55e5472206656',
			'label' => 'Header Background Image',
			'name' => 'header_bg_image',
			'type' => 'image',
			'instructions' => 'You can add a background image to your header. Leave it empty to just use the background color.',
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
			'key' => 'field_55e460be3b234',
			'label' => 'Home Page URL',
			'name' => 'home_page_url',
			'type' => 'url',
			'instructions' => 'Add the URL of the page you want to send people to when they click on the logo',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55e4634d3036e',
			'label' => 'Email Body',
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
			'key' => 'field_55e4637a0f031',
			'label' => 'Email Title',
			'name' => 'email_title',
			'type' => 'text',
			'instructions' => 'Latest products from our shop',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55e46d00643b6',
			'label' => 'Email Background Color',
			'name' => 'email_bg_color',
			'type' => 'color_picker',
			'instructions' => 'You can set a background color for your email. The default is a light grey that helps highlighting the gallery images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#dfdfdf',
		),
		array (
			'key' => 'field_55e46500ff1e2',
			'label' => 'Gallery',
			'name' => 'gallery',
			'type' => 'flexible_content',
			'instructions' => 'Here you add your gallery of images with links and descriptions',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Row',
			'min' => 1,
			'max' => '',
			'layouts' => array (
				array (
					'key' => '55e465131439e',
					'name' => 'gallery_row',
					'label' => 'Gallery Row',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55e466d8ff1e3',
							'label' => 'Left Image',
							'name' => 'left_image',
							'type' => 'image',
							'instructions' => 'Image on the left side of the row. Image must be 270 pixels wide X 200 pixels high. Images of different sizes will be resized.',
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
							'key' => 'field_55e46c0344bea',
							'label' => 'Left Image URL',
							'name' => 'left_image_url',
							'type' => 'url',
							'instructions' => 'Add the URL of the landing page/product page to send users that clik on the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#',
							'placeholder' => '',
						),
						array (
							'key' => 'field_55e46b5a44be8',
							'label' => 'Left Image Title',
							'name' => 'left_image_title',
							'type' => 'text',
							'instructions' => 'Add the title of your image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Lorem ipsum dolor sit amet',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e46bb044be9',
							'label' => 'Left Image Title URL',
							'name' => 'left_image_title_url',
							'type' => 'url',
							'instructions' => 'You can send the user that clicks to the title to a special URL, or use the same that you use for the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#',
							'placeholder' => '',
						),
						array (
							'key' => 'field_55e46cb12f266',
							'label' => 'Left Image Author or Description',
							'name' => 'left_image_author',
							'type' => 'text',
							'instructions' => 'Add the author or descriptoin of the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Hari Seldon',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e4707148f1a',
							'label' => 'Right Image',
							'name' => 'right_image',
							'type' => 'image',
							'instructions' => 'Image on the right side of the row. Image must be 270 pixels wide X 200 pixels high. Images of different sizes will be resized. You can leave it empty if you don\'t have any more images to add',
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
							'key' => 'field_55e470ff60945',
							'label' => 'Right Image URL',
							'name' => 'right_image_url',
							'type' => 'url',
							'instructions' => 'Add the URL of the landing page/product page to send users that clik on the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#',
							'placeholder' => '',
						),
						array (
							'key' => 'field_55e4711a60946',
							'label' => 'Right Image Title',
							'name' => 'right_image_title',
							'type' => 'text',
							'instructions' => 'Add the title of your image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Lorem ipsum dolor sit amet',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e4714360947',
							'label' => 'Right Image Title URL',
							'name' => 'right_image_title_url',
							'type' => 'url',
							'instructions' => 'You can send the user that clicks to the title to a special URL, or use the same that you use for the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#',
							'placeholder' => '',
						),
						array (
							'key' => 'field_55e4715e60948',
							'label' => 'Right Image Author or Description',
							'name' => 'right_image_author',
							'type' => 'text',
							'instructions' => 'Add the author or descriptoin of the image',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Hari Seldon',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '55e50eaffd290',
					'name' => 'callout',
					'label' => 'Callout',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_55e50ebbfd291',
							'label' => 'Callout Message',
							'name' => 'callout_message',
							'type' => 'text',
							'instructions' => 'Add here the message that goes inside the callout',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Lorem ipsum dolor sit amet.',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e50f09897f6',
							'label' => 'Callout Font Size',
							'name' => 'callout_font_size',
							'type' => 'number',
							'instructions' => 'Enter the font size in pixels that you want for your callout',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 20,
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'min' => 16,
							'max' => 30,
							'step' => 1,
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e51208ccb27',
							'label' => 'Callout Message Font Color',
							'name' => 'callout_font_color',
							'type' => 'color_picker',
							'instructions' => 'Choose the font color of your callout message. Default is dark grey.',
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
							'key' => 'field_55e51187b8cc3',
							'label' => 'Callout Background Color',
							'name' => 'callout_bg_color',
							'type' => 'color_picker',
							'instructions' => 'Choose the background color of your callout box',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#b5b5b5',
						),
						array (
							'key' => 'field_55e50f75897f7',
							'label' => 'Callout Button Message',
							'name' => 'callout_button_message',
							'type' => 'text',
							'instructions' => 'Here you should add the message that will go inside the button',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'Click Here',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55e50fd7f22cd',
							'label' => 'Callout Button Link',
							'name' => 'callout_button_link',
							'type' => 'url',
							'instructions' => 'Here you should add the link of your callout button',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#',
							'placeholder' => '',
						),
						array (
							'key' => 'field_55e5106ff22ce',
							'label' => 'Callout Button Color',
							'name' => 'callout_button_color',
							'type' => 'color_picker',
							'instructions' => 'Choose the color of the callout button',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#599351',
						),
						array (
							'key' => 'field_55e511369f4e1',
							'label' => 'Callout Button Font Color',
							'name' => 'callout_button_font_color',
							'type' => 'color_picker',
							'instructions' => 'Choose the font color of the callout button. Default is white',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#FFFFFF',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
		array (
			'key' => 'field_55e5128f177df',
			'label' => 'Footer',
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
			'key' => 'field_55e512a863551',
			'label' => 'Terms Page URL',
			'name' => 'terms_page_url',
			'type' => 'url',
			'instructions' => 'Add the URL of your terms page. Leave empty if you don\'t have a terms page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array (
			'key' => 'field_55e512ea6ddb1',
			'label' => 'Privacy Page URL',
			'name' => 'privacy_page_url',
			'type' => 'url',
			'instructions' => 'Add the URL of your privacy page. Leave empty if you don\'t have a privacy page',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
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
				'value' => $key,
			)
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;