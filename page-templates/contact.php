<?php
/**
 * Template Name: contact
 *
 * Template for displaying societe.
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
                    
                    
                    <?php
                        get_template_part('global-templates/hero');

                        get_template_part( 'global-templates/left-sidebar-check' ); ?>

			        <main class="site-main" id="main">
				    <?php
				    if (have_posts()){
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'noimg' );
	
					}

				}
				else{
					get_template_part('global-templates/error');
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