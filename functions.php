<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );



$active_plugins = get_option('active_plugins');

// Check if Elementor is in the list of active plugins

 if (in_array('elementor/elementor.php', apply_filters('active_plugins', $active_plugins))) {
  
//  Elementor is active
//  Add your code here

 function my_admin_notice() {

    require_once( __DIR__ . '/elementor-addons/addons.php');
   

    }
    add_action('admin_notices', 'my_admin_notice');
    


 } else {
     function my_admin_notice() {
        ?>
          
            <div class="notice notice-warning is-dismissible">
                <p><?php echo 'This must require elementors pagebuilders to be installed '; ?></p>
            </div>
           <?php
         }
         add_action('admin_notices', 'my_admin_notice');
 }



