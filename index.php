<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post<?php if($wp_query->post_count == $wp_query->current_post + 1) {echo ' last-post';} ?>">
				<h2 class="posttitle">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="entry">
					<?php the_content(); ?>
					<div style="clear:both;"></div>
				</div>
				<p class="postmetadata">
					<span title="<?php echo time_since(abs(strtotime($post->post_date_gmt . ' GMT'))) . ' ago'; ?>">
						<?php the_time('Y-m-d') ?>
          			</span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<?php the_category(', ') ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<?php comments_popup_link('no comments', '1 comment', '% comments', '', 'comments are closed'); ?>
					<?php edit_post_link('edit', '&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;', ''); ?>
				</p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('- older') ?></div>
			<div class="alignright"><?php previous_posts_link('newer -') ?></div>
		</div>

	<?php else: ?>

    <h2 class="pagetitle">no posts found.</h2>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>