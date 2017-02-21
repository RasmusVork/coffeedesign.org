<?php
/**
 * @package 	WordPress
 * @subpackage 	Happy Events
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Please do not load this page directly. Thanks!', 'happy-events'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'happy-events') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h4 class="post_comments_title">';
		
			comments_number(esc_attr__('No Comments', 'happy-events'), esc_attr__('Comment', 'happy-events'), esc_attr__('Comments', 'happy-events'));		
		
		echo '</h4>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi">' . "\n\t" . 
				'<span class="cmsmasters_previous_comments fl">' . "\n\t\t";
			
			
			previous_comments_link(esc_attr__('Older Comments', 'happy-events'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="cmsmasters_next_comments fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'happy-events'));
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'happy_events_mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi">' . "\n\t" . 
				'<span class="cmsmasters_previous_comments fl">' . "\n\t\t";
			
			
			previous_comments_link(esc_attr__('Older Comments', 'happy-events'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="cmsmasters_next_comments fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'happy-events'));
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<label for="author">' . esc_html__('Name:', 'happy-events') . '</label>' . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_html__('Your name', 'happy-events') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<label for="author">' . esc_html__('Email:', 'happy-events') . '</label>' . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_html__('Your email', 'happy-events') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n" 
	);
	
	
	echo "\n\n";
	
	
	add_filter('comment_form_fields', 'happy_events_order_comment_fields' );
	
	function happy_events_order_comment_fields( $fields ){
		$new_fields = array();

		$neworder = array('author','email','comment');

		foreach( $neworder as $key ){
			$new_fields[ $key ] = $fields[ $key ];
			unset( $fields[ $key ] );
		}

		if( $fields )
			foreach( $fields as $key => $val )
				$new_fields[ $key ] = $val;

		return $new_fields;
	}
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' . 
									'<label for="comment">' . esc_html__('Comment:', 'happy-events') . '</label>' . 
									'<textarea name="comment" id="comment" cols="67" rows="2" placeholder="' . esc_html__('Comment', 'happy-events') . '"></textarea>' . 
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'happy-events') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'happy-events') . 
									'</a> ' 
									. esc_html__('to post a comment', 'happy-events') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'happy-events') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'happy-events') . '">' . 
										esc_html__('Log out?', 'happy-events') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'<p class="comment-notes">' . 
										esc_html__('Your email address will not be published.', 'happy-events') . 
									'</p>' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply', 'happy-events'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'happy-events'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'happy-events'), 
		'label_submit' => 			esc_attr__('Add Comment', 'happy-events') 
	));
}

