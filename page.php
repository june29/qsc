<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <p class="postmetadata">
        Date: <a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('m') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('d') ?></a>
        Category: <?php the_category(' ') ?>
        <?php edit_post_link('Edit', '', ''); ?>
      </p>

      <div class="entry-content">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>