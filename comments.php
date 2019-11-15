<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	{
		die ('Please do not load this page directly. Thanks!');
		return;
	}
?>

<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>

	<ol class="commentlist" id="comments">
	<?php wp_list_comments(array('callback' => 'diffraction3_comment')); ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
	<?php else : // comments are closed ?>
		<p class="nocomments">comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( 'leave a comment', 'leave a reply to %s' ); ?></h3>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<p><textarea name="comment" id="comment" cols="100%" rows="7" tabindex="1" onfocus="this.style.backgroundColor='#181818';" onblur="this.style.backgroundColor='#101010';" scroll="no"></textarea></p>

<?php if ( $user_ID ) : ?>

<p id="logged-in">logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="log out of this account">logout</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> onfocus="this.style.backgroundColor='#181818';" onblur="this.style.backgroundColor='#101010';" />
<label for="author"><small>name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?> onfocus="this.style.backgroundColor='#181818';" onblur="this.style.backgroundColor='#101010';" />
<label for="email"><small>email (optional) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="4" onfocus="this.style.backgroundColor='#181818';" onblur="this.style.backgroundColor='#101010';" />
<label for="url"><small>website (optional)</small></label></p>

<?php endif; ?>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="publish" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
