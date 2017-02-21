<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Services Grid Video Service Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_project_metadata = explode(',', $cmsmasters_pj_metadata);

$title = (in_array('title', $cmsmasters_project_metadata)) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_project_metadata) && happy_events_project_check_exc_cont()) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && (in_array('categories', $cmsmasters_project_metadata))) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_project_metadata))) ? true : false;
$likes = (in_array('likes', $cmsmasters_project_metadata)) ? true : false;
$rollover = in_array('rollover', $cmsmasters_project_metadata) ? true : false;
$icon = in_array('icon', $cmsmasters_project_metadata) ? true : false;
$duration = in_array('duration', $cmsmasters_project_metadata) ? true : false;
$participants = in_array('participants', $cmsmasters_project_metadata) ? true : false;
$price = in_array('price', $cmsmasters_project_metadata) ? true : false;
$rating = in_array('rating', $cmsmasters_project_metadata) ? true : false;


$cmsmasters_project_icon = get_post_meta(get_the_ID(), 'cmsmasters_project_icon', true);
$cmsmasters_project_duration = get_post_meta(get_the_ID(), 'cmsmasters_project_duration', true);
$cmsmasters_project_participants = get_post_meta(get_the_ID(), 'cmsmasters_project_participants', true);
$cmsmasters_project_price = get_post_meta(get_the_ID(), 'cmsmasters_project_price', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$project_thumb_size = (($cmsmasters_pj_layout_mode == 'masonry') ? 'cmsmasters-service-masonry-thumb' : 'cmsmasters-service-thumb');

$project_thumb_high = (($cmsmasters_pj_layout_mode == 'masonry') ? true : false);


$project_sort_categs = get_the_terms(0, 'pj-categs');

$project_categs = '';

if ($project_sort_categs != '') {
	foreach ($project_sort_categs as $project_sort_categ) {
		$project_categs .= ' ' . $project_sort_categ->slug;
	}
	
	$project_categs = ltrim($project_categs, ' ');
}

?>

<!--_________________________ Start Video Service _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_project_grid'); echo (($project_categs != '') ? ' data-category="' . esc_attr($project_categs) . '"' : '') ?>>
	<div class="project_outer">
		<div class="project_outer_image_wrap">
	
	<?php 
			if ($icon || $price || $categories || $title || $likes || $comments) {
				echo '<div class="project_outer_image_wrap_meta entry-meta">';
					
					$price ? happy_events_project_price($cmsmasters_project_price, 'page') : '';

					if ($icon || $categories || $title || $likes || $comments) {
					
						echo '<div class="project_outer_image_wrap_meta_bottom entry-meta">';
							
							$icon ? happy_events_project_icon($cmsmasters_project_icon) : '';
							
							$title ? happy_events_project_heading(get_the_ID(), 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target) : '';
							
							$comments ? happy_events_get_project_comments('page') : '';	
							
							$likes ? happy_events_get_project_likes('page') : '';
						
						echo '</div>';

					}
					
				echo '</div>';
			}

		happy_events_thumb_rollover(get_the_ID(), $project_thumb_size, false, $rollover, false, false, false, false, false, $project_thumb_high, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
		
		echo '</div>';
		
		if ($excerpt || $duration || $participants || $rating) {
			echo '<div class="project_inner">';
				
				$excerpt ? happy_events_project_exc_cont() : '';

				echo '<footer class="cmsmasters_project_footer entry-meta">';

					$duration ? happy_events_project_duration($cmsmasters_project_duration, 'page') : '';

					$participants ? happy_events_project_participants($cmsmasters_project_participants, 'page') : '';
					
					if (CMSMASTERS_RATING && $rating ) {
						happy_events_custom_rating(get_the_ID(), 'page');
					}
					
				echo '</footer>';
				
				
			echo '</div>';
		}
		
		
		if (!$title) {
			echo '<div class="dn">';
				happy_events_project_heading(get_the_ID(), 'h6');
			echo '</div>';
		}
		
		echo '<span class="dn meta-date">' . get_the_time('YmdHis') . '</span>';
	?>
	</div>
</article>
<!--_________________________ Finish Video Service _________________________ -->

