<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */


/* Register Admin Panel JS Scripts */
function happy_events_register_admin_js_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('happy-events-composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('happy-events-composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'blog_field_layout_mode_puzzle' => 						esc_attr__('Puzzle', 'happy-events'), 
			'portfolio_title' => 									esc_attr__('Services', 'happy-events'), 
			'portfolio_field_orderby_descr' => 						esc_attr__('Choose your services order by parameter', 'happy-events'), 			
			'portfolio_field_pj_number_title' =>					esc_attr__('Services Number', 'happy-events'),
			'portfolio_field_pj_number_descr' =>					esc_attr__('Enter the number of services for showing per page', 'happy-events'),
			'portfolio_field_pj_number_descr_note' =>				esc_attr__('number, if empty - show all services', 'happy-events'), 
			'portfolio_field_categories_descr' =>					esc_attr__('Show services associated with certain categories.', 'happy-events'),
			'portfolio_field_categories_descr_note' =>				esc_attr__("If you don't choose any service categories, all your services will be shown", 'happy-events'),			
			'portfolio_field_layout_descr' =>						esc_attr__('Choose layout type for your services', 'happy-events'),
			'portfolio_field_layout_choice_grid' =>					esc_attr__('Services Grid', 'happy-events'),
			'portfolio_field_layout_mode_descr' =>					esc_attr__('Choose grid layout mode for your services', 'happy-events'),			
			'portfolio_field_col_count_descr' =>					esc_attr__('Choose number of services per row', 'happy-events'),
			'portfolio_field_col_count_descr_note' =>				esc_attr__('4 and 5 columns will be shown for pages with a fullwidth layout only. For pages with a sidebar enabled, maximum columns amount is 3.', 'happy-events'),
			'portfolio_field_col_count_descr_note_custom' =>		esc_attr__('And 5 columns will be shown only if custom content width is set and when content area width is 1350px or more.', 'happy-events'),
			'portfolio_field_metadata_descr' =>						esc_attr__('Choose services metadata that you want to show', 'happy-events'),
			'portfolio_field_gap_descr' =>							esc_attr__('Choose the gap between services', 'happy-events'),
			'portfolio_field_filter_descr' =>						esc_attr__('If checked, enable services category filter', 'happy-events'),
			'portfolio_field_sorting_descr' =>						esc_attr__('If checked, enable services date & name sorting', 'happy-events'), 
			'portfolio_field_metadata_choises_icon' =>				esc_attr__('Icon', 'happy-events'), 
			'portfolio_field_metadata_choises_duration' =>			esc_attr__('Duration', 'happy-events'), 
			'portfolio_field_metadata_choises_participants' =>		esc_attr__('Participants', 'happy-events'), 
			'portfolio_field_metadata_choises_price' =>				esc_attr__('Price', 'happy-events'), 
			'portfolio_field_metadata_choises_rating' =>			esc_attr__('Rating', 'happy-events'), 
			'posts_slider_field_poststype_choice_project' =>		esc_attr__('Services', 'happy-events'),
			'posts_slider_field_pjcateg_title' =>					esc_attr__('Services Categories', 'happy-events'),
			'posts_slider_field_pjcateg_descr' =>					esc_attr__('Show services associated with certain categories.', 'happy-events'),
			'posts_slider_field_pjcateg_descr_note' =>				esc_attr__("If you don't choose any services categories, all your services will be shown", 'happy-events'),			
			'posts_slider_field_col_count_descr' =>					esc_attr__('Choose number of services per row', 'happy-events'),			
			'posts_slider_field_pjmeta_title' =>					esc_attr__('Services Metadata', 'happy-events'),
			'posts_slider_field_pjmeta_descr' =>					esc_attr__('Choose services metadata you want to be shown', 'happy-events'),
			'service_search_title' => 								esc_attr__('Service Search', 'happy-events'), 
			'service_search_keywords_title' => 						esc_attr__('Service Search Keywords Label Text', 'happy-events'), 
			'service_search_keywords_descr' => 						esc_attr__('Enter service search keywords label text', 'happy-events'), 
			'service_search_keywords' => 							esc_attr__('Destination:', 'happy-events'), 
			'service_search_category_title' => 						esc_attr__('Service Search Category Label Text', 'happy-events'), 
			'service_search_category_descr' => 						esc_attr__('Enter service search category label text', 'happy-events'), 
			'service_search_category' => 							esc_attr__('Adventure type:', 'happy-events'), 
			'service_search_min_title' => 							esc_attr__('Service Search Min Label Text', 'happy-events'), 
			'service_search_min_descr' => 							esc_attr__('Enter service search min label text', 'happy-events'), 
			'service_search_min' => 								esc_attr__('Min ($):', 'happy-events'), 
			'service_search_max_title' => 							esc_attr__('Service Search Max Label Text', 'happy-events'), 
			'service_search_max_descr' => 							esc_attr__('Enter service search max label text', 'happy-events'), 
			'service_search_max' => 								esc_attr__('Max ($):', 'happy-events'), 
			'service_search_button_title' => 						esc_attr__('Service Search Button Text', 'happy-events'), 
			'service_search_button_descr' => 						esc_attr__('Enter service search button text', 'happy-events'), 
			'service_search_button' => 								esc_attr__('Search Adventure', 'happy-events'), 
			'posts_slider_field_slider_nav_arrow' => 				esc_attr__('Navigation Control', 'happy-events'), 
			/* Instagram shortcode */
			'instagram_feed_title' =>        						esc_attr__('Instagram Feed', 'happy-events'), 
			'id_instagram_feed_title' =>      						esc_attr__('User Id', 'happy-events'), 
			'id_instagram_feed_descr' =>       						esc_attr__('There may be several ids', 'happy-events'), 
			/* Special Heading */
			'heading_field_custom_check' => 						esc_attr__('Set Custom Font Size for Small Screens', 'happy-events'), 
			'heading_field_width_monitor' => 						esc_attr__('Monitor Width', 'happy-events'), 
			'heading_field_custom_font_size' => 					esc_attr__('Custom Font Size', 'happy-events'), 
			'heading_field_size_zero_note' => 						esc_attr__('number, in pixels (default value if empty or 0)', 'happy-events'), 
			'heading_field_custom_line_height' => 					esc_attr__('Custom Line Height', 'happy-events') 
		));
	}
}

add_action('admin_enqueue_scripts', 'happy_events_register_admin_js_scripts');


// Special Heading Shortcode Attributes Filter
add_filter('cmsmasters_custom_heading_atts_filter', 'cmsmasters_custom_heading_atts');

function cmsmasters_custom_heading_atts() {
	return array( 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'custom_check' =>  			'', 
		'width_monitor' =>  		'767', 
		'custom_font_size' => 		'', 
		'custom_line_height' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Icon List Items Shortcode Attributes Filter
add_filter('cmsmasters_icon_list_items_atts_filter', 'cmsmasters_icon_list_items_atts');

function cmsmasters_icon_list_items_atts() {
	return array( 
		'type' => 				'block', 
		'icon_type' => 			'icon', 
		'icon' => 				'cmsmasters-icon-thumbs-up-5', 
		'icon_size' => 			'0', 
		'heading' => 			'h2', 
		'items_color_type' => 	'border', 
		'border_width' => 		'10', 
		'border_radius' => 		'4px', 
		'unifier_width' => 		'0', 
		'position' => 			'left', 
		'icon_space' => 		'80', 
		'item_height' => 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'slider_nav_arrow' => 		'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'amount' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				''
	);
}
