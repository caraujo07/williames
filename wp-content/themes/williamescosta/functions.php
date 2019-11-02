<?php 

require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 360, 200);

function register_menu_topo() {
  register_nav_menu('menu-topo',__( 'Menu do Topo' ));
}
add_action( 'init', 'register_menu_topo' );

//Exclude pages from WordPress Search
if (!is_admin()) {
  function wpb_search_filter($query) {
  if ($query->is_search) {
  $query->set('post_type', 'post');
  }
  return $query;
  }
  add_filter('pre_get_posts','wpb_search_filter');
  }



  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


add_filter("the_content", "plugin_myContentFilter");

function plugin_myContentFilter($content)
{
  // Take the existing content and return a subset of it
  return substr($content, 0, 188);
}
?>