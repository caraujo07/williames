<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<?php 
if ( have_posts() ) {
  
  while ( have_posts() ) {
    the_post(); 
    
    the_title();
    echo '<br />';
    the_content();
    echo '<br />';
    the_permalink();
      
        echo '<br />';
        echo '<br />';
        echo '<br />';
		//
		// Post Content here
		//
	} // end while
} // end if
?>

<?php get_footer(); ?>