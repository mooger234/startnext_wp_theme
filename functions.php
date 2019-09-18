<?php
 /**
 * StartNext functions and definitions
 * @package WordPress
 * @subpackage StartNext
 * @version 1.0.0
 */


if ( ! function_exists( 'startnext_setup' ) ) :
	function startnext_setup() {
		
		// Make theme available for translation.
		load_theme_textdomain( 'startnext', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        
        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );
        
        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Main Post Thumbnail Image Size
        add_image_size( 'startnext_post_card_thumb', 510, 300, true ); 

        // Main Post Thumbnail Image Size One Columns
        add_image_size( 'startnext_post_one_columns_card_thumb', 730, 300, true ); 

        // Project Card Image Size
        add_image_size( 'startnext_project_card_thumb', 640, 450, true ); 

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'startnext' ),
        ) );
        

		//Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
        
        // Add support for posts formats
        add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat') );
	}
endif;
add_action( 'after_setup_theme', 'startnext_setup' );

//Set the content width in pixels, based on the theme's design and stylesheet.
function startnext_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'startnext_content_width', 640 );
}
add_action( 'after_setup_theme', 'startnext_content_width', 0 );

//Register widget area.
function startnext_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'startnext' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Shop', 'startnext' ),
		'id'            => 'shop-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
     //Footer Widgets One
     register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'startnext' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>'
    ) );

    //Footer Widgets Two
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'startnext' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<div class="single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );

    //Footer Widgets Three
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'startnext' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<div class="single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );

    //Footer Widgets Four
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'startnext' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'startnext' ),
		'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'startnext_widgets_init' );

 // Enqueue scripts and styles.
function startnext_scripts() {
    wp_enqueue_style( 'startnext-style', get_stylesheet_uri() );
    wp_style_add_data( 'startnext-style', 'rtl', 'replace' );

    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome-min', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'fontawesome-all-min', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    
    
    //Theme Style & Color
    $page_color = get_post_meta(get_the_ID(), 'page_color', true);
    if ($page_color != '') {
        if ($page_color == 'pink' ) {
            wp_enqueue_style( 'startnext-pink-style-main', get_template_directory_uri() . '/assets/css/startnext-pink-style.css' );
        }elseif ($page_color == 'purple') {
            wp_enqueue_style( 'startnext-purple-style-main', get_template_directory_uri() . '/assets/css/startnext-purple-style.css' );
        }elseif ($page_color == 'brink-pink') {
            wp_enqueue_style( 'startnext-brink-pink-style-main', get_template_directory_uri() . '/assets/css/startnext-brink-pink-style.css' );
        }else{
            wp_enqueue_style( 'startnext-style-main', get_template_directory_uri() . '/assets/css/startnext-style.css' );
        }
    }else{
        if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'theme_color' ))) { 
            $theme_color =  cmb2_get_option( 'startnext_main_options', 'theme_color' );
            if ($theme_color == 'pink' ) {
                wp_enqueue_style( 'startnext-pink-style-main', get_template_directory_uri() . '/assets/css/startnext-pink-style.css' );
            }elseif ($theme_color == 'purple') {
                wp_enqueue_style( 'startnext-purple-style-main', get_template_directory_uri() . '/assets/css/startnext-purple-style.css' );
            }elseif ($theme_color == 'brink-pink') {
                wp_enqueue_style( 'startnext-brink-pink-style-main', get_template_directory_uri() . '/assets/css/startnext-brink-pink-style.css' );
            }else{
                wp_enqueue_style( 'startnext-style-main', get_template_directory_uri() . '/assets/css/startnext-style.css' );
            }
        }else{
            wp_enqueue_style( 'startnext-style-main', get_template_directory_uri() . '/assets/css/startnext-style.css' );
        }
    }
    wp_enqueue_style( 'startnext-responsive', get_template_directory_uri() . '/assets/css/startnext-responsive.css' );

    //RTL CSS
    if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'rtl_enable' ))) {
        wp_enqueue_style( 'startnext-rtl', get_template_directory_uri() . '/rtl.css' );
    }

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'feather', get_template_directory_uri() . '/assets/js/feather.min.js', array( 'jquery' ), false, true );

    //RTL CSS and JS
    if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'rtl_enable' ))) {
        wp_enqueue_script( 'startnext-rtl', get_template_directory_uri() . '/assets/js/startnext-rtl.js', array( 'jquery','masonry' ), false, true );
    }else {
        wp_enqueue_script( 'startnext-main', get_template_directory_uri() . '/assets/js/startnext-main.js', array( 'jquery','masonry' ), false, true );
    }
    

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'startnext_scripts' );

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/bootstrap-navwalker.php';

// CMB2
require_once get_template_directory() . '/inc/cmb2.php';

// CMB2 Option
require_once get_template_directory() . '/inc/theme-options-cmb.php';

// TGM
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

// Recommended Plugin
require_once get_template_directory() . '/lib/recommended-plugin.php';

// Custom Style
require_once get_template_directory() . '/inc/custom-style.php';

//Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Demo Data
function startnext_import_files() {
	return array(
		array(
			'import_file_name'             => esc_html__('StartNext Demo Import', 'startnext'),
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/lib/demo-data/startnext-demo.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/lib/demo-data/startnext-widgets.json',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/lib/demo-data/startnext-customizer.dat',
			'import_notice'                => __( 'After import demo, just set static homepage from settings>reading and check widgets & menus.', 'startnext' ),
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'startnext_import_files' );

// Google Font
if ( ! function_exists( 'poppins_fonts' ) ) :
    function poppins_fonts() 
    {
        wp_enqueue_style( 'poppins-fonts', "//fonts.googleapis.com/css?family=Poppins:400,500,600,700", '', '1.0.0', 'screen' );
    }
    endif;
add_action( 'wp_enqueue_scripts', 'poppins_fonts' );

// Blog Search
if ( ! function_exists( 'startnext_search_filter' ) ) :
    function startnext_search_filter($query) {
        if ($query->is_search) {
                $query->set('post_type', 'post');
        }
        return $query;
    }
    endif;
add_filter('pre_get_posts','startnext_search_filter');

//Excerpt More
if ( ! function_exists( 'startnext_excerpt_more' ) ) :
    function startnext_excerpt_more( $more ) {
        return ' ';
    }
    endif;
    add_filter('excerpt_more', 'startnext_excerpt_more');

   
// Filter the categories archive widget to add a span around post count
function startnext_cat_count_span( $links ) {
    $links = str_replace( '</a> (', '</a><span class="post-count">(', $links );
    $links = str_replace( ')', ')</span>', $links );
    return $links;
}
add_filter( 'wp_list_categories', 'startnext_cat_count_span' );

// Filter the archives widget to add a span around post count
function startnext_archive_count_span( $links ) {
    $links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">(', $links );
    $links = str_replace( ')', ')</span>', $links );
    return $links;
}
add_filter( 'get_archives_link', 'startnext_archive_count_span' );

// Remove Site icon From Customizer
function startnext_remove_styles_sections($wp_customize) {
    $wp_customize->remove_control('site_icon');
}
add_action( 'customize_register', 'startnext_remove_styles_sections', 20, 1 );  
