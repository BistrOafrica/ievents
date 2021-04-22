<?php
/**
 *carousel
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
	?>
    </div>
    <div class="carousel">
    <div class="carousel-inner ">
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item active">
            <img src="<?php echo get_option('slide_img_1');?>">
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item active">
            <img src="<?php echo get_option('slide_img_2');?>">
        </div>
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item active">
            <img src="<?php echo get_option('slide_img_3');?>">
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <ol class="carousel-indicators">
            <li>
                <label for="carousel-1" class="carousel-bullet">.</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-bullet">.</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-bullet">.</label>
            </li>
        </ol>
    </div>
</div>
<div class="<?php echo esc_attr( $container ); ?>" id="wrapper-static-content" tabindex="-1">