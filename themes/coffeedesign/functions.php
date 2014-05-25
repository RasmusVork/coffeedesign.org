<?php

// Thumbnail support
add_theme_support( 'post-thumbnails' );

// SVG support
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// Event Post Type

add_action('init', 'cptui_register_my_cpt_event');
function cptui_register_my_cpt_event() {
register_post_type('event', array(
'label' => 'Events',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'events', 'with_front' => 1),
'query_var' => true,
'has_archive' => true,
'menu_position' => '5',
'supports' => array('title','editor','excerpt','comments','thumbnail'),
'taxonomies' => array('speakers'),
'labels' => array (
  'name' => 'Events',
  'singular_name' => 'Event',
  'menu_name' => 'Events',
  'add_new' => 'Add Event',
  'add_new_item' => 'Add New Event',
  'edit' => 'Edit',
  'edit_item' => 'Edit Event',
  'new_item' => 'New Event',
  'view' => 'View Event',
  'view_item' => 'View Event',
  'search_items' => 'Search Events',
  'not_found' => 'No Events Found',
  'not_found_in_trash' => 'No Events Found in Trash',
  'parent' => 'Parent Event',
)
) ); }

// Sponsor Post Type

add_action('init', 'cptui_register_my_cpt_sponsor');
function cptui_register_my_cpt_sponsor() {
register_post_type('sponsor', array(
'label' => 'Sponsors',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'sponsor', 'with_front' => true),
'query_var' => true,
'menu_position' => '6',
'supports' => array('title','thumbnail','page-attributes'),
'labels' => array (
  'name' => 'Sponsors',
  'singular_name' => 'Sponsor',
  'menu_name' => 'Sponsors',
  'add_new' => 'Add Sponsor',
  'add_new_item' => 'Add New Sponsor',
  'edit' => 'Edit',
  'edit_item' => 'Edit Sponsor',
  'new_item' => 'New Sponsor',
  'view' => 'View Sponsor',
  'view_item' => 'View Sponsor',
  'search_items' => 'Search Sponsors',
  'not_found' => 'No Sponsors Found',
  'not_found_in_trash' => 'No Sponsors Found in Trash',
  'parent' => 'Parent Sponsor',
)
) ); }

// Organizer Post Type

add_action('init', 'cptui_register_my_cpt_organizer');
function cptui_register_my_cpt_organizer() {
register_post_type('organizer', array(
'label' => 'Organizers',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'organizer', 'with_front' => true),
'query_var' => true,
'menu_position' => '7',
'supports' => array('title','thumbnail','page-attributes'),
'labels' => array (
  'name' => 'Organizers',
  'singular_name' => 'Organizer',
  'menu_name' => 'Organizers',
  'add_new' => 'Add Organizer',
  'add_new_item' => 'Add New Organizer',
  'edit' => 'Edit',
  'edit_item' => 'Edit Organizer',
  'new_item' => 'New Organizer',
  'view' => 'View Organizer',
  'view_item' => 'View Organizer',
  'search_items' => 'Search Organizers',
  'not_found' => 'No Organizers Found',
  'not_found_in_trash' => 'No Organizers Found in Trash',
  'parent' => 'Parent Organizer',
)
) ); }

// Custom Fields

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_event-registration-link',
    'title' => 'Event Registration Link',
    'fields' => array (
      array (
        'key' => 'field_53574aa27515d',
        'label' => 'Registration Link',
        'name' => 'registration_link',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'event',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_location',
    'title' => 'Location',
    'fields' => array (
      array (
        'key' => 'field_534b5eb620f17',
        'label' => 'Name',
        'name' => 'location_name',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_534b4c8f37eb1',
        'label' => 'URL',
        'name' => 'location_url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'event',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_organizer-links',
    'title' => 'Organizer Links',
    'fields' => array (
      array (
        'key' => 'field_537ad78df9f82',
        'label' => 'Email',
        'name' => 'organizer_email',
        'type' => 'email',
        'default_value' => '',
        'placeholder' => 'email@website.com',
        'prepend' => '',
        'append' => '',
      ),
      array (
        'key' => 'field_537ad63df9f7f',
        'label' => 'Website',
        'name' => 'organizer_website',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'http://yourwebsite.com',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_537ad598f9f7d',
        'label' => 'Twitter',
        'name' => 'organizer_twitter',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'username',
        'prepend' => '@',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_537ad602f9f7e',
        'label' => 'Dribbble',
        'name' => 'organizer_dribbble',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'username',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_537ad6c2f9f81',
        'label' => 'Linkedin',
        'name' => 'organizer_linkedin',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'username',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_537ad7e7f9f83',
        'label' => 'Github',
        'name' => 'organizer_github',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'username',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_537ad66bf9f80',
        'label' => 'Rdio',
        'name' => 'organizer_rdio',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => 'username',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'organizer',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_sponsors-website',
    'title' => 'Sponsor\'s Website',
    'fields' => array (
      array (
        'key' => 'field_536f00b6c074e',
        'label' => 'URL',
        'name' => 'sponsor_url',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'none',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'sponsor',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}


?>