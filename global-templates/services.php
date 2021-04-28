<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

<div class="section">
    <div class="<?php echo esc_attr( $container ); ?> services" id="wrapper-static-content" tabindex="-1">
    <div class="row service-top">
        <div class="col-md-4 title"><h1 class="section-title"><?php echo get_option('service_Section_Title');?></h1></div>
        <div class="col-md-8 text"><p class="service-text"><?php echo get_option('section_Excerpt');?></p></div>
    </div>
	<div class="row service-section">
      <div class="col-md-4">
            <div class="service-card1" style="background-image: url(<?php echo get_option('service_img_1');?>); background-size:cover;">
            <a href="http://doctaroo.fr/sites/ievents/services/" class="service-chevron">
            <div class="service-link">
                <i class="fa fa-chevron-right"></i>
            </div> </div></a>
            <p class="section-title"><?php echo get_option('service_header_1');?></p>
            
        </div>
        
        <div class="col-md-4">
            <div class="service-card2" style="background-image: url(<?php echo get_option('service_img_2');?>); background-size:cover;">
            <a href="http://doctaroo.fr/sites/ievents/services/" class="service-chevron">
            <div class="service-link">
                  <i class="fa fa-chevron-right"></i>
            </div> </div></a>
            <p class="section-title"><?php echo get_option('service_header_2');?></p>
            
        </div>

        <div class="col-md-4">
            <div class="service-card3" style="background-image: url(<?php echo get_option('service_img_3');?>); background-size:cover;">
            <a href="http://doctaroo.fr/sites/ievents/services/" class="service-chevron">
            <div class="service-link">
                  <i class="fa fa-chevron-right"></i>
            </div> </div></a>
            <p class="section-title"><?php echo get_option('service_header_3');?></p>
            
        </div>
    </div>
    <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>" class="btn btn-primary service-btn">Découvrez nos prestations</a>
</div>
</div>
