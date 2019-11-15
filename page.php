<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post single-post">
		  <h2 class="posttitle">
		    <a href="<?php the_permalink() ?>" rel="bookmark" title="permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		  </h2>

      <div class="entry">
        <?php the_content(); ?>
        <div style="clear:both;"></div>

        <p class="postmetadata">
					<?php edit_post_link('edit', '', ''); ?>
				</p>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>