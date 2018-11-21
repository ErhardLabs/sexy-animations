<?php

/**
 * Sexy Animations
 *
 * @package     sexyAnimations
 * @author      Sumner Erhard
 * @copyright   2017 Sumner Erhard Erhard Development LLC
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Sexy Animations
 * Description: Add waypoint animations to your content
 * Version:     1.0.0
 * Author:      Sumner Erhard
 * Author URI:  https://sumnererhard.com
 * Text Domain: sexyAnimations
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
define('SEXY_ANIMATIONS_URL', plugin_dir_url(__FILE__));
define('SEXY_ANIMATIONS_PATH', plugin_dir_path(__FILE__));

//*WAYPOINTS
add_action('wp_enqueue_scripts', 'sexy_animations_styles_scripts');
function sexy_animations_styles_scripts() {

  // src JS
  wp_enqueue_script( 'sexy-animation-js', SEXY_ANIMATIONS_URL . '/dist/js/app.js', array('jquery'), '', true );

  // CSS Libraries
  wp_enqueue_style( 'sexy-animation-css', SEXY_ANIMATIONS_URL . '/dist/styles/style.css' );

}