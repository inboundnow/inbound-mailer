<?php
/**
* Template Name: Sidebar
* @package	Inbound Email
* 
*/

$key = basename(dirname(__FILE__));


/* Configures Template Information */
$inbound_email_data[$key]['info'] = array(
	'data_type' =>'email-template',
	'label' => __( 'Sidebar' , 'inbound-mailer') ,
	'category' => 'responsive',
	'demo' => '',
	'description' => __( 'Sidebar email template.' , 'inbound-mailer' ),
	'acf' => true
);

/*
* Define ACF Fields to be used in this template
* Pay special attention to the 'location' key as this is where we tell ACF to load when this template is selected
*/
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_55cc433477c28',
	'title' => 'Sidebar',
	'fields' => array (
		array (
			'key' => 'field_55cc44eecaab2',
			'label' => 'Main Content',
			'name' => 'main_content',
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
			'key' => 'field_55cc4334a8973',
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
			'key' => 'field_55cc4c906a6a7',
			'label' => 'Header Background color',
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
			'key' => 'field_55cc4334a8d5b',
			'label' => 'Content Before Callout',
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
			'default_value' => 'Dear [lead-field id="wpleads_first_name" default="Subscriber"],
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55cc4334a9143',
			'label' => 'Callout Text',
			'name' => 'callout_text',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => 'Add your callout text here',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
<a href="#">Do it Now! »</a>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55cc4334a952b',
			'label' => 'Callout Background Color',
			'name' => 'callout_background_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of the callout',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ecf8ff',
		),
		array (
			'key' => 'field_55cc4334a9913',
			'label' => 'Content After Callout',
			'name' => 'content_after_callout',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => 'The email content after the callout area should go here',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
		array (
			'key' => 'field_55cc4334a9cfb',
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
			'key' => 'field_55cc4334aa0e4',
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
			'key' => 'field_55cc455ccaab4',
			'label' => 'Social Box',
			'name' => 'social',
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
			'key' => 'field_55cc4334ab084',
			'label' => 'Social Box Background Color',
			'name' => 'footer_bg_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of the social box',
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
			'key' => 'field_55cc4334aa4cc',
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
			'key' => 'field_55cc4334aa8b4',
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
			'key' => 'field_55cc4334aac9c',
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
			'key' => 'field_55cc4334ab46c',
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
			'key' => 'field_55cc4334ab854',
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
			'key' => 'field_55cc4334abc3c',
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
			'key' => 'field_55cc4334ac024',
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
		array (
			'key' => 'field_55cc4524caab3',
			'label' => 'Sidebar',
			'name' => 'sidebar',
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
			'key' => 'field_55cc4334ac40c',
			'label' => 'Sidebar Section',
			'name' => 'sidebar',
			'prefix' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'In the following section you will add your sidebar content. You can add a header and up to 9 sections. The header and each section can also optionally be a link that sends to a URL of your interest. If you want less than 9 sections simply leave the exceeeding sections empty',
		),
		array (
			'key' => 'field_55cc4cf88ee15',
			'label' => 'Sidebar Background Color',
			'name' => 'sidebar_bg_color',
			'prefix' => '',
			'type' => 'color_picker',
			'instructions' => 'Choose the background color of your sidebar',
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
			'key' => 'field_55cc4334ac7f4',
			'label' => 'Sidebar Header',
			'name' => 'sidebar_header',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'This is the header on top of your sidebar',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Header Thing »',
			'placeholder' => 'Add Here Your Sidebar Header',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334acbdc',
			'label' => 'Sidebar Subheader',
			'name' => 'sidebar_subheader',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the subheader that will show up under the sidebar header. Leave the field empty if you don\'t want one',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add Here the sidebar Subheader',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334acfc4',
			'label' => 'Sidebar Header Link',
			'name' => 'sidebar_header_link',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'If you add a URL here your sidebar header and subheader will become a link to this URL',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Sidebar Header Link',
		),
		array (
			'key' => 'field_55cc4334ad3ac',
			'label' => 'Sidebar 1st Link Text',
			'name' => 'sidebar_text_link_1',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 1st link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 1st link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334ad794',
			'label' => 'Sidebar 1st Link URL',
			'name' => 'sidebar_url_link_1',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 1st link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 1st link',
		),
		array (
			'key' => 'field_55cc4334adb7c',
			'label' => 'Sidebar 2nd Link Text',
			'name' => 'sidebar_text_link_2',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 2nd link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 2nd link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334adf64',
			'label' => 'Sidebar 2nd Link URL',
			'name' => 'sidebar_url_link_2',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 2nd link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 2nd link',
		),
		array (
			'key' => 'field_55cc4334ae34c',
			'label' => 'Sidebar 3rd Link Text',
			'name' => 'sidebar_text_link_3',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 3rd link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 3rd link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334ae735',
			'label' => 'Sidebar 3rd Link URL',
			'name' => 'sidebar_url_link_3',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 3rd link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 3rd link',
		),
		array (
			'key' => 'field_55cc4334aeb1d',
			'label' => 'Sidebar 4th Link Text',
			'name' => 'sidebar_text_link_4',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 4th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 4th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334aef05',
			'label' => 'Sidebar 4th Link URL',
			'name' => 'sidebar_url_link_4',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 4th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 4th link',
		),
		array (
			'key' => 'field_55cc4334af2ed',
			'label' => 'Sidebar 5th Link Text',
			'name' => 'sidebar_text_link_5',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 5th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 5th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334af6d5',
			'label' => 'Sidebar 5th Link URL',
			'name' => 'sidebar_url_link_5',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 5th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 5th link',
		),
		array (
			'key' => 'field_55cc4334afabd',
			'label' => 'Sidebar 6th Link Text',
			'name' => 'sidebar_text_link_6',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 6th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 6th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334afea5',
			'label' => 'Sidebar 6th Link URL',
			'name' => 'sidebar_url_link_6',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 6th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 6th link',
		),
		array (
			'key' => 'field_55cc4334b028d',
			'label' => 'Sidebar 7th Link Text',
			'name' => 'sidebar_text_link_7',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 7th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 7th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334b0675',
			'label' => 'Sidebar 7th Link URL',
			'name' => 'sidebar_url_link_7',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 7th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 6th link',
		),
		array (
			'key' => 'field_55cc4334b0a5d',
			'label' => 'Sidebar 8th Link Text',
			'name' => 'sidebar_text_link_8',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 8th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 8th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334b0e45',
			'label' => 'Sidebar 8th Link URL',
			'name' => 'sidebar_url_link_8',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 8th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 8th link',
		),
		array (
			'key' => 'field_55cc4334b122d',
			'label' => 'Sidebar 9th Link Text',
			'name' => 'sidebar_text_link_9',
			'prefix' => '',
			'type' => 'text',
			'instructions' => 'Here you should add the text for the 9th link of your sidebar. Leave it empty if you don\'t want this section',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Add here the sidebar link text for the 9th link',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55cc4334b1615',
			'label' => 'Sidebar 9th Link URL',
			'name' => 'sidebar_url_link_9',
			'prefix' => '',
			'type' => 'url',
			'instructions' => 'Here you should add the URL for the 9th link of your sidebar. Leave it empty if you don\'t want any link',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#',
			'placeholder' => 'Add here the sidebar link URL for the 9th link',
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