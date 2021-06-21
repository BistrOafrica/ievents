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
$heroImgUri= get_the_post_thumbnail_url();
		$defaultHeroUri=get_template_directory_uri().'/img/defaultHero.jpg';

		if($heroImgUri!=""){
			$heroUri=$heroImgUri;
		}else{
			$heroUri=$defaultHeroUri;
		}
?>

<div class="wrapper" id="page-wrapper">
</div>

<div class="page-header" style="background: url('<?php  
				echo $heroUri;
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center; min-height:500px">
                </div><br/>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
	
		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<?php
				if (have_posts()){
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
	
					}

				}
				else{
					get_template_part('global-templates/error');
				}
			?>
			
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
