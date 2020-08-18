<?php
// Add custom Theme Functions here

/**
* Add custom SKU text for shop
**/
add_action( 'woocommerce_after_shop_loop_item_title', 'shop_sku' );
function shop_sku(){
global $product;
echo '<div class="sku">Mã: ' . get_post_meta( get_the_ID(), '_sku', true ) . '</br>
		<span>*Liên hệ Hotline để có giá tốt nhất</span>
	 </div>
	 <div class="btn-more">
		<a class="btn-hotline">Hotline</a>
		<a class="btn-readmore" href="' . get_the_permalink() . '">Chi tiết</a>
	</div>';

}