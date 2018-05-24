<?php /*
	
@package airspace
*/
if( post_password_required() ){
	return;
}
?>
	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
		<h2 class="comment-title">
			<?php
				
				printf(
					esc_html( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sunsettheme' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
					
			?>
		</h2>
		
		<?php //sunset_get_comment_navigation(); ?>
		
		<ol class="comment-list">
			
			<?php 
				
				$args = array(
					'walker'			=> null,
					'max_depth' 		=> '',
					'style'				=> 'ol',
					'callback'			=> null,
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 64,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> false,
					'echo'				=> true
				);
				
				wp_list_comments( $args );
			?>
			
		</ol>
		
		<?php // sunset_get_comment_navigation(); ?>
		
		<?php 
			if( !comments_open() && get_comments_number() ):
		?>
			 
			 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'airspace' ); ?></p>
			 
		<?php
			endif;
		?>
		
	<?php	
		endif;
	?>
	
	<?php 
		
		$fields = array(
			
			'author' =>
				'<div class="row"><div class="col-md-6 form-group"> <input id="name" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="" placeholder="Name *" maxlength="100" /></div>',
				
			'email' =>
				'<div class="col-md-6 form-group"><input id="email" name="email" class="form-control" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="" placeholder="Email *" maxlength="100" /></div>',
				
			'url' =>
				'<div class="form-group col-md-12"><input type="text" id="website" name="url" class="form-control"  value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="Website" maxlength="100"/></div>'
				
		);
		
		$args = array(
			'title_reply' => __('LEAVE YOUR COMMENT', 'airspace'),
			'title_reply_before' => '<h3 class="post-sub-heading">',
			'title_reply_after'  => '</h3>',
			'id_form' => 'form',
			
			'class_submit' => 'btn btn-block btn-lg btn-warning',
			'label_submit' => __( 'Submit Comment' ),
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field' =>
				'<div class="form-group col-md-12"><textarea id="text" class="form-control" name="comment" rows="6" placeholder="Comment" maxlength="400"></textarea></p></div>',
			
			
		); 
	?>
	<div class="post-comments-form">
		
	<?php	comment_form( $args ); ?>

    </div>