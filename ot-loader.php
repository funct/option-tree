<?php
/**
 * Plugin Name: OptionTree
 * Plugin URI:  https://github.com/valendesigns/option-tree/
 * Description: Theme Options UI Builder for WordPress. A simple way to create & save Theme Options and Meta Boxes for free or premium themes.
 * Version:     2.5.3
 * Author:      Derek Herman
 * Author URI:  http://valendesigns.com
 * License:     GPLv3
 */

/**
 * Forces Plugin Mode when OptionTree is already loaded and displays an admin notice.
 */
if ( class_exists( 'OT_Loader' ) && defined( 'OT_PLUGIN_MODE' ) && OT_PLUGIN_MODE == true ) {
  
  add_filter( 'ot_theme_mode', '__return_false', 999 );
  
  function ot_conflict_notice() {
    
    echo '<div class="error"><p>' . __( 'OptionTree is installed as a plugin and also embedded in your current theme. Please deactivate the plugin to load the theme dependent version of OptionTree, and remove this warning.', 'option-tree' ) . '</p></div>';
    
  }
  
  add_action( 'admin_notices', 'ot_conflict_notice' );
  
}

/**
 * This is the OptionTree loader class.
 *
 * @package   OptionTree
 * @author    Derek Herman <derek@valendesigns.com>
 * @copyright Copyright (c) 2013, Derek Herman
 */
if ( ! class_exists( 'OT_Loader' ) ) {

  require_once __DIR__ . '/includes/ot-loader.php';
  
  /**
   * Instantiate the OptionTree loader class.
   *
   * @since     2.0
   */
  $ot_loader = new OT_Loader();

}

/* End of file ot-loader.php */
/* Location: ./ot-loader.php */
