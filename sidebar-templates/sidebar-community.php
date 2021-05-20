<?php
/**
 * Sidebar setup for community section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php if ( is_active_sidebar( 'community' ) ) : ?>
    	<!-- ******************* The Community Home Widget Area ******************* -->

</div>
<div class="<?php echo esc_attr( $container ); ?>" id="community-title" tabindex="-1">
<div class="wrapper community" id="wrapper-community">

    <p class="sm-title">Instagram</p><div class="sm-title-dash"></div>
    <h1 class="section-title">Rejoignez La Communauté <br/>#I-Events</h1>
</div></div>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-62e94ba4-78b6-46ae-91f7-693c16add00d"></div>


<div class="<?php echo esc_attr( $container ); ?>" id="community-title" tabindex="-1">
<?php
endif;