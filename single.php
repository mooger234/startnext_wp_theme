<?php
/**
 * StartNext all single posts
  *
 * @package StartNext
 */

get_header();
?>

<?php 
    $page = get_post_meta(get_the_ID(),"_startnext_home_page_",true);

    if ((!$page) OR (!is_front_page() && !is_home())) : ?>
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <h2><?php the_title() ?></h2>
                    </div>
                </div>
			</div>
			
			<div class="shape1">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape1.png'); ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape2 rotateme">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape3">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape3.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape4">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape5">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape5.png') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape6 rotateme">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape7">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape4.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
			<div class="shape8 rotateme">
                <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/shape2.svg') ?>" alt="<?php echo esc_attr__('shape','startnext')?>">
            </div>
        </div>
    <?php endif; ?>

    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-80">
        <div class="container">
            <div class="row">
                <div class=" <?php if ( is_active_sidebar( 'sidebar-1' ) ) { echo esc_attr(' col-lg-8 col-md-12');} else{ echo esc_attr('offset-lg-2 col-lg-8 col-md-12');} ?>">
                    <?php
                    while ( have_posts() ) : the_post(); ?>
                    <div class="blog-details">
                        <?php 
                        if ( has_post_thumbnail() ) {  ?> 
                            <div class="article-img">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php } ?>  

                        <div class="article-content">
                            <ul class="entry-meta"> 
                                <li>
                                    <i class="fa fa-user"></i>
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ) ?>">
                                        <?php the_author() ?>
                                    </a> 
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <?php echo wp_kses_post(get_the_date('F d, Y')) ?>
                                </li>
                            </ul>
 
                            <?php the_content(); ?>
                            
                            <?php wp_link_pages( array(
                                'before'      => '<div class="pages-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'startnext' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                ) );
                            ?>
                            
                            <?php if (has_tag()) {  ?>
                                <ul class="category">
                                    <li><b><?php echo esc_html__('Tags:', 'startnext') ?></b></li>
                                    <?php
                                    if(get_the_tag_list()) {
                                        echo  wp_kses_post(get_the_tag_list('<li>', '</li><li>', '</li>'));
                                    } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="post-controls-buttons">
                        <div class="controls-left">
                            <?php previous_post_link( '%link', 'Prev Post' ); ?>
                        </div>
                        <div class="controls-right">
                            <?php next_post_link( '%link', 'Next Post' ); ?>
                        </div>
                    </div>
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif; ?>
                    <?php endwhile; ?>
                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
<?php
get_footer();
