<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
</div>
<div class="page-header" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center; min-height:500px">
                </div><br/><br/><br/><br/>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
	
		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
			<section class="error-404 not-found">

<header class="page-header">

<h1 class="page-title"><?php esc_html_e( 'Oops! There&rsquo;s nothing here yet!.', 'ievents' ); ?></h1>
<h1 class="page-title"><?php esc_html_e( 'Site Still Under Construction!', 'ievents' ); ?></h1>

</header><!-- .page-header -->

<div class="page-content">

	<p><?php esc_html_e( 'It looks like this page is not set up yet. Maybe try one of the links below or a search?', 'ievents' ); ?></p>

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
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>
