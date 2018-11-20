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
  wp_enqueue_script( 'sexy-animation', SEXY_ANIMATIONS_URL . '/dist/js/app.js', array('jquery'), '', true );
//  wp_enqueue_script( 'waypoints', SEXY_ANIMATIONS_URL . '/dist/js/jquery.waypoints.min.js', array('jquery'), '', true );

  // CSS Libraries
  wp_enqueue_style( 'animate-lib', SEXY_ANIMATIONS_URL . '/dist/styles/animate.min.css' );
  //wp_enqueue_style( 'animate-lib', SEXY_ANIMATIONS_URL . '/includes/css/materialize.min.css' );

  // src CSS
  wp_enqueue_style( 'sexy-animations', SEXY_ANIMATIONS_URL . '/assets/css/sexy-animations.css' );

}