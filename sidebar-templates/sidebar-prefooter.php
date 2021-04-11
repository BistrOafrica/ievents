<?php
/**
 * Sidebar setup for PreFooter
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php if ( is_active_sidebar( 'prefooter' ) ) : ?>
    	<!-- ******************* The Pre-Footer Full-width Widget Area ******************* -->


<div class="wrapper prefooter" id="wrapper-prefooter">
    <?php dynamic_sidebar( 'prefooter' ); ?>
</div>

<?php
endif;