<?php 
global $product;
$product_id = $product->get_id();
?>
<a class="button add_to_wishlist add_to_wishlist_ajax" href="<?php echo esc_url( add_query_arg( 'add-to-wishlist', $product_id ) )?>" data-product_id="<?php echo intval($product_id); ?>" rel="nofollow" data-toggle="tooltip" data-placement="top" title="<?php echo esc_attr($button_label); ?>">
	<?php echo wp_kses_post($icon);?>
</a>