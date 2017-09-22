<?php
/*
Template Name: Archives
*/
get_header(); ?>

	<div id="content">

    <!--<div class="navigation">
			<div class="alignleft"></div>
			<div class="alignright"></div>
		</div>

    <h2 class="pagetitle">archives</h2>-->

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post single-post">
      <div class="entry archives-entry">
        <?php the_content(); ?>

        <table border="0">
        <tr>
          <td width="35%">
            <h2>categories</h2>
            <ul class="archives-list">
              <?php wp_list_categories('title_li=&show_count=1'); ?>
            </ul>
          </td>
          <td width="35%">
            <h2>yearly archives</h2>
            <ul class="archives-list">
              <?php wp_get_archives('type=yearly&show_post_count=1'); ?>
            </ul>
          </td>
          <td width="30%">
            <h2>search</h2>
            <ul class="archives-list">
              <li><?php get_search_form(); ?></li>
            </ul>
          </td>
        </tr>
        </table>

        <div style="clear:both;"></div>

        <p class="postmetadata">
					<?php edit_post_link('edit', '', ''); ?>
				</p>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
