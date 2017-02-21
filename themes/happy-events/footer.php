<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Website Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = happy_events_get_global_options();
?>


		</div>
	</div>
</div>
<!-- _________________________ Finish Middle _________________________ -->
<?php 

get_sidebar('bottom');

?>
<a href="javascript:void(0);" id="slide_top" class="cmsmasters_theme_icon_slide_top"></a>
</div>
<!-- _________________________ Finish Main _________________________ -->

<!-- _________________________ Start Footer _________________________ -->
<footer id="footer" class="<?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['happy-events' . '_footer_scheme'] . ($cmsmasters_option['happy-events' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
	<?php 	
		happy_events_footer_logo($cmsmasters_option);
		

		happy_events_get_footer_custom_html($cmsmasters_option);
	

		happy_events_get_footer_social_icons($cmsmasters_option);
	
		
		happy_events_get_footer_nav($cmsmasters_option);
	?>
		<span class="footer_copyright copyright"><?php echo esc_html(stripslashes($cmsmasters_option['happy-events' . '_footer_copyright'])); ?></span>
	</div>
</footer>
<!-- _________________________ Finish Footer _________________________ -->

</div>
<!-- _________________________ Finish Page _________________________ -->

<?php wp_footer(); ?>
</body>
</html>
