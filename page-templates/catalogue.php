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
				<?php
				require_once(get_template_directory().'/global-templates/functional_content.php');
				hero_content(
					get_option('tag_header_cp'),
					get_option('hero_header_cp'),
					get_option('header_emp_cp'),
					get_option('hero_details_cp'));
					
					echo '<div class="row service-section" >';

					$product_categories = get_terms( 'product_cat', 'hide_empty=1' );
					if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
					foreach ( $product_categories as $category ) {    
						echo '<div class="col-md-4" style="background-image:url"';echo wp_get_attachment_image( $category->image_id, 'thumbnail').'">' ;
						echo '
						<a href="#" class="service-chevron">
							<div class="service-link">
								<i class="fa fa-chevron-right"></i>
							</div>
						</a><h2>'; 
						echo esc_html( $category->name ). '</h2></div>';
						}

            
        
					}
					else{ ?>
						<p><?php echo ('No product Categories Yet'); ?></p>
					<?php 
					} ?>
					<?php echo '</div>'
		?>

				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>