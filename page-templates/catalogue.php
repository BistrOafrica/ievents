<?php
/**
 * Template Name: Product Catalogue
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
                <div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
                    <div class="row hero-row">
			            <div class="col-12 col-md-8 col1">
                            <p class="sm-title">Catalogue</p><div class="sm-title-dash"></div>
                            <h1 class="hero-header">Une large gamme de produit <span>disponibles à la location</span></h1>
                        </div>
                        <div class="col-12 col-md-4 col2">
                            <br/>
                            <p class="hero-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim</p>
				        </div>
		            </div>
                    <?php get_template_part( 'global-templates/hero' ); ?>
				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>