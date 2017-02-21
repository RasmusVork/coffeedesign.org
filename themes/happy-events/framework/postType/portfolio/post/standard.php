<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Standard Service Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = happy_events_get_global_options();


$cmsmasters_project_featured = get_post_meta(get_the_ID(), 'cmsmasters_project_featured', true);

$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_type = get_post_meta(get_the_ID(), 'cmsmasters_project_type', true);

$cmsmasters_project_icon = get_post_meta(get_the_ID(), 'cmsmasters_project_icon', true);

$cmsmasters_project_duration = get_post_meta(get_the_ID(), 'cmsmasters_project_duration', true);

$cmsmasters_project_participants = get_post_meta(get_the_ID(), 'cmsmasters_project_participants', true);

$cmsmasters_project_price = get_post_meta(get_the_ID(), 'cmsmasters_project_price', true);

$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));


$project_details = '';

if (
	$cmsmasters_option['happy-events' . '_portfolio_project_type'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_icon'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_duration'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_participants'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_price'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_rating'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_like'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_date'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_cat'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_comment'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_author'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_tag'] || 
	$cmsmasters_option['happy-events' . '_portfolio_project_link'] || 
	(
		!empty($cmsmasters_project_features[0][0]) && 
		!empty($cmsmasters_project_features[0][1])
	) || (
		!empty($cmsmasters_project_features[1][0]) && 
		!empty($cmsmasters_project_features[1][1])
	)
) {
	$project_details = 'true';
}


$project_sidebar = '';

if (
	$project_details == 'true' || 
	(
		!empty($cmsmasters_project_features_one[0][0]) && 
		!empty($cmsmasters_project_features_one[0][1])
	) || (
		!empty($cmsmasters_project_features_one[1][0]) && 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[0][0]) && 
		!empty($cmsmasters_project_features_two[0][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) && 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[0][0]) && 
		!empty($cmsmasters_project_features_three[0][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) && 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}


$uniqid = uniqid();

?>

<!--_________________________ Start Standard Service _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_project'); ?>>
	<?php
	if ($cmsmasters_project_title == 'true') {
		echo '<header class="cmsmasters_project_header entry-header">';
			happy_events_project_title_nolink(get_the_ID(), 'h1');
		echo '</header>';
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		echo '<div class="cmsmasters_project_content entry-content">' . "\n";
				
			if ($cmsmasters_project_featured == 'true') {
				if (!post_password_required()) {
					if (sizeof($cmsmasters_project_images) > 1) {
				?>
						<script type="text/javascript">
							jQuery(document).ready(function () {
								jQuery('.cmsmasters_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
									singleItem : 		true, 
									transitionStyle : 	false, 
									rewindNav : 		true, 
									slideSpeed : 		200, 
									paginationSpeed : 	800, 
									rewindSpeed : 		1000, 
									autoPlay : 			false, 
									stopOnHover : 		false, 
									pagination : 		true, 
									navigation : 		false, 
									autoHeight : 		true, 
									navigationText : 	[ 
										'<span></span>', 
										'<span></span>' 
									] 
								} );
							} );
						</script>
						<div id="cmsmasters_owl_carousel_<?php the_ID(); ?>" class="cmsmasters_slider_<?php echo esc_attr($uniqid); ?> cmsmasters_owl_slider">
						<?php 
							foreach ($cmsmasters_project_images as $cmsmasters_project_image) {
								$image_atts = wp_prepare_attachment_for_js($cmsmasters_project_image);
								
								
								echo '<div>' . 
									'<figure>' . 
										wp_get_attachment_image($cmsmasters_project_image, 'cmsmasters-full-masonry-thumb', false, array( 
											'class' => 'full-width', 
											'alt' => ($image_atts['alt'] != '') ? esc_attr($image_atts['alt']) : cmsmasters_title(get_the_ID(), false), 
											'title' => ($image_atts['title'] != '') ? esc_attr($image_atts['title']) : cmsmasters_title(get_the_ID(), false) 
										)) . 
									'</figure>' . 
								'</div>';
							}
						?>
						</div>
					<?php 
					} elseif (sizeof($cmsmasters_project_images) == 1 && $cmsmasters_project_images[0] != '') {
						happy_events_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, $cmsmasters_project_images[0]);
					} elseif (has_post_thumbnail()) {
						happy_events_thumb(get_the_ID(), 'cmsmasters-full-masonry-thumb', false, 'img_' . get_the_ID(), true, true, false, true, false);
					}
				}
			}
			

			if (get_the_content() != '') {

				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'happy-events') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
			}
			
		echo '</div>';
		
		if ($cmsmasters_option['happy-events' . '_portfolio_project_nav_box']) {
			happy_events_prev_next_posts();
		}

	echo '</div>';
	
	
	if ($project_sidebar == 'true') {
		echo '<div class="project_sidebar">';
			
			if ($project_details == 'true') {
				echo '<div class="project_details entry-meta">' . 
					'<h6 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h6>';
					
					happy_events_project_type($cmsmasters_project_type, $cmsmasters_project_icon);
					
					happy_events_project_duration($cmsmasters_project_duration, 'post');
					
					happy_events_project_participants($cmsmasters_project_participants, 'post');
					
					happy_events_project_price($cmsmasters_project_price, 'post');
					
					if (CMSMASTERS_RATING) {
						happy_events_custom_rating(get_the_ID(), 'post');
					}
					
					happy_events_get_project_likes('post');
					
					happy_events_get_project_comments('post');
					
					happy_events_get_project_author('post');
					
					happy_events_get_project_date('post');
					
					happy_events_get_project_category(get_the_ID(), 'pj-categs', 'post');
					
					happy_events_get_project_tags(get_the_ID(), 'pj-tags');
					
					happy_events_get_project_features('details', $cmsmasters_project_features, false, 'h6', true);
					
					happy_events_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
					
					
					
				echo '</div>';
			}
			
			
			happy_events_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h6', true);
			
			happy_events_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h6', true);
			
			happy_events_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h6', true);
			
		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Standard Service _________________________ -->

