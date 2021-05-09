<?php
/**
 * error site under construction setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

function hero_content($tag,$header,$emp,$details){
    echo "<div class='row hero-row'>
    <div class='col-12 col-md-8 col1'>
        <p class='sm-title'>";
    echo $tag;
    echo "</p><div class='sm-title-dash'></div>
    <h1 class='hero-header'>";
    echo $header;
    echo "<span>"." ";
    echo $emp;
    echo "</span></h1>  
    </div>
    <div class='col-12 col-md-4 col2'>
        <br/>
        <p class='hero-text'>";
    echo $details;
    echo "</p>
    </div>
    </div>";
} 



function prestations_section($sectionTag,$sectionTitle,$sectionContent,$serviceItem1,$serviceItem2,$serviceItem3,$serviceItem4,$serviceItem5,$serviceItem6,$section_side_img_1,$section2Title,$section2Content){
    echo '
<div class="container">
    <div class="row container columned">
        <div>
            <p class="sm-title">'; echo $sectionTag; echo '</p>
            <div class="sm-title-dash">
        </div>
    </div>
    <div>
        <br/>
        <h1 class="section-title">';echo $sectionTitle; echo'</h1>
    </div>
    <div class="row container">
        <div class="col-md-6 content">
            <p>';echo $sectionContent; echo'</p>
            <ul class="service-list">
                <li><p>';echo $serviceItem1; echo'</p></li>

                <li><p>';echo $serviceItem2; echo'</p></li>
                    
                <li><p>';echo $serviceItem3; echo'</p></li>    
                    
                <li><p>';echo $serviceItem4; echo'</p></li>
                    
                <li><p>';echo $serviceItem5; echo'</p></li>

                <li><p>';echo $serviceItem6; echo'</p></li>
                   
            </ul>

        </div>
        <div class="col-md-6 sm-empty" style="background-image: url(';echo $section_side_img_1; echo');">     
        </div>
    </div>
    <div class="section">
        <div class="row container">
            <h1>';echo $section2Title; echo'</h1>
        </div>
        <div class="row container">
            <div class="col-md-6 no-pd">
                <p>';echo $section2Content; echo'</p>
            </div>
            
    <div class="col-md-6 custom-categories">
        <div class="row">';

            $product_categories = get_terms( 'product_cat', 'hide_empty=1' );
            if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
            foreach ( $product_categories as $category ) {    
                echo '
            <div class="col-md-4"> 
                <a href="';echo esc_url( get_term_link( $category ) );echo'">
                    <h1>';echo esc_html( $category->name );echo '</h1>';echo '
                </a>
            </div>';
                }
            }
            else{ ?>
				<p><?php echo ('Ops! No product have been posted Yet'); ?></p>
			<?php 
            } ?>
            <?php


            echo '
        </div>
    </div>
    <div class="centered">
        <a class="btn btn-primary long-btn" href="http://doctaroo.fr/sites/ievents/catalogue/catalogue">Voir notre catalogue</a>
    </div>
</div>

</div>';
}

function prestation_services(){?>
    </div>
<div class="prestation-top">
        <h1 class="section-title centered"><?php echo get_option('service_Section_Title');?></h1>
        <p class="centered"><?php echo get_option('section_Excerpt');?></p>
    </div>

        <div style="margin: 70px 0px;">
        <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 1;">
                <div class="cont">
                    <h1 class="section-title"><?php echo get_option('service_header_1');?></h1>
                    <p><?php echo get_option('service_details_1');?></p>
        
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>" class="btn btn-primary long-btn">Contactez-nous</a></div>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(<?php echo get_option('service_img_1');?>); order:2;">
        
                </div>
            </div>

            <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 2;">
                <div class="cont2">
                    <h1 class="section-title"><?php echo get_option('service_header_2');?></h1>
                    <p><?php echo get_option('service_details_2');?></p>
        
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>" class="btn btn-primary long-btn">Contactez-nous</a></div>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(<?php echo get_option('service_img_2');?>); order:1;">
        
                </div>
            </div>

            <div class="row wrapper-service">
                <div class="col-md-6 col-12 contnt"style="order: 1;">
                <div class="cont">
                    <h1 class="section-title"><?php echo get_option('service_header_3');?></h1>
                    <p><?php echo get_option('service_details_3');?></p>
        
                    <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) );?>" class="btn btn-primary long-btn">Contactez-nous</a></div>
                </div>
                <div class="col-md-6 col-12 empty" style="background-image: url(<?php echo get_option('service_img_3');?>); order:2;">
        
                </div>
            </div>

            
        </div>

<?php
}?>