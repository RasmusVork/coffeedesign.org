<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('happy_events_system_fonts_list')) {
	function happy_events_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('happy_events_get_google_fonts_list')) {
	function happy_events_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'happy-events'), 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,700' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
			'Muli:400,300italic,400italic,300' => 'Muli', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('happy_events_text_transform_list')) {
	function happy_events_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'happy-events'), 
			'uppercase' => esc_html__('uppercase', 'happy-events'), 
			'lowercase' => esc_html__('lowercase', 'happy-events'), 
			'capitalize' => esc_html__('capitalize', 'happy-events'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('happy_events_text_decoration_list')) {
	function happy_events_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'happy-events'), 
			'underline' => esc_html__('underline', 'happy-events'), 
			'overline' => esc_html__('overline', 'happy-events'), 
			'line-through' => esc_html__('line-through', 'happy-events'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('happy_events_custom_color_schemes_list')) {
	function happy_events_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'happy-events'), 
			'second' => esc_html__('Custom 2', 'happy-events'), 
			'third' => esc_html__('Custom 3', 'happy-events'), 
			'fourth' => esc_html__('Custom 4', 'happy-events') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants

define('CMSMASTERS_CONTENT_COMPOSER', true);

define('CMSMASTERS_DONATIONS', true);

define('CMSMASTERS_EVENTS_SCHEDULE', true);

define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

define('CMSMASTERS_MEGA_MENU', true);

define('CMSMASTERS_SERMONS', true);

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', false);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}

if (function_exists('the_ratings')) {
	define('CMSMASTERS_RATING', false);
} else {
	define('CMSMASTERS_RATING', false);
}


// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', true);



// Theme Image Thumbnails Size
if (!function_exists('happy_events_get_image_thumbnail_list')) {
	function happy_events_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		100, 
				'height' => 	100, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'happy-events') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	386, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'happy-events') 
			), 
			'cmsmasters-service-thumb' => array( 
				'width' => 		580, 
				'height' => 	378, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Service', 'happy-events') 
			), 
			'cmsmasters-service-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Service', 'happy-events') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	496, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'happy-events') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'happy-events') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'happy-events') 
			), 
			'cmsmasters-service-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	610, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Service Full', 'happy-events') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'happy-events') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	378, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'happy-events') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('happy_events_all_color_schemes_list')) {
	function happy_events_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'happy-events'), 
			'header' => 		esc_html__('Header', 'happy-events'), 
			'navigation' => 	esc_html__('Navigation', 'happy-events'), 
			'header_top' => 	esc_html__('Header Top', 'happy-events'), 
			'footer' => 		esc_html__('Footer', 'happy-events') 
		);
		
		
		$out = array_merge($list, happy_events_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('happy_events_color_schemes_defaults')) {
	function happy_events_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#716f6e', 
				'link' => 		'#ff4e50', 
				'hover' => 		'#ff792f', 
				'heading' => 	'#242120', 
				'bg' => 		'#f5f0f0', 
				'alternate' => 	'#d8d3d1', 
				'border' => 	'#e3dfde', 
				'additional' => '#ffffff'
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#ffffff', 
				'mid_link' => 		'#ffffff', 
				'mid_hover' => 		'rgba(255,255,255,0.58)', 
				'mid_bg' => 		'rgba(255,255,255,0)', 
				'mid_bg_scroll' => 	'#fd614a', 
				'mid_border' => 	'rgba(255,255,255,0)', 
				'bot_color' => 		'rgba(255,255,255,0)', 
				'bot_link' => 		'#ffffff', 
				'bot_hover' => 		'rgba(255,255,255,0.6)', 
				'bot_bg' => 		'rgba(255,255,255,0)', 
				'bot_bg_scroll' => 	'#1f1f1f', 
				'bot_border' => 	'rgba(255,255,255,0)' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'rgba(255,255,255,0.58)', 
				'title_link_current' => 	'#ffffff', 
				'title_link_subtitle' => 	'rgba(255,255,255,0.8)', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_bg_current' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_text' => 			'#716f6e', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#edeae9', 
				'dropdown_link' => 			'#242120', 
				'dropdown_link_hover' => 	'#ff4e50', 
				'dropdown_link_subtitle' => '#8d8c8b', 
				'dropdown_link_highlight' => '#ff792f', 
				'dropdown_link_border' => 	'#edeae9'
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#ffffff', 
				'link' => 					'#ffffff', 
				'hover' => 					'rgba(255,255,255,0.58)', 
				'bg' => 					'rgba(255,255,255,0)', 
				'border' => 				'rgba(255,255,255,0)', 
				'title_link' => 			'#ffffff', 
				'title_link_hover' => 		'rgba(255,255,255,0.58)', 
				'title_link_bg' => 			'rgba(255,255,255,0)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
				'title_link_border' => 		'rgba(255,255,255,0)', 
				'dropdown_bg' => 			'#fd614a', 
				'dropdown_border' => 		'#fd614a', 
				'dropdown_link' => 			'#ffffff', 
				'dropdown_link_hover' => 	'rgba(255,255,255,0.7)', 
				'dropdown_link_highlight' => '#ffffff', 
				'dropdown_link_border' => 	'#fd614a'
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#9e9e9e', 
				'link' => 		'#ffffff', 
				'hover' => 		'#ff4e50', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#191919', 
				'alternate' => 	'#191919', 
				'border' => 	'#333333', 
				'additional' => '#ffffff'
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#afafaf', 
				'link' => 		'#afafaf', 
				'hover' => 		'#ff4e50', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#1f1f1f', 
				'alternate' => 	'#1f1f1f', 
				'border' => 	'#333333', 
				'additional' => '#ffffff'
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'rgba(255,255,255,0.7)', 
				'link' => 		'rgba(255,255,255,0.8)', 
				'hover' => 		'#3b3b3b', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#fbfbfb', 
				'alternate' => 	'#ffffff', 
				'border' => 	'#e4e4e4', 
				'additional' => '#e4e4e4'
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#716f6e', 
				'link' => 		'#ff4e50', 
				'hover' => 		'#ff792f', 
				'heading' => 	'#242120', 
				'bg' => 		'#f7f7f7', 
				'alternate' => 	'#d8d3d1', 
				'border' => 	'#e3dfde', 
				'additional' => '#ffffff'
			), 
			'fourth' => array( // custom color scheme 3
				'color' => 		'#716f6e', 
				'link' => 		'#ff4e50', 
				'hover' => 		'#ff792f', 
				'heading' => 	'#242120', 
				'bg' => 		'#f5f0f0', 
				'alternate' => 	'rgba(255,255,255,0.5)', 
				'border' => 	'#e3dfde', 
				'additional' => '#ffffff'
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/Browser.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/twitteroauth.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
	
	require_once(CMSMASTERS_COMPOSER . '/shortcodes/theme-shortcodes.php');
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/function/template-functions-donation.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}

// Events functions
if (CMSMASTERS_EVENTS_CALENDAR) {
	require_once(get_template_directory() . '/tribe-events/cmsmasters-events-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-events-schedule-functions.php');
}

// WP-PostRating functions
if (CMSMASTERS_RATING) {
	require_once(get_template_directory() . '/cmsmasters-wp-postratings/cmsmasters-rating-functions.php');
}



// Load Theme Local File
if (!function_exists('happy_events_load_theme_textdomain')) {
	function happy_events_load_theme_textdomain() {
		load_theme_textdomain('happy-events', get_template_directory() . '/' . CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'happy_events_load_theme_textdomain')) {
	add_action('after_setup_theme', 'happy_events_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('happy_events_theme_activation')) {
	function happy_events_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'happy-events') {
			add_option('cmsmasters_active_theme', 'happy-events', '', 'yes');
			
			
			happy_events_add_global_options();
			
			
			happy_events_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'happy_events_theme_activation');



// Framework Deactivation
if (!function_exists('happy_events_theme_deactivation')) {
	function happy_events_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'happy_events_theme_deactivation')) {
	add_action('switch_theme', 'happy_events_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('happy_events_plugin_activation')) {
	function happy_events_plugin_activation() {
		update_option('cmsmasters_plugin_activation', 'true');
	}
}

add_action('activate_cmsmasters-donations/cmsmasters-donations.php', 'happy_events_plugin_activation');
add_action('activate_the-events-calendar/the-events-calendar.php', 'happy_events_plugin_activation');
add_action('activate_timetable/timetable.php', 'happy_events_plugin_activation');
add_action('activate_woocommerce/woocommerce.php', 'happy_events_plugin_activation');


if (!function_exists('happy_events_plugin_activation_regenerate')) {
	function happy_events_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			happy_events_regenerate_styles();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'happy_events_plugin_activation_regenerate');

