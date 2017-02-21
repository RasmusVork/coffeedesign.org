<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Website Events Functions
 * Created by CMSMasters
 * 
 */


/* Replace Styles */
function happy_events_replace_tribe_events_calendar_stylesheet() {
	$styleUrl = '';
	
	
	return $styleUrl;
}

add_filter('tribe_events_stylesheet_url', 'happy_events_replace_tribe_events_calendar_stylesheet');


/* Replace Pro Styles */
function happy_events_replace_tribe_events_calendar_pro_stylesheet() {
	$styleUrl = '';
	
	
	return $styleUrl;
}

add_filter('tribe_events_pro_stylesheet_url', 'happy_events_replace_tribe_events_calendar_pro_stylesheet');


/* Replace Widget Styles */
function happy_events_replace_tribe_events_calendar_widget_stylesheet() {
	$styleUrl = '';
	
	
	return $styleUrl;
}

add_filter('tribe_events_pro_widget_calendar_stylesheet_url', 'happy_events_replace_tribe_events_calendar_widget_stylesheet');


/* Replace Responsive Styles */
function happy_events_customize_tribe_events_breakpoint() {
    return 749;
}

add_filter('tribe_events_mobile_breakpoint', 'happy_events_customize_tribe_events_breakpoint');

