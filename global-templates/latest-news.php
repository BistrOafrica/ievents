<?php
/**
 * Latest News
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>
</div>


<div class="actualites-bg section-blogs">
	<div class=" section container">
		<div class="row">
			<div class="col-8"><h1 class="section-title">Nos Actualités</h1></div>
			<div class="col-4 section-link"><a  href="doctaroo.fr/sites/ievents/actualites/"><p class="secondary-link">Voir toutes nos actualités ></p></a></div>
		</div>
		<div class="row">
			<?php 
				// the query
				$the_query = new WP_Query( array(
					'cat' => 'latest news',
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
	</div>
</div>


<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">