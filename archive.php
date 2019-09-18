<?php
/**
 * StartNext archive pages
 * *
 * @package StartNext
 */

get_header();
?>

    <?php $page = get_post_meta(get_the_ID(),"_startnext_home_page_",true);
    if ((!$page) OR (!is_front_page() && !is_home())) : ?>
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2><?php the_archive_title(); ?></h2>
                        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
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
    
    <section class="blog-area ptb-80">
        <div class="container">
            <div class="row">
                <div class=" <?php if ( is_active_sidebar( 'sidebar-1' ) ) { echo esc_attr('col-lg-8 col-md-12');} else{ echo esc_attr('col-lg-12 col-md-12');} ?>">
                    <?php
                    if ( have_posts() ) : ?>
                        <div class="row grid">
                        <?php
                        while ( have_posts() ) :the_post(); 
                            get_template_part( 'template-parts/post-formats/content',get_post_format());
                        endwhile;
                        ?>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="pagination-area">
                                <nav aria-label="Page navigation">
                                <?php 
                                    $pagination =  paginate_links( array(
                                        'format' => '?paged=%#%',
                                        'prev_text' => '<i class="fa fa-chevron-left"></i>',
                                        'next_text' => '<i class="fa fa-chevron-right"></i>',
                                        )
                                ) ;
                                echo wp_kses_post($pagination, 'startnext');
                                ?>
                                </nav>
                            </div>
                        </div>
                        <?php
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>
                </div>
                <?php get_sidebar();  ?>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
