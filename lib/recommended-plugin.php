<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'startnext_register_required_plugins' );

function startnext_register_required_plugins() {

	$plugins = array(
		
		array(
			'name'               => esc_html('StartNext Toolkit', 'startnext'),
			'slug'               => 'startnext-toolkit',
			'source'             => get_stylesheet_directory() . '/lib/plugins/startnext-toolkit.zip', 
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		//WPBakery Page Builder
		array(
			'name'               => esc_html('WPBakery Page Builder', 'startnext'),
			'slug'               => 'js_composer',
			'source'             => get_stylesheet_directory() . '/lib/plugins/js_composer.zip', 
			'required'           => true,
			'force_activation'   => false,
			'force_deactivation' => false,
		),

		// StartNext Plugin
		array(
			'name'      => esc_html('CMB2', 'startnext'),
			'slug'      => 'cmb2',
			'required'  => true,
		),
		array(
			'name'      => esc_html('CMB2 Field Type: Font Awesome', 'startnext'),
			'slug'      => 'cmb2-field-type-font-awesome',
			'required'  => true,
		),
		array(
			'name'      => esc_html('WooCommerce', 'eventnext'),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => esc_html('Contact Form 7', 'startnext'),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => esc_html('Newsletter', 'startnext'),
			'slug'      => 'newsletter',
			'required'  => false,
		),
		array(
			'name'      => esc_html('One Click Demo Import', 'startnext'),
			'slug'      => 'one-click-demo-import',
			'required'  => false,
        ),
        array(
			'name'      => esc_html('Google Typography', 'startnext'),
			'slug'      => 'google-typography',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true, 
		'dismissable'  => true, 
		'dismiss_msg'  => '',   
		'is_automatic' => false, 
		'message'      => '',                      
	);
	tgmpa( $plugins, $config );
}