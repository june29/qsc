<?php get_header(); ?>
  <div id="content" class="narrowcolumn">

<?php if (have_posts()) : ?>

  <div class="autopagerize_page_element">
    <?php while (have_posts()) : the_post(); ?>

      <div class="post hentry" id="post-<?php the_ID(); ?>">
        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata"><?php the_time('Y/m/d') ?> <?php the_tags('Tags: ', ', ', ''); ?> Posted in <?php the_category(', ') ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <?php edit_post_link('Edit', '', ''); ?></p>

        <div class="entry-content">
          <?php the_content('Read the rest of this entry &raquo;'); ?>
        </div>

      </div>

    <?php endwhile; ?>
  </div>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('< Older Entries') ?></div>
      <div class="alignright"><?php previous_posts_link('Newer Entries >') ?></div>
    </div>

  <?php else : ?>

    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
