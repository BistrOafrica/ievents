<?php
/**
 * Template Name: Actualites
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

<div class="wrapper" id="page-wrapper">
</div>
<div class="page-header" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center; min-height:500px">
                </div><br/><br/><br/><br/>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">

<?php get_template_part( 'global-templates/actualites'); ?>




<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>