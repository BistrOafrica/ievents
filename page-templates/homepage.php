<?php
/**
 * Template Name: Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
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
					<?php


					if ( is_front_page() ) {
						get_template_part( 'global-templates/hero-header' );
						get_template_part( 'global-templates/carousel');
						get_template_part( 'global-templates/services' ); 
						get_template_part( 'global-templates/latest-news' );
						get_template_part( 'global-templates/partners' );
						get_template_part( 'sidebar-templates/sidebar', 'community' );

						
					}else{
						


						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>