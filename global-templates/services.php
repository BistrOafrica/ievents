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
        <div class="col-md-6"><h1 class="section-title">Nos prestations</h1></div>
        <div class="col-md-6"><p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p></div>
    </div>
	<div class="row service-section">
      <div class="col-md-4">
            <div class="service-card1">
            <div class="service-link">
                  <i class="fa fa-chevron-right"></i>
            </div> </div>
            <p class="section-title"><?php echo get_option('intro_1');?></p>
            
        </div>
        
        <div class="col-md-4">
            <div class="service-card2">
            <div class="service-link">
                  <i class="fa fa-chevron-right"></i>
            </div> </div>
            <p class="section-title"><?php echo get_option('intro_2');?></p>
            
        </div>

        <div class="col-md-4">
            <div class="service-card3">
            <div class="service-link">
                  <i class="fa fa-chevron-right"></i>
            </div> </div>
            <p class="section-title"><?php echo get_option('intro_3');?></p>
            
        </div>
    </div>
    <a href="#" class="btn btn-primary service-btn">Découvrez nos prestations</a>
</div>
</div>
