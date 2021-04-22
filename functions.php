<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

function wpb_custom_new_menu() {
	register_nav_menu('topmenu',__( 'Top Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

function add_menuclass($ulclass) {
return preg_replace('/<a/', '<a class="nav-link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');


// Woocommerce rating stars always
    add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);

    function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }

    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
    }


add_action('admin_menu', 'customize_components');

function customize_components() { 
    add_menu_page( '','Components', '','landing', '','dashicons-welcome-widgets-menus', 90);  
    add_submenu_page('landing','Slider', 'Slider','manage_options','setup_slider','setup_slider');
    add_submenu_page('landing','Partners', 'Partners','manage_options','Partners','Partners');
    add_submenu_page('landing','Services', 'Services','manage_options','services','services');
    add_submenu_page('landing','Prefooter', 'Prefooter','manage_options','pre_footer','pre_footer');
}

function setup_slider(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 

</style>


            
<div class="postbox">
<div class="form-body row">

 <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
        
<div class="col-md-4 ">
    <fieldset>
        <legend>Slide 1</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('slide_img_1')!="")
        echo "<img src='". get_option('slide_img_1')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="slide_img_1" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
         <div class="form-group form-md-line-input">
        <label class=" control-label">Intro Text</label>
       
        <textarea name="slide_intro_1" class="form-control" autocomplete="off">
        <?php echo get_option('slide_intro_1');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

 

</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Slide 2</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('slide_img_2')!="")
        echo "<img src='". get_option('slide_img_2')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="slide_img_2" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
         <div class="form-group form-md-line-input">
        <label class=" control-label">Intro Text</label>
       
        <textarea name="slide_intro_2" class="form-control" autocomplete="off">
        <?php echo get_option('slide_intro_2');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Slide 3</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('slide_img_3')!="")
        echo "<img src='". get_option('slide_img_3')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="slide_img_3" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
         <div class="form-group form-md-line-input">
        <label class=" control-label">Intro Text</label>
       
        <textarea name="slide_intro_3" class="form-control" autocomplete="off">
        <?php echo get_option('slide_intro_3');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>



        </div>
        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="slider_btn">Submit</button>
        </div>

</form>

</div>


<?php


    if(isset($_REQUEST["slider_btn"]))
    {
    
        $slide_intro_1 = $_REQUEST["slide_intro_1"];
        $slide_intro_2 = $_REQUEST["slide_intro_2"];
        $slide_intro_3 = $_REQUEST["slide_intro_3"];
        

        add_option('slide_intro_1',$slide_intro_1,'','yes');
        update_option('slide_intro_1',$slide_intro_1);

        add_option('slide_intro_2',$slide_intro_2,'','yes');
        update_option('slide_intro_2',$slide_intro_2);

        add_option('slide_intro_3',$slide_intro_3,'','yes');
        update_option('slide_intro_3',$slide_intro_3);

               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
              
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error']==0) {  
                        $attach_id = media_handle_upload( $file, "" );
                        $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                        $image_url = $image_url_array[0];
                         
                        add_option('slide_img_'.$i,$image_url,'','yes');
                        update_option('slide_img_'.$i,$image_url);
                    }
                 
                   $i++;
                }            

            }

    }


}




function Partners(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 

</style>


            
<div class="postbox">
<div class="form-body row">

 <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
        
<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 1</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_1')!="")
        echo "<img src='". get_option('brand_img_1')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_1" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>

 

</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 2</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_2')!="")
        echo "<img src='". get_option('brand_img_2')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_2" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
    

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 3</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_3')!="")
        echo "<img src='". get_option('brand_img_3')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_3" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 4</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_4')!="")
        echo "<img src='". get_option('brand_img_4')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_4" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 5</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_5')!="")
        echo "<img src='". get_option('brand_img_5')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_5" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Brand 6</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('brand_img_6')!="")
        echo "<img src='". get_option('brand_img_6')."' style='margin:auto;width:100%'/>";
        ?>
            
        <input type="file" name="brand_img_6" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
       

    </fieldset>
</div>



        </div>
        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="brand_btn">Submit</button>
        </div>

</form>

</div>


<?php


    if(isset($_REQUEST["brand_btn"]))
    {               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
              
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error']==0) {  
                        $attach_id = media_handle_upload( $file, "" );
                        $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                        $image_url = $image_url_array[0];
                         
                        add_option('brand_img_'.$i,$image_url,'','yes');
                        update_option('brand_img_'.$i,$image_url);
                    }
                 
                   $i++;
                }            

            }

    }


}
function Services(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 
   img{
       width:300px!important;
       height:auto;
   }

</style>


            
<div class="postbox">
<div class="form-body row">

 <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
        
 <div class="col-md-4 ">
    <fieldset>
        <legend>Image1</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image1</label>
        <?php
        if(get_option('service_img_1')!="")
        echo "<img src='". get_option('service_img_1')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="service_img_1" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
        

    </fieldset>

 

</div>

<div class="row">
<div class="col-md-4 ">
    <fieldset>
        <legend>Header1</legend>
           
         <div class="form-group form-md-line-input">
        <label class=" control-label">Header1</label>

        <input type="text" name="service_header_1" value="<?php echo get_option('service_header_1');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Details1</legend>
            
         <div class="form-group form-md-line-input">
        <label class=" control-label">Details1</label>
       
        <textarea name="service_details_1" class="form-control" autocomplete="off">
        <?php echo get_option('service_details_1');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>
</div>
<div class="row">
<div class="col-md-4 ">
    <fieldset>
        <legend>Image2</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image2</label>
        <?php
        if(get_option('service_img_2')!="")
        echo "<img src='". get_option('service_img_2')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="service_img_2" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
        

    </fieldset>

 

</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Header2</legend>
           
         <div class="form-group form-md-line-input">
        <label class=" control-label">Header2</label>

        <input type="text" name="service_header_2" value="<?php echo get_option('service_header_2');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Details2</legend>
            
         <div class="form-group form-md-line-input">
        <label class=" control-label">Details2</label>
       
        <textarea name="service_details_2" class="form-control" autocomplete="off">
        <?php echo get_option('service_details_2');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>
</div>
<div class="row">
<div class="col-md-4 ">
    <fieldset>
        <legend>Image3</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image3</label>
        <?php
        if(get_option('service_img_3')!="")
        echo "<img src='". get_option('service_img_3')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="service_img_3" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
        

    </fieldset>

 

</div>

<div class="col-md-4 ">
    <fieldset>
        <legend>Header3</legend>
           
         <div class="form-group form-md-line-input">
        <label class=" control-label">Header3</label>

        <input type="text" name="service_header_3" value="<?php echo get_option('service_header_3');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Details3</legend>
            
         <div class="form-group form-md-line-input">
        <label class=" control-label">Details3</label>
       
        <textarea name="service_details_3" class="form-control" autocomplete="off">
        <?php echo get_option('service_details_3');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>
</div>



        </div>

<div class="row">
<div class="col-md-6 ">
    <fieldset>
        <legend>Service Section Title</legend>
           
         <div class="form-group form-md-line-input">
        <label class=" control-label">Title</label>

        <input type="text" name="service_Section_Title" value="<?php echo get_option('service_Section_Title');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-6 ">
    <fieldset>
        <legend>Section Excerpt</legend>
            
         <div class="form-group form-md-line-input">
        <label class=" control-label">Excerpt</label>
       
        <textarea name="section_Excerpt" class="form-control" autocomplete="off">
        <?php echo get_option('section_Excerpt');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>
</div>
        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="service_btn">Submit</button>
        </div>

</form>

</div>


<?php


    if(isset($_REQUEST["service_btn"]))
    {
    
        $service_header_1 = $_REQUEST["service_header_1"];
        $service_details_1 = $_REQUEST["service_details_1"];

        $service_header_2 = $_REQUEST["service_header_2"];
        $service_details_2 = $_REQUEST["service_details_2"];

        $service_header_3 = $_REQUEST["service_header_3"];
        $service_details_3 = $_REQUEST["service_details_3"];

        $service_Section_Title = $_REQUEST["service_Section_Title"];
        $section_Excerpt = $_REQUEST["section_Excerpt"];

        

        add_option('service_header-1',$service_header_1,'','yes');
        update_option('service_header_1',$service_header_1);

        add_option('service_details_1',$service_details_1,'','yes');
        update_option('service_details_1',$service_details_1);

        add_option('service_header_2',$service_header_2,'','yes');
        update_option('service_header_2',$service_header_2);

        add_option('service_details_2',$service_details_2,'','yes');
        update_option('service_details_2',$service_details_2);

        add_option('service_header_3',$service_header_3,'','yes');
        update_option('service_header_3',$service_header_3);

        add_option('service_details_3',$service_details_3,'','yes');
        update_option('service_details_3',$service_details_3);

        add_option('service_Section_Title',$service_Section_Title,'','yes');
        update_option('section_Excerpt',$section_Excerpt);
               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
              
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error']==0) {  
                        $attach_id = media_handle_upload( $file, "" );
                        $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                        $image_url = $image_url_array[0];
                         
                        add_option('service_img_'.$i,$image_url,'','yes');
                        update_option('service_img_'.$i,$image_url);
                    }
                 
                   $i++;
                }            

            }

    }


}
function pre_footer(){
    ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style type="text/css">
    fieldset {
     
      padding:10px !important;
      border:1px solid #E8E7E6  !important;
    }

    legend { 
     
      font-size:16px !important;
      text-transform:uppercase;
      text-align: center;
    }

   .postbox{

    margin:50px;
    padding:50px;
    padding-bottom:20px;

   } 
   img{
       width:300px!important;
       height:auto;
   }

</style>


            
<div class="postbox">
<div class="form-body row">

 <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post" enctype="multipart/form-data">
        
 <div class="col-md-4 ">
    <fieldset>
        <legend>Pre-footer Image</legend>
        <div class="form-group form-md-line-input">
            <label class="control-label">Image</label>
        <?php
        if(get_option('pre_footer_img')!="")
        echo "<img src='". get_option('pre_footer_img')."' style='margin:auto; width:100%'/>";
        ?>
            
        <input type="file" name="pre_footer_img" value="" class="form-control" autocomplete="off">
        <div class="form-control-focus"> </div>
          
        </div>      
        

    </fieldset>

 

</div>

<div class="row">
<div class="col-md-4 ">
    <fieldset>
        <legend>Header</legend>
           
         <div class="form-group form-md-line-input">
        <label class=" control-label">Header</label>

        <input type="text" name="pre_footer_header" value="<?php echo get_option('pre_footer_header');?>" class="form-control" autocomplete="off">
       
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>

</div>



<div class="col-md-4 ">
    <fieldset>
        <legend>Details1</legend>
            
         <div class="form-group form-md-line-input">
        <label class=" control-label">Details1</label>
       
        <textarea name="pre_footer_detail" class="form-control" autocomplete="off">
        <?php echo get_option('pre_footer_detail');?>
         </textarea> 
            <div class="form-control-focus"> </div>
     
         </div>

    </fieldset>
</div>
</div>

        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="service_btn">Submit</button>
        </div>

</form>

</div>


<?php


    if(isset($_REQUEST["service_btn"]))
    {
    
        $pre_footer_header= $_REQUEST["pre_footer_header"];
        $pre_footer_detail = $_REQUEST["pre_footer_detail"];

        

        add_option('pre_footer_header',$pre_footer_header,'','yes');
        update_option('pre_footer_detail',$pre_footer_detail);
               
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php'); 
       
           if ($_FILES) {

               $i=1;
               if ($_FILES[$file]['error']==0) {  
                $attach_id = media_handle_upload( $file, "" );
                $image_url_array=wp_get_attachment_image_src($attach_id,'full');
                $image_url = $image_url_array[0];
                 
                add_option('pre-footer_img'.$i,$image_url,'','yes');
                update_option('service_img'.$i,$image_url);
                }

                        

            }

    }


}
function wpb_login_logo() { ?>
    <style type="text/css">
    .login {
        background: #fff;
    }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/logo.png);
            height:150px;
            width:300px;
            max-width:320px;
            background-size:200px auto;
            background-position:center;
            background-repeat: no-repeat;
            padding: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'ievents';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


function service_section(){
    
}
function lay_featured_image() {
    
    if ( is_singular() ) {

        $id = get_queried_object_id ();

        
        if ( has_post_thumbnail( $id ) ) {

            
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            
            $url = 'http://doctaroo.fr/sites/ievents/wp-content/uploads/2021/04/ievents-carousell-scaled.jpg';

        }
    }

    return $url;
}


function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>