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

</div>
<div class="wrapper prefooter" id="wrapper-prefooter">
<div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 1;">
                    <div class="cont">
                    <h1 class="section-title">Besoin D’information Ou De Conseils ?</h1>
                    <p>N’hésitez pas à contacter notre équipe commerciale.</p>
        
                    <a class="btn btn-primary long-btn">Contactez-nous</a>
                    </div>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(http://doctaroo.fr/sites/ievents/wp-content/uploads/2021/04/image-11.jpg); order:2;">
        
                </div>
            </div>


<?php //dynamic_sidebar( 'prefooter' ); ?>
</div>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

<?php
endif;