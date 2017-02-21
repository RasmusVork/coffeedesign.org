<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Profiles Page Vertical Profile Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>

<!--_________________________ Start Vertical Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
	<?php
	echo '<div class="cmsmasters_profile_vertical_left_side">';
		if (has_post_thumbnail()) {
			happy_events_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
		}
	echo '</div>';
	
	echo '<div class="profile_inner">';
		
		happy_events_profile_heading(get_the_ID(), 'h5', $cmsmasters_profile_subtitle, 'h5');
		
		happy_events_profile_exc_cont();
		
		happy_events_profile_social_icons($cmsmasters_profile_social);
		
	echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Vertical Profile _________________________ -->

