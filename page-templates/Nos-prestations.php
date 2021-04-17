<?php
/**
 * Template Name: Nos Prestations
 *
 * Template for displaying our services.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="full-width-page-wrapper">

	<div id="content">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<?php get_template_part( 'global-templates/hero-header' ); ?>
                    <div class="row hero-row">
			            <div class="col-12 col-md-8 col1">
                            <p class="sm-title">Nos Prestations</p><div class="sm-title-dash"></div>
                            <h1 class="hero-header">Une capacité à répondre à <span>toutes vos demandes</span></h1>  
                        </div>
                        <div class="col-12 col-md-4 col2">
                            <br/>
                            <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p>
				        </div>
		            </div>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>