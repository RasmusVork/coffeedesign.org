<?php 
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function happy_events_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'happy-events');
	$tabs['icon'] = esc_attr__('Social Icons', 'happy-events');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'happy-events');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'happy-events');
	$tabs['error'] = esc_attr__('404', 'happy-events');
	$tabs['code'] = esc_attr__('Custom Codes', 'happy-events');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'happy-events');
	}
	
	return $tabs;
}


function happy_events_options_element_sections() {
	$tab = happy_events_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'happy-events');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'happy-events');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'happy-events');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'happy-events');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'happy-events');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'happy-events');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'happy-events');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;	
} 


function happy_events_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = happy_events_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'happy-events' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'happy-events'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'happy-events' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'happy-events'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-facebook-3|#|' . esc_html__('Facebook', 'happy-events') . '|true|#ffffff|#2d2d2d', 
				'cmsmasters-icon-twitter-3|#|' . esc_html__('Twitter', 'happy-events') . '|true|#ffffff|#2d2d2d',
				'cmsmasters-icon-youtube-1|#|' . esc_html__('YouTube', 'happy-events') . '|true|#ffffff|#2d2d2d',			
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'happy-events') . '|true|#ffffff|#2d2d2d',
				'cmsmasters-icon-dribbble-6|#|' . esc_html__('Dribbble', 'happy-events') . '|true|#ffffff|#2d2d2d' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'happy-events'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_html__('Dark', 'happy-events') . '|dark', 
				esc_html__('Light', 'happy-events') . '|light', 
				esc_html__('Mac', 'happy-events') . '|mac', 
				esc_html__('Metro Black', 'happy-events') . '|metro-black', 
				esc_html__('Metro White', 'happy-events') . '|metro-white', 
				esc_html__('Parade', 'happy-events') . '|parade', 
				esc_html__('Smooth', 'happy-events') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'happy-events'), 
			'desc' => esc_html__('Sets path for switching windows', 'happy-events'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_html__('Vertical', 'happy-events') . '|vertical', 
				esc_html__('Horizontal', 'happy-events') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'happy-events'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'happy-events'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'happy-events'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'happy-events'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'happy-events'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'happy-events'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'happy-events'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'happy-events'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'happy-events'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'happy-events'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'happy-events'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'happy-events'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Center', 'happy-events') . '|center', 
				esc_html__('Fit', 'happy-events') . '|fit', 
				esc_html__('Fill', 'happy-events') . '|fill', 
				esc_html__('Stretch', 'happy-events') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'happy-events'), 
			'desc' => esc_html__('Sets buttons be available or not', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'happy-events'), 
			'desc' => esc_html__('Enable the arrow buttons', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'happy-events'), 
			'desc' => esc_html__('Sets the fullscreen button', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'happy-events'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'happy-events'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'happy-events'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'happy-events'), 
			'desc' => esc_html__('Sets the swipe navigation', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'happy-events' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'happy-events'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_pj_categs', 
			'title' => esc_html__('Services Archives by Categories', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'happy-events' . '_sitemap_pj_tags', 
			'title' => esc_html__('Services Archives by Tags', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_color', 
			'title' => esc_html__('Text Color', 'happy-events'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#292929' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'happy-events'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#fbfbfb' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'happy-events'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'happy-events'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/error_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_search', 
			'title' => esc_html__('Search Line', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'happy-events'), 
			'desc' => esc_html__('show', 'happy-events'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'happy-events' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'happy-events'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'happy-events'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'happy-events' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'happy-events' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'happy-events' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'happy-events'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

