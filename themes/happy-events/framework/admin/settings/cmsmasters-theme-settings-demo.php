<?php 
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function happy_events_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'happy-events');
	$tabs['export'] = esc_attr__('Export', 'happy-events');
	
	
	return $tabs;
}


function happy_events_options_demo_sections() {
	$tab = happy_events_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'happy-events');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'happy-events');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function happy_events_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = happy_events_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'happy-events' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'happy-events'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'happy-events'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'happy-events' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'happy-events'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'happy-events'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'happy-events'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

