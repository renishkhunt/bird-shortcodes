<?php
/*
Plugin Name: Bird Shortcodes
Plugin URI: http://birdwp.com
Description: Modern bootstrap shortcodes for your WordPress theme created using Bootstrap Framework (Bootstrap v.3.1.1). Available Shortcodes: Text Columns (bootstrap grid), Togglable Tabs (bootstrap), Accordion (bootstrap), Info Box, Highlight, Toggle (bootstrap), Buttons, Font Awesome Icons (v.4.0.3), Divider.
Author: Alexey Trofimov
Version: 1.0
Author URI: http://themeforest.net/user/vilis
*/

/**
 * Add shortcodes style in the theme
 *
 * @access public
 * @return void
 */
function bird_shortcode_style() {
  wp_enqueue_style('bird-sc-main-style', get_template_directory_uri().'/bird-shortcodes/css/shortcodes_style.css', '', '', 'all');
}
add_action('wp_print_styles', 'bird_shortcode_style', 9999); // second in the queue

/**
 * Add Font Awesome Icons in the theme
 *
 * @access public
 * @return void
 */
function bird_add_font_awesome() {
  wp_enqueue_style('bird-sc-awesome-icons-style', get_template_directory_uri().'/bird-shortcodes/font_awesome/css/font-awesome.min.css', '', '', 'all');
}
add_action('wp_print_styles', 'bird_add_font_awesome', 9998); // first in the queue

/**
 * Add shortcode button to the wp editor
 *
 * @access public
 * @return void
 */
function bird_add_shortcode_button() {
  if (!current_user_can('edit_posts') && !current_user_can('edit_pages')) return;
  
  if (get_user_option('rich_editing') == 'true') {
	  add_filter('mce_external_plugins', 'bird_add_shortcode_tinymce_plugin');
	  add_filter('mce_buttons', 'bird_register_shortcode_button');
  }
}
add_action('init', 'bird_add_shortcode_button');

/**
 * Add shortcode button style
 *
 * @access public
 * @return void
 */
function bird_shortcode_button_style() {
  if (is_admin()) wp_enqueue_style('tinymce-shortcodes-style', get_template_directory_uri().'/bird-shortcodes/css/shortcodes_button.css');
}
add_action('init', 'bird_shortcode_button_style');

/**
 * Add shortcode button to TinyMCE
 *
 * @access public
 * @param $plugin_array
 * @return array
 */
function bird_add_shortcode_tinymce_plugin($plugin_array) {
  $plugin_array['birdShortcodes'] = get_template_directory_uri().'/bird-shortcodes/js/plugin.js';
  return $plugin_array;
}

/**
 * Register shortcode button
 *
 * @access public
 * @param $buttons
 * @return array
 */
function bird_register_shortcode_button($buttons) {
  array_push($buttons, "|", "bird_shortcodes_button");
  return $buttons;
}

/**
 * Refresh TinyMCE ver
 *
 * @access public
 * @param $ver
 * @return int
 */
function bird_refresh_mce($ver) {
  $ver += 3;
  return $ver;
}
add_filter('tiny_mce_version', 'bird_refresh_mce');

/**
 * Add shortcodes
 */
include('shortcodes.php');