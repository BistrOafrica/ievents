<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'statichero' ) || is_active_sidebar( 'herocanvas' ) ) :
	?>

<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
	<div class="wrapper" id="wrapper-hero">
	<br/>
    

	</div>

	<?php
endif;
