<?php
/**
 * WooCommerce Compatibility File
 *
 *
 * @package startnext_woocommerce
 */


 //Add the support
function startnext_woocommerce_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'startnext_woocommerce_woocommerce_setup' );



//Filter loop_shop_columns
if ( ! function_exists( 'startnext_loop_shop_column' ) ) :
    function startnext_loop_shop_column($nc){
        if (is_active_sidebar('shop-sidebar')) {
            return 3 ;
        }else{
            return 4 ;
        }
    }
endif;
add_filter('loop_shop_columns', 'startnext_loop_shop_column');


//Filter woocommerce_after_add_to_cart_form
if ( ! function_exists( 'startnext_buy_now_submit_form' ) ) :
function startnext_buy_now_submit_form() {
    ?>
     <script>
         jQuery(document).ready(function(){
             jQuery('#buy_now_button').click(function(){
                 jQuery('#is_buy_now').val('1');
                 jQuery('form.cart').submit();
             });
         });
     </script>
    <?php
   }
endif;
add_action('woocommerce_after_add_to_cart_form', 'startnext_buy_now_submit_form');


//Filter woocommerce_add_to_cart_redirect
if ( ! function_exists( 'startnext_redirect_to_checkout' ) ) :
function startnext_redirect_to_checkout($redirect_url) {
  if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
     global $woocommerce;
     $redirect_url = wc_get_checkout_url();
  }
  return $redirect_url;
}
endif;
add_filter('woocommerce_add_to_cart_redirect', 'startnext_redirect_to_checkout');


//Filter comment_form_defaults
if ( ! function_exists( 'startnext_as_adapt_comment_form' ) ) :
function startnext_as_adapt_comment_form( $arg ) {
    $arg['class_submit'] = 'btn btn-primary';
    return $arg;
}
endif;
add_filter( 'comment_form_defaults', 'startnext_as_adapt_comment_form' );


//Filter woocommerce_checkout_fields
if ( ! function_exists( 'startnext_field_class_add' ) ) :
 function startnext_field_class_add($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            $field['class'][] = 'form-group'; 
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
endif;
add_filter('woocommerce_checkout_fields', 'startnext_field_class_add' );