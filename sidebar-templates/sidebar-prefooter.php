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
                    <h1 class="section-title"><?php echo get_option('pre_footer_header');?></h1>
                    <p><?php echo get_option('pre_footer_detail');?></p>
        
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>" class="btn btn-primary long-btn">Contactez-nous</a>
                    </div>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(<?php echo get_option('pre_footer_img_1');?>); order:2;">
        
                </div>
            </div>


<?php //dynamic_sidebar( 'prefooter' ); ?>
</div>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

<?php
endif;