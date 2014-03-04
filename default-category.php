<?php
/**
 * @package default
 * @version 1.0
 */
/*
Plugin Name: SOS Category
Plugin URI: http://wordpress.org/plugins/default-text/
Description: Auto select category based on Gemini site
Author: Jason M. Kalawe
Version: 1.0
Author URI: http://makea.kalawe.com

*/


/*
 * Save the default category before it's rendered
 */
function default_category_save($post_ID) {
  wp_set_post_categories( $post_ID, array('3') );

}
add_action( 'save_post', 'default_category_save' );