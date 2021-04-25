<?php
/**
 * Hero setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>

		<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
		<?php
				require_once(get_template_directory().'/global-templates/functional_content.php');
				hero_content(
					get_option('tag_header_hp'),
					get_option('hero_header_hp'),
					get_option('header_emp_hp'),
					get_option('hero_details_hp'));
		?>
