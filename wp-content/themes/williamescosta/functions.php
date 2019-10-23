<?php 

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
?>