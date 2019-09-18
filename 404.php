<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package StartNext
 */

get_header();
?>
    <?php 
    $page = get_post_meta(get_the_ID(),"_startnext_home_page_",true);
    if (!is_front_page() && !is_home()  && $page != 'on') : ?>
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2><?php echo  esc_html("404",'startnext')?></h2>
                        <?php
                            if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_404_options', 'content_404_heading' ))) {
                                echo wp_kses_post(cmb2_get_option( 'startnext_404_options', 'content_404_heading' )) ;
                            }
                        ?>
                    </div>
                </div>
			</div>
			
			<div class="shape1"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape2 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape3"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape3.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape4"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape5"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape5.png') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape6 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape7"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
			<div class="shape8 rotateme"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>"></div>
        </div>
    <?php endif; ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="page-content">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/404.png') ?>" alt="<?php echo esc_attr__('404','startnext')?>">
                    <?php
                        if ((class_exists( 'CMB2_Bootstrap_260', true )) && (cmb2_get_option( 'startnext_404_options', 'content_404' ))) {
                            ?><p><?php
                            echo wp_kses_post(cmb2_get_option( 'startnext_404_options', 'content_404' )) ;
                            ?></p><?php
                        }
                    ?>
					<?php
					    get_search_form();
					?>
				</div>
			</section>
		</main>
	</div>

<?php
get_footer();
