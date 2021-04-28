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

<div id="full-width-page-wrapper">

	<div id="content">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
                <div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
                    
                    
                    <?php
                        require_once(get_template_directory().'/global-templates/functional_content.php');
                        hero_content(
                            get_option('tag_header_ap'),
                            get_option('hero_header_ap'),
                            get_option('header_emp_ap'),
                            get_option('hero_details_ap'));
                        get_template_part('global-templates/hero');
						get_template_part( 'global-templates/actualites');
					?>
					</div>

<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>