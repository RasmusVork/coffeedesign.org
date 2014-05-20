<?php

// Thumbnail support
add_theme_support( 'post-thumbnails' );

// SVG support
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

?>