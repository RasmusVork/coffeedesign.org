<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


function happy_events_child_enqueue_styles() {
    $parent_style = 'theme-style';
	
	
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
    wp_enqueue_style('note', get_stylesheet_directory_uri() . '/note.css', array($parent_style));
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/normalize.css', array($parent_style));
}

add_action('wp_enqueue_scripts', 'happy_events_child_enqueue_styles');
?>