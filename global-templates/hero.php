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
</div>
<div class="page-header" style="background: url('<?php  
				echo get_the_post_thumbnail_url();
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center; min-height:500px">
                </div><br/><br/><br/><br/>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
