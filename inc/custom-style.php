<?php
/**
 * Register custom style.
 */

if ( ! function_exists( 'startnext_custom_css' ) ) {
    function startnext_custom_css(){
        wp_enqueue_style( 'startnext-style', get_stylesheet_uri() );

        $custom_css ='';

        if ((class_exists( 'CMB2_Bootstrap_260', true )) && 
            (cmb2_get_option( 'startnext_main_options', 'boxed_layout' )) OR
            (class_exists( 'CMB2_Bootstrap_260', true )) &&
            (cmb2_get_option( 'startnext_main_options', 'body_bg_color' )) OR
            (class_exists( 'CMB2_Bootstrap_260', true )) &&
            (cmb2_get_option( 'startnext_main_options', 'body_bg_image' ))
        
        ) {
            $boxed_layout = cmb2_get_option( 'startnext_main_options', 'boxed_layout');
            $body_bg_color = cmb2_get_option( 'startnext_main_options', 'body_bg_color');
            $body_bg_image = cmb2_get_option( 'startnext_main_options', 'body_bg_image');
                 
            //Boxed Layout
            if ($boxed_layout != '') {
                wp_register_script( 'startnext-main', get_template_directory_uri() . '/assets/js/startnext-main.js' );

                wp_localize_script( 'startnext-main', 'frontend_ajax_object',
                    array( 
                        'work_slide' => 3,
                        'team_slide' => 3,
                    )
                );
                $custom_css .='
                    .default-layout {
                        background-color: white;
                    }
                    .boxed-layout {
                        max-width: 1140px;
                        margin: auto;
                        overflow: hidden;
                        padding-left: 20px;
                        padding-right: 20px;
                    }
                    .works-slides, .team-area .owl-carousel{
                        max-width: 1140px;
                        margin: auto;
                    }
                '; 
                //Body
                if ($body_bg_image != '') {
                    $custom_css .='
                        body{
                            background-image: url('.esc_attr($body_bg_image, 'startnext').');
                        }
                    ';
                }
                if ($body_bg_color != '') {
                    $custom_css .='
                    body{
                        background-color: '.esc_attr($body_bg_color, 'startnext').'!important;
                    }
                    ';
                }
            }
        }
        wp_add_inline_style('startnext-style', $custom_css);
    }
}
add_action( 'wp_enqueue_scripts', 'startnext_custom_css' );



