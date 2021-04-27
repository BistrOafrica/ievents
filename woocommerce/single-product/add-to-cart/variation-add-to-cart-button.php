<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div>
	<a class="btn btn-primary" href="<?php echo get_permalink( get_page_by_path( 'quote' ) ); ?>">Demande de devis</a>
</div>