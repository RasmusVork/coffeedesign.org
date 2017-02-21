<?php 
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function happy_events_options_general_tabs() {
	$cmsmasters_option = happy_events_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'happy-events');
	
	if ($cmsmasters_option['happy-events' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'happy-events');
	}
	
	$tabs['header'] = esc_attr__('Header', 'happy-events');
	$tabs['content'] = esc_attr__('Content', 'happy-events');
	$tabs['footer'] = esc_attr__('Footer', 'happy-events');
	
	return $tabs;
}


function happy_events_options_general_sections() {
	$tab = happy_events_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'happy-events');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'happy-events');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'happy-events');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'happy-events');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'happy-events');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function happy_events_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = happy_events_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_html__('Liquid', 'happy-events') . '|liquid', 
				esc_html__('Boxed', 'happy-events') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_html__('Image', 'happy-events') . '|image', 
				esc_html__('Text', 'happy-events') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'happy-events'), 
			'desc' => esc_html__('Choose your website logo image.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'happy-events'), 
			'desc' => esc_html__('Choose logo image for retina displays.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Happy Events'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'happy-events'), 
			'desc' => esc_html__('enable', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'happy-events'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'happy-events' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'happy-events'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_col', 
			'title' => esc_html__('Background Color', 'happy-events'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#f7f7f7' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_img', 
			'title' => esc_html__('Background Image', 'happy-events'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'happy-events') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'happy-events') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'happy-events') . '|repeat-y', 
				esc_html__('Repeat', 'happy-events') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'happy-events') . '|top left', 
				esc_html__('Top Center', 'happy-events') . '|top center', 
				esc_html__('Top Right', 'happy-events') . '|top right', 
				esc_html__('Center Left', 'happy-events') . '|center left', 
				esc_html__('Center Center', 'happy-events') . '|center center', 
				esc_html__('Center Right', 'happy-events') . '|center right', 
				esc_html__('Bottom Left', 'happy-events') . '|bottom left', 
				esc_html__('Bottom Center', 'happy-events') . '|bottom center', 
				esc_html__('Bottom Right', 'happy-events') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'happy-events') . '|scroll', 
				esc_html__('Fixed', 'happy-events') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'happy-events' . '_bg_size', 
			'title' => esc_html__('Background Size', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'happy-events') . '|auto', 
				esc_html__('Cover', 'happy-events') . '|cover', 
				esc_html__('Contain', 'happy-events') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'happy-events'), 
			'desc' => esc_html__('enable', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'happy-events'), 
			'desc' => esc_html__('enable', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'happy-events'), 
			'desc' => esc_html__('pixels', 'happy-events'), 
			'type' => 'number', 
			'std' => '42', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'happy-events'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'happy-events') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_line_donations_but', 
			'title' => esc_html__('Top Donations Button', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_line_donations_but_text', 
			'title' => esc_html__('Top Donations Button Text', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate Now!', 'happy-events'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'happy-events') . '|none', 
				esc_html__('Top Line Social Icons', 'happy-events') . '|social', 
				esc_html__('Top Line Navigation', 'happy-events') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_html__('Default Style', 'happy-events') . '|default', 
				esc_html__('Compact Style Left Navigation', 'happy-events') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'happy-events') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'happy-events') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'happy-events'), 
			'desc' => esc_html__('pixels', 'happy-events'), 
			'type' => 'number', 
			'std' => '80', 
			'min' => '80' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'happy-events'), 
			'desc' => esc_html__('pixels', 'happy-events'), 
			'type' => 'number', 
			'std' => '50', 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_search', 
			'title' => esc_html__('Header Search', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_donations_but', 
			'title' => esc_html__('Header Donations Button', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_donations_but_text', 
			'title' => esc_html__('Header Donations Button Text', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate Now!', 'happy-events'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'happy-events') . '|none', 
				esc_html__('Header Social Icons', 'happy-events') . '|social', 
				esc_html__('Header Custom HTML', 'happy-events') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'happy-events' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'happy-events'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'happy-events') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'happy-events'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'happy-events') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'left', 
			'choices' => array( 
				esc_html__('Left', 'happy-events') . '|left', 
				esc_html__('Right', 'happy-events') . '|right', 
				esc_html__('Center', 'happy-events') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'happy-events'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/heading_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'happy-events') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'happy-events') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'happy-events') . '|repeat-y', 
				esc_html__('Repeat', 'happy-events') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'happy-events') . '|scroll', 
				esc_html__('Fixed', 'happy-events') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'happy-events') . '|auto', 
				esc_html__('Cover', 'happy-events') . '|cover', 
				esc_html__('Contain', 'happy-events') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'happy-events'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => 'rgba(37,37,37,0)' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'happy-events'), 
			'desc' => esc_html__('pixels', 'happy-events'), 
			'type' => 'number', 
			'std' => '330', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'happy-events'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'happy-events' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '121414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'happy-events'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				esc_html__('Default', 'happy-events') . '|default', 
				esc_html__('Small', 'happy-events') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'happy-events'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_html__('None', 'happy-events') . '|none', 
				esc_html__('Footer Navigation', 'happy-events') . '|nav', 
				esc_html__('Social Icons', 'happy-events') . '|social', 
				esc_html__('Custom HTML', 'happy-events') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'happy-events'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'happy-events'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'happy-events'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'happy-events') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'happy-events' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => 'Happy Events' . ' &copy; 2016 / ' . esc_html__('All Rights Reserved', 'happy-events'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

