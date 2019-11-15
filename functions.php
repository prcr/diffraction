<?php
function diffraction3_widgets_init() {
	register_sidebar(array(
		'name' => __( 'Archives', 'archives' ),
		'id' => 'widgets-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}
add_action( 'init', 'diffraction3_widgets_init' );

function diffraction3_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php echo $comment->comment_ID; ?>">
		<div class="comment-left">
		  <?php if ($comment->comment_author_url) : ?>
		  	<a href="<?php comment_author_url() ?>" rel="external nofollow"><?php echo get_avatar($comment,$size='30',$default=get_bloginfo('template_directory').'/images/defaultgravatar.png' ); ?></a>
		  <?php else :
				echo get_avatar($comment,$size='30',$default=get_bloginfo('template_directory').'/images/defaultgravatar.png' );
			endif; ?>
		</div>
		<div class="comment-right">
			<h3 class="comment-author">
				<?php echo get_comment_author_link(); ?>
			</h3>

			<div class="comment-meta">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<span title="<?php echo time_since(abs(strtotime($comment->comment_date . ' GMT'))) . ' ago'; ?>">
  					<?php printf(__('%1$s'), get_comment_date()) ?>
          </span>
				</a>
				<?php edit_comment_link('edit',' | ','') ?>
			</div>

			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('your comment is awaiting moderation.') ?></em>
				<br />
			<?php endif; ?>
			<?php comment_text() ?>
		</div>
<?php
        }

add_theme_support('post-thumbnails');
?>
