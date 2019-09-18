<?php
/**
 * StartNext theme options
 */

function startnext_register_main_options_metabox() {
	$main_options = new_cmb2_box( array(
		'id'           => 'startnext_main_options_page',
		'title'        => esc_html__( 'StartNext Theme Options', 'startnext' ),
		'object_types' => array( 'options-page' ),
		'option_key'      => 'startnext_main_options',
	) );
	/**
	 * Options fields ids only need
    **/
    $main_options->add_field( array(
		'name' => esc_html__( 'Preloader Disable?', 'startnext' ),
		'id'   => 'preloader_disable',
		'type' => 'checkbox',
    ) );

    $main_options->add_field( array(
		'name' => esc_html__( 'Back to Top Button Disable?', 'startnext' ),
		'id'   => 'backtotop_disable',
		'type' => 'checkbox',
    ) );

    $main_options->add_field( array(
		'name' => esc_html__( 'Theme Color', 'startnext' ),
        'id'               => 'theme_color',
        'type'             => 'radio',
        'show_option_none' => false,
        'default' => 'default',
        'options'  => array(
            'default'  => esc_html__( 'Light Green (Default)', 'startnext' ),
            'pink'     => esc_html__( 'Pink', 'startnext' ),
            'purple'   => esc_html__( 'Purple', 'startnext' ),
            'brink-pink'   => esc_html__( 'Brink Pink', 'startnext' ),
        ),
    ) );

    $main_options->add_field( array(
        'name' => esc_html__( 'Enable Boxed Layout?', 'startnext' ),
        'id'   => 'boxed_layout',
        'type' => 'checkbox',
    ) );

    $main_options->add_field( array(
        'name' => esc_html__( 'Body Background Color', 'startnext' ),
        'id'   => 'body_bg_color',
        'type'    => 'colorpicker',
        'desc' =>    __( '<b>Before select body background color please enable "Boxed Layout" </b>.', 'startnext' ),

    ) );

    $main_options->add_field( array(
        'name' => esc_html__( 'Body Background Image', 'startnext' ),
        'id'   => 'body_bg_image',
        'type'    => 'file',
        'options' => array(
            'url' => false, 
        ),
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'medium',
        'desc' =>    __( '<b>Before select body background image please enable "Boxed Layout" </b>.', 'startnext' ),

    ) );
    

    $main_options->add_field( array(
        'name' => esc_html__( 'Newsletter Enable?', 'startnext' ),
        'id'   => 'newsletter_enable',
        'type' => 'checkbox',
    ) );

    $main_options->add_field( array(
		'name' => esc_html__( 'RTL Enable?', 'startnext' ),
		'id'   => 'rtl_enable',
		'type' => 'checkbox',
    ) );
		
    $main_options->add_field( array(
        'name' => esc_html__( 'Footer Copyright Text', 'startnext' ),
        'id'   => 'copyright_text',
        'type' => 'text',
        'default' => esc_html__( 'Copyright @2019. All rights reserved', 'startnext' ), 
    ) );

    /**
	 *  Header
	**/
    $cmb_header = new_cmb2_box( array(
		'id'           => 'startnext_options_header',
		'title'        => esc_html__( 'Header', 'startnext' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'startnext_header',
		'parent_slug'  => 'startnext_main_options',
    ) );
    $cmb_header->add_field( array(
        'name' => esc_html__( 'Site Logo', 'startnext' ),
        'id'   => 'logo',
        'type'    => 'file',
        'options' => array(
            'url' => true, 
        ),
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'medium',
        'desc' =>    __( '<b>Upload a logo for your site</b>.', 'startnext' ),

    ) );
    $cmb_header->add_field( array(
        'name' => esc_html__( 'Mobile Logo', 'startnext' ),
        'id'   => 'mobile_logo',
        'type'    => 'file',
        'options' => array(
            'url' => true, 
        ),
        'query_args' => array(
            'type' => array(
            	'image/gif',
            	'image/jpeg',
            	'image/png',
            ),
        ),
        'preview_size' => 'medium',
        'desc' =>    __( '<b>Upload a logo for mobile device (optional)</b>.', 'startnext' ),

    ) );
    $cmb_header->add_field( array(
        'name' => esc_html__( 'Site Favicon Icon', 'startnext' ),
        'id'   => 'favicon',
        'type'    => 'file',
        'options' => array(
            'url' => true, 
        ),
        'query_args' => array(
            'type' => array(
            	'image/png',
            ),
        ),
        'preview_size' => 'medium',
        'desc' =>    __( '<b>Upload a favicon icon  for your site</b>.', 'startnext' ),

    ) );
    $cmb_header->add_field( array(
		'name' => esc_html__( 'Header Script Code', 'startnext' ),
        'desc' => esc_html__( 'Scripts goes before closing < / head >', 'startnext' ),
        'id' => 'google_analytic',
        'type' => 'textarea_code'
    ) );
    
    
    $cmb_header->add_field( array(
		'name' => esc_html__( 'Top bar support button text', 'startnext' ),
		'id'   => 'support_text',
        'type' => 'text',
        'default' => esc_html__( 'Support', 'startnext' ), 
    ) );
    $cmb_header->add_field( array(
		'name' => esc_html__( 'Top bar support link', 'startnext' ),
		'id'   => 'support_link',
        'type' => 'text',
        'default' => esc_html__( '#', 'startnext' ), 
    ) );

    /**
	 *  Blog Options
	**/
    $cmb_blog = new_cmb2_box( array(
		'id'           => 'startnext_options_blog',
		'title'        => esc_html__( 'Blog', 'startnext' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'startnext_blog',
		'parent_slug'  => 'startnext_main_options',
    ) );
    $cmb_blog->add_field( array(
        'name'             => 'Choose Blog Posts Columns',
        'id'               => 'blog_columns_select',
        'type'             => 'select',
        'desc'             => __('if you do not add any item in sidebar then post show 3 column.', 'startnext'),
        'show_option_none' => false,
        'default'          => 2,
        'options'          => array(
            1   => __( 'One Column', 'startnext' ),
            2   => __( 'Two Column', 'startnext' ),
        ),
    ) );
    $cmb_blog->add_field( array(
		'name'    => esc_html__( 'Blog Posts Read More Text', 'startnext' ),
		'id'      => 'read_more',
		'type'    => 'text',
		'default' => 'Read More',
    ) );
    $cmb_blog->add_field( array(
		'name'    => esc_html__( 'Blog Page Banner Title', 'startnext' ),
		'id'      => 'blog_title',
		'type'    => 'text',
		'default' => 'Blog',
    ) );

    /**
	 *  Soical Links
	**/
    $cmb_social = new_cmb2_box( array(
		'id'           => 'startnext_options_top_social',
		'title'        => esc_html__( 'Social Links', 'startnext' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'startnext_top_social',
		'parent_slug'  => 'startnext_main_options',
    ) );
    $cmb_social->add_field( array(
		'name'    => esc_html__( 'Facebook Link', 'startnext' ),
		'id'      => 'fb_link',
		'type'    => 'text',
    ) );
    $cmb_social->add_field( array(
		'name'    => esc_html__( 'Twitter Link', 'startnext' ),
		'id'      => 'twitter_link',
		'type'    => 'text',
    ) );
    $cmb_social->add_field( array(
		'name'    => esc_html__( 'Instagram Link', 'startnext' ),
		'id'      => 'instagram_link',
		'type'    => 'text',
    ) );
    $cmb_social->add_field( array(
		'name'    => esc_html__( 'Linkedin Link', 'startnext' ),
		'id'      => 'linkedin_link',
		'type'    => 'text',
    ) );
   
   	/**
	 * Options fields for 404
	**/
	$content_option_404 = new_cmb2_box( array(
		'id'           => 'content_option_404',
		'title'        => esc_html__( '404 Option', 'startnext' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'startnext_404_options',
		'parent_slug'  => 'startnext_main_options',
	) );
	$content_option_404->add_field( array(
		'name'    => esc_html__( '404 Page Heading Text', 'startnext' ),
		'id'      => 'content_404_heading',
		'type'    => 'textarea',
		'default' => esc_html__( 'We are sorry but it looks like that page does not exist anymore.', 'startnext' ), 
    ) );
    $content_option_404->add_field( array(
		'name'    => esc_html__( '404 Page Text', 'startnext' ),
		'id'      => 'content_404',
		'type'    => 'textarea',
		'default' => esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'startnext' ), 
    ) );
}
add_action( 'cmb2_admin_init', 'startnext_register_main_options_metabox' );
