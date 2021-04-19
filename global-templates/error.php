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
	<br/>
	<h1 class="section-title"> Nos Actualités</h1>
	<br/>

	<div class="row">

			<?php 
				// the query
				$the_query = new WP_Query( array(
					//'category_name' => 'news',
					'posts_per_page' => 3,
				)); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-4">
					<div class="single-blog">
					<a href="<?php the_permalink(); ?>">
						<div class="blog-icon landscape" style="img{width:100%;}">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="blog-desc">
							<p class="title"><?php the_title(); ?></p>
							<p class="author">By: <?php the_author(); ?></p>
						</a>
						</div>
					</div>
				</div>
					
					
					

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

				<?php else : ?>
				<p><?php __('No News'); ?></p>
				<?php endif; ?>
	</div>
	

	

	<?php

	/* translators: %1$s: smiley */
	$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'ievents' ), convert_smilies( ':)' ) ) . '</p>';
	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

	the_widget( 'WP_Widget_Tag_Cloud' );
	?>

</div><!-- .page-content -->

</section><!-- .error-404 -->