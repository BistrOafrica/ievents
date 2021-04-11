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
  <div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
    <h1 class="section-title">Nos partenaires</h1>
    <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p>
		<div class="row logo-section">
      <div class="owl-carousel owl-theme logo-carousel">
        <?php for( $i=1;$i<7;$i++):?>
          <div class="client-logo">
            <img src="<?php echo get_option('brand_img_'.$i);?>" class="img-fluid">
          </div>
        <?php endfor; ?>
      </div>
		</div>
	</div>
</div>
