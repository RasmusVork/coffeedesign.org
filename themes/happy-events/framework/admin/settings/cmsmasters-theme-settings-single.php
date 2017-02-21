<?php 
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Admin Panel Post, Service, Profile & Donations Campaign Settings
 * Created by CMSMasters
 * 
 */


function happy_events_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'happy-events');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Service', 'happy-events');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'happy-events');
	}
	
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$tabs['campaign'] = esc_attr__('Campaign', 'happy-events');
	}
	
	
	return $tabs;
}


function happy_events_options_single_sections() {
	$tab = happy_events_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'happy-events');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Services Single Service Options', 'happy-events');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'happy-events');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'happy-events');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function happy_events_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = happy_events_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'happy-events'), 
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
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_share_box', 
			'title' => esc_html__('Sharing Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Posts', 'happy-events') . '|related', 
				esc_html__('Show Popular Posts', 'happy-events') . '|popular', 
				esc_html__('Show Recent Posts', 'happy-events') . '|recent', 
				esc_html__('Hide More Posts Box', 'happy-events') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'happy-events'), 
			'desc' => esc_html__('posts', 'happy-events'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'happy-events' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'happy-events'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'happy-events'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_featured', 
			'title' => esc_html__('Featured Image', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
	
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_title', 
			'title' => esc_html__('Service Title', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_details_title', 
			'title' => esc_html__('Service Details Title', 'happy-events'), 
			'desc' => esc_html__('Enter a service details block title', 'happy-events'), 
			'type' => 'text', 
			'std' => 'Service details', 
			'class' => '' 
		);

		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_type', 
			'title' => esc_html__('Service Type', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_icon', 
			'title' => esc_html__('Service Icon', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_duration', 
			'title' => esc_html__('Service Duration', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_participants', 
			'title' => esc_html__('Service Participants', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_price', 
			'title' => esc_html__('Service Price', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_price_currency', 
			'title' => esc_html__('Service Currency', 'happy-events'), 
			'desc' => esc_html__('Enter a service currency', 'happy-events'), 
			'type' => 'text', 
			'std' => '$', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_price_currency_pos', 
			'title' => esc_html__('Service Currency Position', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'before', 
			'choices' => array( 
				esc_html__('Before Price', 'happy-events') . '|before', 
				esc_html__('After Price', 'happy-events') . '|after'
			) 
		);
		
		if (CMSMASTERS_RATING) {
			$options[] = array( 
				'section' => 'project_section', 
				'id' => 'happy-events' . '_portfolio_project_rating', 
				'title' => esc_html__('Service Rating', 'happy-events'), 
				'desc' => esc_html__('show', 'happy-events'), 
				'type' => 'checkbox', 
				'std' => 0 
			);
		}
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_date', 
			'title' => esc_html__('Service Date', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_cat', 
			'title' => esc_html__('Service Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_author', 
			'title' => esc_html__('Service Author', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_comment', 
			'title' => esc_html__('Service Comments', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_tag', 
			'title' => esc_html__('Service Tags', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_like', 
			'title' => esc_html__('Service Likes', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_link', 
			'title' => esc_html__('Service Link', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Services Navigation Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Services Box', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'popular', 
			'choices' => array( 
				esc_html__('Show Related Services', 'happy-events') . '|related', 
				esc_html__('Show Popular Services', 'happy-events') . '|popular', 
				esc_html__('Show Recent Services', 'happy-events') . '|recent', 
				esc_html__('Hide More Services Box', 'happy-events') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Services Box Items Number', 'happy-events'), 
			'desc' => esc_html__('services', 'happy-events'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Services Slider Pause Time', 'happy-events'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'happy-events'), 
			'type' => 'number', 
			'std' => '1', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_project_slug', 
			'title' => esc_html__('Service Slug', 'happy-events'), 
			'desc' => esc_html__('Enter a page slug that should be used for your services single item', 'happy-events'), 
			'type' => 'text', 
			'std' => 'service', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Service Categories Slug', 'happy-events'), 
			'desc' => esc_html__('Enter page slug that should be used on services categories archive page', 'happy-events'), 
			'type' => 'text', 
			'std' => 'serv-categs', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'happy-events' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Service Tags Slug', 'happy-events'), 
			'desc' => esc_html__('Enter page slug that should be used on services tags archive page', 'happy-events'), 
			'type' => 'text', 
			'std' => 'serv-tags', 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'happy-events'), 
			'desc' => esc_html__('Enter a profile details block title', 'happy-events'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'happy-events'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'happy-events'), 
			'type' => 'text', 
			'std' => 'profile', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'happy-events' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'happy-events'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'happy-events'), 
			'type' => 'text', 
			'std' => 'pl-categs', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_layout', 
			'title' => esc_html__('Layout Type', 'happy-events'), 
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
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_title', 
			'title' => esc_html__('Campaign Title', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_date', 
			'title' => esc_html__('Campaign Date', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_cat', 
			'title' => esc_html__('Campaign Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_author', 
			'title' => esc_html__('Campaign Author', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_comment', 
			'title' => esc_html__('Campaign Comments', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_tag', 
			'title' => esc_html__('Campaign Tags', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_like', 
			'title' => esc_html__('Campaign Likes', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_nav_box', 
			'title' => esc_html__('Campaign Navigation Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_share_box', 
			'title' => esc_html__('Sharing Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_author_box', 
			'title' => esc_html__('About Author Box', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_more_campaigns_box', 
			'title' => esc_html__('More Campaigns Box', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'related', 
			'choices' => array( 
				esc_html__('Show Related Campaigns', 'happy-events') . '|related', 
				esc_html__('Show Popular Campaigns', 'happy-events') . '|popular', 
				esc_html__('Show Recent Campaigns', 'happy-events') . '|recent', 
				esc_html__('Hide More Campaigns Box', 'happy-events') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_more_campaigns_count', 
			'title' => esc_html__('More Campaigns Box Items Number', 'happy-events'), 
			'desc' => esc_html__('campaigns', 'happy-events'), 
			'type' => 'number', 
			'std' => '3', 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_more_campaigns_pause', 
			'title' => esc_html__('More Campaigns Slider Pause Time', 'happy-events'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'happy-events'), 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => 'happy-events' . '_donations_campaign_slug', 
			'title' => esc_html__('Campaign Slug', 'happy-events'), 
			'desc' => esc_html__('Enter a page slug that should be used for your donations campaign single item', 'happy-events'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return $options;
}

