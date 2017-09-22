<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('- %link', 'older') ?></div>
			<div class="alignright"><?php next_post_link('%link -', 'newer') ?></div>
		</div>

		<div class="post single-post">
			<h2 class="posttitle">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>

			<div class="entry">
				<?php the_content(); ?>
				<div style="clear:both;"></div>

				<p class="postmetadata">
					<span title="<?php echo time_since(abs(strtotime($post->post_date_gmt . ' GMT'))) . ' ago'; ?>">
            <?php the_time('y.F.d') ?>
          </span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<?php the_category(', ') ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<?php comments_popup_link('no comments', '1 comment', '% comments', '', 'comments are closed'); ?>
					<?php edit_post_link('edit', '&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;', ''); ?>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>
	
    <h2 class="pagetitle">no posts found.</h2>

	<?php endif; ?>

<?php get_footer(); ?>