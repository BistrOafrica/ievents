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
	<?php
		$heroImgUri= get_the_post_thumbnail_url();
		$defaultHeroUri=get_template_directory_uri().'/img/defaultHero.jpg';

		if($heroImgUri!=""){
			$heroUri=$heroImgUri;
		}else{
			$heroUri=$defaultHeroUri;
		}
	?>
<div class="page-header" style="background: url('<?php  
				echo $heroUri;
				?>'); background-size: cover; background-repeat: no-repeat; background-position-y: center; min-height:500px">
                </div>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">
