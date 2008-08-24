<?php get_header(); ?>

  <div id="content" class="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="navigation">
      <div class="alignright"><?php next_post_link('(Newer) %link ') ?></div>
      <div class="alignleft"><?php previous_post_link(' %link (Older)') ?></div>
    </div>

    <div class="post hentry" id="post-<?php the_ID(); ?>">
      <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">
          Date: <a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('m') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('d') ?></a>
          Category: <?php the_category(' ') ?>
          <?php the_tags('Tags: ', ' ', ''); ?>
          Comments: <?php comments_popup_link('0', '1', '%'); ?> <?php edit_post_link('Edit', '', ''); ?>
        </p>

      <div class="entry-content">
        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        <!--
        <p class="postmetadata alt">
          <small>
            <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
              // Both Comments and Pings are open ?>
              You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

            <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
              // Only Pings are Open ?>
              Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

            <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
              // Comments are open, Pings are not ?>
              You can skip to the end and leave a response. Pinging is currently not allowed.

            <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
              // Neither Comments, nor Pings are open ?>
              Both comments and pings are currently closed.
            <?php } ?>

          </small>
        </p>
        -->

      </div>
    </div>

  <?php comments_template(); ?>

  <div class="navigation">
    <div class="alignright"><?php next_post_link('(Newer) %link ') ?></div>
    <div class="alignleft"><?php previous_post_link(' %link (Older)') ?></div>
  </div>

  <?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

  <?php endif; ?>

</div>

<?php get_footer(); ?>
