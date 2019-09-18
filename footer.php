<?php
/**
 * StartNext footer
 */
?>
        </div><!-- #content -->

            <!-- Start Footer Area -->
            <footer class="footer-area bg-f7fafd">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <div class="logo">
                                    <a href="<?php echo site_url(); ?>" class="navbar-brand">
                                        <?php
                                            // Site Logo
                                            if ((class_exists( 'CMB2_Bootstrap_260', true ))) {
                                                $mobile_logo = cmb2_get_option( 'startnext_header', 'mobile_logo' );
                                                $logo = cmb2_get_option( 'startnext_header', 'logo' );
                                            }else {
                                                $mobile_logo = '';
                                                $logo = '';
                                            }

                                            if (!$logo == ''){ ?>
                                                <img src="<?php echo esc_url( $logo, 'startnext' ); ?>" alt="<?php echo esc_attr__('logo', 'startnext') ?>">
                                            <?php }else{
                                                echo wp_kses_post(get_bloginfo( 'name' ));
                                            } 
                                        ?>
                                    </a>
                                </div>
                                <?php 
                                    if ( is_active_sidebar( 'footer-one' ) ) { 
                                        dynamic_sidebar('footer-one'); 
                                    } 
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <?php 
                                if ( is_active_sidebar( 'footer-two' ) ) { 
                                    dynamic_sidebar('footer-two'); 
                                } 
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <?php 
                                if ( is_active_sidebar( 'footer-three' ) ) { 
                                    dynamic_sidebar('footer-three'); 
                                } 
                            ?>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="single-footer-widget">
                                <?php 
                                    if ( is_active_sidebar( 'footer-four' ) ) { 
                                        dynamic_sidebar('footer-four'); 
                                    } 
                                ?>

                                <?php if ( class_exists( 'CMB2_Bootstrap_260', true ) ) {
                                if ((cmb2_get_option( 'startnext_top_social', 'fb_link' )) 
                                    OR( cmb2_get_option( 'startnext_top_social', 'twitter_link' ))  
                                    OR(cmb2_get_option( 'startnext_top_social', 'instagram_link' ))
                                    OR(cmb2_get_option( 'startnext_top_social', 'linkedin_link' ))
                                    ) {  ?>
                                <ul class="social-links">
                                    <?php 
                                    if (cmb2_get_option( 'startnext_top_social', 'fb_link' )) { ?>
                                    <li>
                                        <a href="<?php echo esc_url(cmb2_get_option( 'startnext_top_social', 'fb_link' ), 'startnext') ;?>" class="facebook" target="_blank">
                                            <i data-feather="facebook"></i>
                                        </a>
                                    </li>
                                    <?php  } ?>

                                    <?php 
                                    if (cmb2_get_option( 'startnext_top_social', 'twitter_link' )) { ?>
                                    <li>
                                        <a href="<?php echo esc_url(cmb2_get_option( 'startnext_top_social', 'twitter_link' ), 'startnext') ;?>" class="twitter"  target="_blank">
                                            <i data-feather="twitter"></i>
                                        </a>
                                    </li>
                                    <?php  } ?>

                                    <?php 
                                    if (cmb2_get_option( 'startnext_top_social', 'instagram_link' )) { ?>
                                    <li>
                                        <a href="<?php echo esc_url(cmb2_get_option( 'startnext_top_social', 'instagram_link' ), 'startnext') ;?>"  class="instagram" target="_blank">
                                            <i data-feather="instagram"></i>
                                        </a>
                                    </li>
                                    <?php  } ?>

                                    <?php 
                                    if (cmb2_get_option( 'startnext_top_social', 'linkedin_link' )) { ?>
                                    <li>
                                        <a href="<?php echo esc_url(cmb2_get_option( 'startnext_top_social', 'linkedin_link' ), 'startnext') ;?>"  class="linkedin" target="_blank">
                                            <i data-feather="linkedin"></i>
                                        </a>
                                    </li>
                                    <?php  } ?>
                                </ul>
                                <?php
                                } } ?>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="copyright-area">
                                <p>
                                <?php 
                                if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'copyright_text' ))) {
                                    echo esc_html(cmb2_get_option( 'startnext_main_options', 'copyright_text' ), 'startnext');
                                }
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="shape1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png');?>" alt="<?php echo esc_attr__('shape', 'startnext') ?>"></div>
                <div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg');?>" alt="<?php echo esc_attr__('shape2', 'startnext') ?>"></div>
            </footer>
            <!-- End Footer Area -->

            <?php if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_main_options', 'backtotop_disable' ))) { }else{ ?>
                <div class="go-top"><i data-feather="arrow-up"></i></div>
            <?php } ?>

            <?php wp_footer(); ?>
        </div>
    </body>
</html>