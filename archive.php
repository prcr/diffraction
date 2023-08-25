<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<!--<div class="navigation">
			<div class="alignleft"><?php next_posts_link('- older') ?></div>
			<div class="alignright"><?php previous_posts_link('newer -') ?></div>
		</div>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">archives for <?php single_cat_title(); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">archives for <?php the_time('Y F'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">archives for <?php the_time('Y'); ?></h2>
 	  <?php } ?>-->

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

	<?php else : ?>

		<h2 class="pagetitle">no posts found.</h2>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>