<?php
/**
 * Sidebar setup for actualites 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php if ( is_active_sidebar( 'actualites' ) ) : ?>
    	<!-- ******************* The actualites Home Widget Area ******************* -->

</div>
<div class="actualites-bg">
<div class="<?php echo esc_attr( $container ); ?>" id="actualites-title" tabindex="-1">
    	<!-- ******************* The actualites Full-width Widget Area ******************* -->
        <div class="wrapper actualites" id="wrapper-actualites">
            
            <div class="row actualites-title">
            <div class="col-md-6">
                <h1 class="section-title">Nos actualités</h1>
            
            </div>
            
            <div class="col-md-6">
                <a style="actualites-link" href="#"><p class="slink">Voir toutes nos actualités ></p></a>
            </div>
            </div>

            <div class="row actualites-widgets"><?php dynamic_sidebar( 'actualites' ); ?></div>
        </div>
</div></div>
<div class="<?php echo esc_attr( $container ); ?>" id="community-title" tabindex="-1">

<?php
endif;