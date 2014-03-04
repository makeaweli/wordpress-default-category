<?php
/**
 * @package default
 * @version 0.1
 */
/*
Plugin Name: Default Category
Plugin URI: http://wordpress.org/plugins/default-text/
Description: Auto select category.
Author: Jason M. Kalawe
Version: 0.1
Author URI: http://makea.kalawe.com

*/

include_once dirname( __FILE__ ) . '/settings.php';

/*
 * Save the default category before it's rendered to the user
 */
function default_category_save($post_ID) {
  
  $post_categories = wp_get_post_categories( $post_ID);
  if(empty($post_categories)) {
    if(get_option('default_category_id')) {
      $default_category_id = get_option('default_category_id'); 
      wp_set_post_categories( $post_ID, $default_category_id['default_category_id'] );  
    }
  }

}
add_action( 'save_post', 'default_category_save' );