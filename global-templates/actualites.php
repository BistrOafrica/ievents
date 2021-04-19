<?php
/**
 * Actualites Page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>
</div>


<div class="section-blogs">
	<div class="container">
		<div class="row posts-1row" >
			<?php 
				// the query
				$the_query = new WP_Query( array(
					//'category_name' => 'news',
					'posts_per_page' => 9,
				)); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-4">
					<div class="single-blog">
					<a href="<?php the_permalink(); ?>">
						<div class="gallery-icon landscape">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="blog-desc">
							<p class="title"><?php the_title(); ?></p>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                            <p class="author">By: <?php the_author(); ?></p>
                            <p class="date"><?php the_date(); ?></p>
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
	</div>
</div>


<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">