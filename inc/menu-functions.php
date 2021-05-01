<?php
/**
 * Functions and filters related to the menus.
 *
 * Makes the default WordPress navigation use an HTML structure similar
 * to the Navigation block.
 *
 * @link https://make.wordpress.org/themes/2020/07/06/printing-navigation-block-html-from-a-legacy-menu-in-themes/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function ds_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'ds_menu_classes', 1, 3);


function ds_add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','ds_add_menuclass');