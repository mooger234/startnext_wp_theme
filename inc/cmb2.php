<?php
//Projects Metabox
add_action( 'cmb2_init', 'startnext_cmb2_add_project_metabox' );
function startnext_cmb2_add_project_metabox() {
	$prefix = 'startnext_';
	$project_cpt = new_cmb2_box( array(
		'id'           => $prefix . 'projects_info',
		'title'        => __( 'Projects Info', 'startnext' ),
		'object_types' => array( 'project' ),
		'context'      => 'normal',
		'priority'     => 'default',
    ) );
    $project_cpt->add_field( array(
		'name' => __( 'Client Name Label', 'startnext' ),
		'id' => $prefix . 'client_name_label',
		'type' => 'text',
	) );
	$project_cpt->add_field( array(
		'name' => __( 'Client Name', 'startnext' ),
		'id' => $prefix . 'client_name',
		'type' => 'text',
    ) );
    
    $project_cpt->add_field( array(
		'name' => __( 'Category Label', 'startnext' ),
		'id' => $prefix . 'category_label',
		'type' => 'text',
    ) );
    
	$project_cpt->add_field( array(
		'name' => __( 'Project Completed Date Label', 'startnext' ),
		'id' => $prefix . 'project_completed_date_label',
		'type' => 'text',
    ) );
    $project_cpt->add_field( array(
		'name' => __( 'Project Completed Date', 'startnext' ),
		'id' => $prefix . 'project_completed_date',
		'type' => 'text',
    ) );
    
	$project_cpt->add_field( array(
		'name' => __( 'Location Label', 'startnext' ),
		'id' => $prefix . 'location_label',
		'type' => 'text',
    ) );
    $project_cpt->add_field( array(
		'name' => __( 'Location', 'startnext' ),
		'id' => $prefix . 'location',
		'type' => 'text',
    ) );

    $project_cpt->add_field( array(
		'name' => __( 'Live Preview Link', 'startnext' ),
		'id' => $prefix . 'link',
        'type' => 'text',
        'default' => __( '#', 'startnext' ),
	) );
	$project_cpt->add_field( array(
        'name'       => __( 'Attactment File', 'startnext' ),
        'id'         => 'projectfile',
        'type' => 'file_list',
	    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	    'query_args' => array( 'type' => 'image' ), // Only images attachment
    ) );
    $project_cpt->add_field( array(
        'name' => __( 'Select card Icon', 'startnext' ),
        'id'   => $prefix . 'iconselect',
        'desc' => __( 'Select Font Awesome icon', 'startnext' ),
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
                'faver' => 5
            )
    ) );


    
}

// Feature Metabox
add_action( 'cmb2_init', 'startnext_cmb2_add_fature_metabox' );
function startnext_cmb2_add_fature_metabox() {
	$prefix = 'startnext_';
	$feature_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'fatures_info',
		'title'        => __( 'Feature Info', 'startnext' ),
		'object_types' => array( 'feature' ),
		'context'      => 'normal',
		'priority'     => 'default',
    ) );

    $feature_cmb->add_field( array(
        'name' => __( 'Select card Icon', 'startnext' ),
        'id'   => $prefix . 'feature_iconselect',
        'desc' => __( 'Select Font Awesome icon', 'startnext' ),
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
                'faver' => 5
            )
	) ); 
	$feature_cmb->add_field( array(
		'name' => __( 'Icon Color', 'startnext' ),
		'id' => $prefix . 'feature_iconcolor',
		'type'    => 'colorpicker',
		'default' => '#44ce6f',
		'desc' => __( 'default #44ce6f', 'startnext' ),
	) );
	$feature_cmb->add_field( array(
		'name' => __( 'Icon Backgorund Color', 'startnext' ),
		'id' => $prefix . 'feature_iconbg',
		'type'    => 'colorpicker',
		'default' => '#cdf1d8',
		'desc' => __( 'default #cdf1d8', 'startnext' ),
	) );
	$feature_cmb->add_field( array(
		'name' => __( 'Feature FAQ Content', 'startnext' ),
		'id' => $prefix . 'feature_faq_content',
		'type'    => 'textarea',
	) );
	$feature_cmb->add_field( array(
		'name' => __( 'Feature FAQ Image', 'startnext' ),
		'id' => $prefix . 'feature_faq_image',
		'type'    => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	    'query_args' => array( 'type' => 'image' ), // Only images attachment
	) );

	$group_field_id = $feature_cmb->add_field( array(
		'id'          => 'wiki_test_repeat_group',
		'type'        => 'group',
		'description' => __( 'Feature FAQ ', 'startnext' ),
		'options'     => array(
			'group_title'       => __( 'FAQ Title & Description', 'startnext' ), 
			'add_button'        => __( 'Add New', 'startnext' ),
			'remove_button'     => __( 'Remove', 'startnext' ),
			'sortable'          => true,
		),
	) );
	
	$feature_cmb->add_group_field( $group_field_id, array(
		'name' => 'Faq Title',
		'id'   => 'title',
		'type' => 'text',
	) );
	
	$feature_cmb->add_group_field( $group_field_id, array(
		'name' => 'Faq Description',
		'description' => 'Write a short description for this faq',
		'id'   => 'description',
		'type' => 'textarea_small',
	) );

}


// Service Metabox
add_action( 'cmb2_init', 'startnext_cmb2_add_services_metabox' );
function startnext_cmb2_add_services_metabox() {
	$prefix = 'startnext_';
	$service_cmb = new_cmb2_box( array(
		'id'           => $prefix . 'service_info',
		'title'        => __( 'Service Info', 'startnext' ),
		'object_types' => array( 'services' ),
		'context'      => 'normal',
		'priority'     => 'default',
    ) );

    $service_cmb->add_field( array(
        'name' => __( 'Select card Icon', 'startnext' ),
        'id'   => $prefix . 'service_iconselect',
        'desc' => __( 'Select Font Awesome icon', 'startnext' ),
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
                'faver' => 5
            )
	) ); 
	$service_cmb->add_field( array(
		'name' => __( 'Icon Color', 'startnext' ),
		'id' => $prefix . 'service_iconcolor',
		'type'    => 'colorpicker',
		'default' => '#44ce6f',
		'desc' => __( 'default #44ce6f', 'startnext' ),
	) );
	$service_cmb->add_field( array(
		'name' => __( 'Icon Backgorund Color', 'startnext' ),
		'id' => $prefix . 'service_iconbg',
		'type'    => 'colorpicker',
		'default' => '#cdf1d8',
		'desc' => __( 'default #cdf1d8', 'startnext' ),
	) );
	$service_cmb->add_field( array(
		'name' => __( 'Service FAQ Content', 'startnext' ),
		'id' => $prefix . 'service_faq_content',
		'type'    => 'textarea',
	) );
	$service_cmb->add_field( array(
		'name' => __( 'Service FAQ Image', 'startnext' ),
		'id' => $prefix . 'service_faq_image',
		'type'    => 'file',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	    'query_args' => array( 'type' => 'image' ), // Only images attachment
	) );

	$group_field_id = $service_cmb->add_field( array(
		'id'          => 'wiki_test_repeat_group',
		'type'        => 'group',
		'description' => __( 'Service FAQ ', 'startnext' ),
		'options'     => array(
			'group_title'       => __( 'FAQ Title & Description', 'startnext' ), 
			'add_button'        => __( 'Add New', 'startnext' ),
			'remove_button'     => __( 'Remove', 'startnext' ),
			'sortable'          => true,
		),
	) );
	
	$service_cmb->add_group_field( $group_field_id, array(
		'name' => 'Faq Title',
		'id'   => 'title',
		'type' => 'text',
	) );
	
	$service_cmb->add_group_field( $group_field_id, array(
		'name' => 'Faq Description',
		'description' => 'Write a short description for this faq',
		'id'   => 'description',
		'type' => 'textarea_small',
	) );
}

// Page Options 
add_action( 'cmb2_init', 'startnext_cmb2_home_page_metabox' );
function startnext_cmb2_home_page_metabox() {
	$prefix = '_startnext_';
	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_page_',
		'title'        => __( 'Page Default Banner', 'startnext' ),
		'object_types' => array( 'page' ),
		'context'      => 'side',
		'priority'     => 'default',
	) );
	$cmb->add_field( array(
		'name' => __( 'Page Banner Hide?', 'startnext' ),
		'id' => $prefix . 'home_page_',
        'type' => 'checkbox',
        'desc' => __( 'Yes', 'startnext' ),
	) );
	$cmb->add_field( array(
		'name' => __( 'Enable Nav background color white.', 'startnext' ),
		'id' => $prefix . 'nav_color',
        'type' => 'checkbox',
        'desc' => __( 'Default background color transparent', 'startnext' ),
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Page Color', 'startnext' ),
        'id'               => 'page_color',
        'type'             => 'radio',
        'desc' => __( 'You can choose individual color for this page.', 'startnext' ),

        'show_option_none' => true,
        'options'  => array(
            'light-green'  => esc_html__( 'Light Green (Default)', 'startnext' ),
            'pink'     => esc_html__( 'Pink', 'startnext' ),
            'purple'   => esc_html__( 'Purple', 'startnext' ),
            'brink-pink'   => esc_html__( 'Brink Pink', 'startnext' ),
        ),
    ) );

}

?>
