<?php
/*
Template Name: About
*/
get_header(); ?>

	<div id="content">

    <!--<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>

    <h2 class="pagetitle">about</h2>-->

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post single-post">
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