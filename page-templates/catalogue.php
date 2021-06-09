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
					
					echo '<div class="row category-section" >';

					$product_categories = get_terms( 'product_cat','orderby = date', 'order= DESC', 'hide_empty=1' );
					if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
					foreach ( $product_categories as $category ) { 
						$thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id',true);
            			
						if (wp_get_attachment_url( $thumbnail_id )!=''){
							$image = wp_get_attachment_url( $thumbnail_id );
						}
						else{
							$image=get_template_directory_uri().'/img/pholder.jpg';
						}
						?>
						<div class="col-md-4">
							<div class="category-image" style="background-image:url('<?php echo esc_url( $image );?>');background-size:cover;width: 100%;height: 400px;">
								<a class="category-chevron" href="<?php echo esc_url( get_term_link( $category ) ); ?>">
									<div class="category-link">
										<i class="fa fa-chevron-right"></i>
									</div>
								</a>
							</div>
							<div>
								<h2><?php echo esc_html( $category->name );?></h2>
							</div>
						</div>
<?php				}
					}
					else{ ?>
						<p><?php echo ('No product Categories Yet'); ?></p>
					<?php 
					} ?>
					</div>


				</main><!-- #main -->

			</div><!-- #primary -->



	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>