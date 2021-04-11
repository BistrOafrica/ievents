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

		<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

		<div class="row hero-row">
			<div class="col-12 col-md-8 col1">
				<p class="sm-title">Introduction</p><div class="sm-title-dash"></div>
				<h1 class="hero-header">Une équipe de spécialistes au service de <span>votre événement</span></h1>  
			</div>
			<div class="col-12 col-md-4 col2">
				<br/>
				<p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p>
				
			</div>
		</div>
