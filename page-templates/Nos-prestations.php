<?php
/**
 * Template Name: Nos Prestations
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
                        hero_content(get_option('tag_header_np'),get_option('hero_header_np'),get_option('header_emp_np'),get_option('hero_details_np'));
                        get_template_part('global-templates/hero');
                        prestation_services();
                        prestations_section(
                            get_option('section_tag'),//$sectionTag,
                            get_option('section_title'),//$sectionTitle,
                            get_option('section_content'),//$sectionContent,
                            get_option('service_1'),//$serviceItem1,
                            get_option('service_2'),//$serviceItem2,
                            get_option('service_3'),//$serviceItem3,
                            get_option('service_4'),//$serviceItem4,
                            get_option('service_5'),//$serviceItem5,
                            get_option('service_6'),//$serviceItem6
                            get_option('section_side_img_1'),//$section_side_img_1,
                            get_option('section_2_title'),//$section2Title,
                            get_option('section_2_content'),//$section2Content,
                            )
                    ?>  
                </div>






				</main><!-- #main -->

			</div><!-- #primary -->





<!--*-->

    
<?php get_template_part( 'sidebar-templates/sidebar', 'prefooter' ); ?>
<?php 
	get_footer();
?>