<?php
/**
 * error site under construction setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

<div class="section">
<section class="error-404 not-found">

<header class="page-header">

<h1 class="page-title"><?php esc_html_e( 'Oops! There&rsquo;s nothing here yet!.', 'ievents' ); ?></h1>
<h1 class="page-title"><?php esc_html_e( 'Site Still Under Construction!', 'ievents' ); ?></h1>

</header><!-- .page-header -->

<div class="page-content">

	<p><?php esc_html_e( 'It looks like this page is not set up yet. you can search and view our products or blogs below.', 'ievents' ); ?></p>

	<?php get_search_form(); ?>

	<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

	<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

		<div class="widget widget_categories">

			<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'ievents' ); ?></h2>

			<ul>
				<?php
				wp_list_categories(
					array(
						'orderby'  => 'count',
						'order'    => 'DESC',
						'show_count' => 1,
						'title_li' => '',
						'number'   => 10,
					)
				);
				?>
			</ul>

		</div><!-- .widget -->

	<?php endif; ?>

	<?php

	/* translators: %1$s: smiley */
	$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ievents' ), convert_smilies( ':)' ) ) . '</p>';
	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

	the_widget( 'WP_Widget_Tag_Cloud' );
	?>

</div><!-- .page-content -->

</section><!-- .error-404 -->