<?php
  // Thumbnails
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'image', 'quote', 'test' ) );

  add_filter('wp_mail_content_type','set_content_type');function set_content_type($content_type){
    return 'text/html';
  }

?>
