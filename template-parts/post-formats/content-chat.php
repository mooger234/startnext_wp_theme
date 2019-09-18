<?php
/**
 * Post Format: Chat
 * @package StartNext
 */

if ((class_exists( 'CMB2_Bootstrap_260', true ))) {
    $columns = cmb2_get_option( 'startnext_blog', 'blog_columns_select');
    $readmore = cmb2_get_option( 'startnext_blog', 'read_more');
}else {
    $columns = '2';
    $readmore = 'Read More';
}
if($columns == 1) {
    $grid = "col-xl-12 grid-item";
    $thumb_size = "startnext_post_one_columns_card_thumb";
}elseif($columns == 2) {
    $grid = "col-xl-6 grid-item";
    $thumb_size = "startnext_post_card_thumb";

}else {
    $grid = "col-xl-6 grid-item";
    $thumb_size = "startnext_post_card_thumb";
}
?>

<div class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) { echo esc_attr($grid, 'startnext');} else{ echo esc_attr('col-xl-4 grid-item');} ?>">
    <div <?php post_class( 'single-blog-post' ); ?> >
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="blog-image">
            <a href="<?php the_permalink() ?>">
                 <?php the_post_thumbnail($thumb_size) ?>
            </a>
        </div>
        <?php }  ?>

        <div class="blog-post-content <?php if ( !has_post_thumbnail() ) {echo esc_attr('without-thumb');} ?>">
            <div class="post_type_icon">
                <i class="fa fa-comments"></i>
            </div>

            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            
            <ul> 
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
            
            <?php the_excerpt() ?>

            <?php if(!$readmore == ''){ ?>
                <div class="mt-2">
                    <a href="<?php the_permalink() ?>" class="read-more-btn">
                        <?php echo  esc_html($readmore, 'startnext') ?> 
                        <i data-feather="arrow-right"></i> 
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>