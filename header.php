<!doctype html>
<?php
if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'rtl_enable' ))) { ?>
    <html dir="rtl" <?php language_attributes(); ?>><?php        
}else { ?>
    <html <?php language_attributes(); ?>><?php
}?>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N53TBDQ');</script>
<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php
    // Favicon Icon
    if ((class_exists( 'CMB2_Bootstrap_260', true ))) {
        $fav = cmb2_get_option( 'startnext_header', 'favicon' ); 

        if(!$fav == '') { ?>
            <link rel="icon" type="image/png" href="<?php echo esc_url($fav, 'startnext'); ?>" />
        <?php } } ?>
    
    <?php 
    // Header
    wp_head();
    
  
    // Google Analytic Code
    if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_header', 'google_analytic' ))) {
        $google_analytic = cmb2_get_option( 'startnext_header', 'google_analytic'); ?>
        <script>
        <?php  echo wp_kses_post($google_analytic, 'startnext'); ?>
        </script>
        <?php     
    } ?>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N53TBDQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php
        if ((class_exists( 'CMB2_Bootstrap_260', true ))){
            $nav_bg = get_post_meta(get_the_ID(),"_startnext_nav_color",true);
            if($nav_bg == true){
                $nav_bg_class = 'p-relative';
            }else{
                $nav_bg_class = '';
            }
        }else {
            $nav_bg_class = '';
        }
        if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'boxed_layout' ))) {
            $boxed_layout = cmb2_get_option( 'startnext_main_options', 'boxed_layout'); 
            $boxed_layout = 'boxed-layout';
            
        }else{
            $boxed_layout = '';
        }
    ?>
    <div class="default-layout <?php echo esc_attr($boxed_layout, 'startnext'); ?>" >
        <!-- Start Preloader Area -->
        <?php if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'preloader_disable' ))) { }else{ ?>
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <?php } ?>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <?php
        if ((class_exists( 'CMB2_Bootstrap_260', true ))) {
            $mobile_logo = cmb2_get_option( 'startnext_header', 'mobile_logo' );
            $logo = cmb2_get_option( 'startnext_header', 'logo' );
        }else {
            $mobile_logo = '';
            $logo = '';
        }
        ?>
        <header id="header">
            <div class="startp-mobile-nav float-menu-d-none">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" >
                        <?php
                        if (!$mobile_logo == ''){ ?>
                            <img src="<?php echo esc_url( $mobile_logo, 'startnext' ); ?>" alt="<?php echo esc_attr__('logo', 'startnext') ?>">
                        <?php }elseif(!$logo =='') { ?>
                            <img src="<?php echo esc_url( $logo, 'startnext' ); ?>" alt="<?php echo esc_attr__('logo', 'startnext') ?>">
                        <?php }else{
                            echo wp_kses_post(get_bloginfo( 'name' ));
                        } ?>
                    </a>
                </div>

                <!-- Float burger menu -->
                <div class="float-burger-menu" data-toggle="modal" data-target="#FloatMenu">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>

            <!-- Float Menu Modal -->
            <div id="FloatMenu" class="modal fade modal-right float-menu-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body p-0">
                            <div class="startp-mobile-nav startp-float-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="startp-nav <?php if ( is_user_logged_in() ) {echo esc_attr('hide-adminbar', 'startnext');}?> <?php echo esc_attr($nav_bg_class, 'startnext')?>">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand">
                            <?php
                                if (!$logo == ''){ ?>
                                    <img src="<?php echo esc_url( $logo, 'startnext' ); ?>" alt="<?php echo esc_attr__('logo', 'startnext') ?>">
                                <?php }else{
                                    echo wp_kses_post(get_bloginfo( 'name' ));
                            } ?>
                        </a>
                        <?php
                        if(has_nav_menu('main-menu')){
                            wp_nav_menu( array(
                                'theme_location'  => 'main-menu',
                                'depth'	          => 5, 
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse mean-menu',
                                'container_id'    => 'navbarSupportedContent',
                                'menu_class'      => 'navbar-nav nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new Bootstrap_Navwalker(),
                            ) );
                        }
                        ?>
                        <?php if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_header', 'support_link' ))) {  ?>
                        <div class="others-option">
                            <a href="<?php echo esc_url(cmb2_get_option( 'startnext_header', 'support_link' ), 'startnext') ;?>" class="btn btn-primary"><?php echo esc_html(cmb2_get_option( 'startnext_header', 'support_text' ), 'startnext') ;?></a>
                        </div>
                        <?php } ?>
                    </nav>
                </div> 
            </div>
        </header>
        <!-- End Navbar Area -->

        <div id="content" class="site-content">
