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

	<div class="wrapper" id="wrapper-hero">
	<br/>
    <div class="row hero-row">
        <div class="col-12 col-md-7 col1">
            <p class="sm-title">Nos Prestations</p><div class="sm-title-dash"></div>
            <h1 class="hero-header">Une capacité à répondre à <span>toutes vos demandes</span></h1>  
        </div>
        <div class="col-12 col-md-5 col2">
            <br/>
            <p class="hero-text">Nous disposons d’un parc matériel de qualité, à jour et entretenu. Nous réalisons vos prestations lumière, son, structure et vos prestations clé en main, adaptées à vos besoins, avec ou sans techniciens. </p>
             
        </div>
    </div>

	</div>

	<?php
endif;
