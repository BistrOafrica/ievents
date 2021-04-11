<?php
/**
 * Sidebar setup for footer full
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper footer-top" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row footer-top-wrapper">
				<div class="col-md-3 footer-brand">
					<?php if ( ! has_custom_logo() ) { ?>
								<h1 class="logo-title">ievents</h1>

							<?php } else {
							the_custom_logo();
							} ?><!-- end custom logo -->
					<p class="footer-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet.
					</p>
					<i class="fa fa-instagram"></i>
					<i class="fa fa-facebook-square"></i>
				</div>
				<div class="col-md-9 footer-widgets">
					<?php dynamic_sidebar( 'footerfull' ); ?>
				</div>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;
