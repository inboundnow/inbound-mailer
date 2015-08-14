<?php
/**
* Template Name: Hero
* @package	Inbound Email
* 
*/

$key = basename(dirname(__FILE__));


/* Configures Template Information */
$inbound_email_data[$key]['info'] = array(
	'data_type' =>'email-template',
	'label' => __( 'Hero' , 'inbound-mailer') ,
	'category' => 'responsive',
	'demo' => '',
	'description' => __( 'Hero email template.' , 'inbound-mailer' ),
	'acf' => true
);

/*
* Define ACF Fields to be used in this template
* Pay special attention to the 'location' key as this is where we tell ACF to load when this template is selected
*/

if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_55c8aac0de44a',
	'title' => 'Hero Email',
	'fields' => array (
		array (
			'key' => 'field_55cd713ab1185',
			'label' => 'Header',
			'name' => 'header',
			'prefix' => '',
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
		),
		array (
			'key' => 'field_55c8ab6597609',
			'label' => 'Logo URL',
			'name' => 'logo_url',
			'prefix' => '',
			'type' => 'image',
			'instructions' => 'Enter or upload your logo here',
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
		),
		array (
			'key' => 'field_55cd717fbdddb',
			'label' => 'Header Background Color',
			'name' => 'header_bg_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of your header',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_55cd71c18c148',
			'label' => 'Email Body',
			'name' => 'email_body',
			'prefix' => '',
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
		),
		array (
			'key' => 'field_55c960a2c8d82',
			'label' => 'Text Above Hero Image',
			'name' => 'text_above_hero_image',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => 'Add here the text that will appear above the hero image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Dear [lead-field id="wpleads_first_name" default="Subscriber"],

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55c9648893443',
			'label' => 'Hero Image',
			'name' => 'hero_image',
			'prefix' => '',
			'type' => 'image',
			'instructions' => 'Enter or upload your hero image here',
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
		),
		array (
			'key' => 'field_55c96250484bd',
			'label' => 'Hero Image Callout',
			'name' => 'hero_image_callout',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => 'Add here the callout that will appear under the hero image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#">Do it Now! »</a>',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
		array (
			'key' => 'field_55c96785ab1cd',
			'label' => 'Callout Background Color',
			'name' => 'hero_callout_background_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of the callout under the hero image',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_55c96304c99e1',
			'label' => 'Main Email Content',
			'name' => 'main_email_content',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => 'The content of your email should go here.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<h3>Title Ipsum <small>This is a note.</small></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\',',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55c970ecf9d6d',
			'label' => 'Button Link',
			'name' => 'button_link',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Add the link to a landing page',
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
			'key' => 'field_55c9711df9d6e',
			'label' => 'Button Text',
			'name' => 'button_text',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Add the text that will appear inside the button',
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
			'key' => 'field_55cd71f7064e2',
			'label' => 'Social Box',
			'name' => 'social_box',
			'prefix' => '',
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
		),
		array (
			'key' => 'field_55c966404c413',
			'label' => 'Facebook Page',
			'name' => 'facebook_page',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Enter the URL of your Facebook page if you have one',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Enter the complete URL',
		),
		array (
			'key' => 'field_55c9669937393',
			'label' => 'Twitter Handle',
			'name' => 'twitter_handle',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Enter you Twitter handle here',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add the complete URL here',
		),
		array (
			'key' => 'field_55c966e0bc8df',
			'label' => 'Google Plus',
			'name' => 'google_plus',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Enter your Google Plus URL',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add the complete URL',
		),
		array (
			'key' => 'field_55c967dd86334',
			'label' => 'Footer Background Color',
			'name' => 'footer_background_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of the footer box',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_55c9694435133',
			'label' => 'Phone Number',
			'name' => 'phone_number',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Enter your phone number here',
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
			'key' => 'field_55c9698a35134',
			'label' => 'Email',
			'name' => 'email',
			'prefix' => '',
			'type' => 'email',
			'instructions' => 'Enter your email here',
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
		),
		array (
			'key' => 'field_55cd721a4b56c',
			'label' => 'Footer',
			'name' => 'footer',
			'prefix' => '',
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
		),
		array (
			'key' => 'field_55c969c5499dc',
			'label' => 'Terms Page URL',
			'name' => 'terms_page_url',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Enter the URL of your terms page here',
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
			'key' => 'field_55c969ff499dd',
			'label' => 'Privacy Page URL',
			'name' => 'privacy_page_url',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Enter the URL of your privacy page here',
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