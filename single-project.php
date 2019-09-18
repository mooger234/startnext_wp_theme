<?php
/**
 * Single Project Page
 * *
 */
get_header();
?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <h2><?php the_title() ?></h2>
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

          <!-- Start Project Details Area -->
		<section class="project-details-area ptb-80">
            <div class="container">
                <div class="row">
                    <?php 
                    while ( have_posts() ) :
                        the_post();
                        $files = get_post_meta( get_the_ID(), 'projectfile', 1 );
                        if (!empty($files)) {
                            foreach ($files as $file ) { ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="project-details-image">
                                    <img src="<?php echo esc_url($file) ?>" alt="<?php echo esc_attr__('works', 'startnext') ?>">

                                    <a href="<?php echo esc_url($file) ?>" class="popup-btn"><i data-feather="plus"></i></a>
                                </div>
                            </div>
                            <?php }
                        } ?>
                        <div class="col-lg-12 col-md-12">
                            <div class="project-details-desc">
                                <?php the_content() ?>
                                <div class="project-details-information">
                                   
                                    <?php $data = get_post_meta( get_the_ID(), 'startnext_client_name', true );
                                        if(!empty( $data) ) : ?>
                                        <div class="single-info-box">
                                            <h4><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_client_name_label', true), 'startnext')?></h4>
                                            <p><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_client_name', true), 'startnext')?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php
                                    $terms = wp_get_post_terms($post->ID, 'project_cat'); 
                                    if ($terms) { ?>
                                        <div class="single-info-box">
                                            <h4><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_category_label', true), 'startnext')?></h4>
                                            <p><?php $output = array(); foreach ($terms as $term) { $output[] = $term->name; } echo join( ', ', $output );?></p>
                                        </div>
                                        <?php
                                    } ?>
                                    
                                    <?php $data = get_post_meta( get_the_ID(), 'startnext_project_completed_date', true );
                                        if( !empty( $data) ) : ?>
                                        <div class="single-info-box">
                                            <h4><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_project_completed_date_label', true), 'startnext')?></h4>
                                            <p><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_project_completed_date', true), 'startnext')?></p>
                                        </div>
                                    <?php  endif; ?>

                                    <?php $data = get_post_meta( get_the_ID(), 'startnext_location', true );
                                        if( !empty( $data) ) : ?>
                                        <div class="single-info-box">
                                            <h4><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_location_label', true), 'startnext')?></h4>
                                            <p><?php echo esc_html( get_post_meta(get_the_ID(), 'startnext_location', true), 'startnext')?></p>
                                        </div>
                                    <?php  endif; ?>

                                    <?php $data = get_post_meta( get_the_ID(), 'startnext_link', true );
                                        if( !empty( $data) ) : ?>
                                        <div class="single-info-box">
                                            <a href="<?php echo esc_url( get_post_meta(get_the_ID(), 'startnext_link', true), 'startnext')?>" class="btn btn-primary"><?php echo esc_html('Live Preview', 'startnext') ?></a>
                                        </div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile; 
                    ?>
                </div>
            </div>
        </section>
        <!-- End Project Details Area -->

<?php
get_footer();
