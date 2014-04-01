<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p><small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small></p>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
			</div>

		<?php endwhile; ?>

		<?php woc_print_post_nav(); ?>

	<?php else : ?>

		<?php woc_print_not_found(); ?>

	<?php endif; ?>


<?php get_footer(); ?>
