<?php
/**
 * StartNext sidebar
 * *
 * @package StartNext
 */

if ( class_exists( 'WooCommerce' ) ) {
	if( is_woocommerce() ) {
		$sidebar = 'shop-sidebar';
	}elseif ( is_product() ) {
		$sidebar = 'shop-sidebar';
	}else {
		$sidebar = 'sidebar-1';
	}
}else{
	$sidebar = 'sidebar-1';
}

if ( ! is_active_sidebar( $sidebar ) ) {
	return;
}
?>
<div class="col-lg-4 col-md-12">
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar($sidebar ); ?>
    </aside>
</div>
