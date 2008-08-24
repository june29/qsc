<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
      <h2 class="pagetitle">カテゴリ「<?php single_cat_title(); ?>」のエントリ</h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h2 class="pagetitle">タグ「<?php single_tag_title(); ?>」を含むエントリ</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h2 class="pagetitle"><?php the_time('Y'); ?>年<?php the_time('m'); ?>月<?php the_time('d'); ?>日のエントリ</h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h2 class="pagetitle"><?php the_time('Y'); ?>年<?php the_time('m'); ?>月のエントリ</h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h2 class="pagetitle"><?php the_time('Y'); ?>年のエントリ</h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h2 class="pagetitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 class="pagetitle">Blog Archives</h2>
    <?php } ?>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('さらに過去のエントリを表示') ?></div>
      <div class="alignright"><?php previous_posts_link('もっと新しいエントリを表示') ?></div>
    </div>

    <?php while (have_posts()) : the_post(); ?>

    <div class="post hentry" id="post-<?php the_ID(); ?>">
      <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <p class="postmetadata">
        Date: <a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('m') ?></a>/<a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('d') ?></a>
        Category: <?php the_category(' ') ?>
        <?php the_tags('Tags: ', ' ', ''); ?>
        Comments: <?php comments_popup_link('0', '1', '%'); ?> <?php edit_post_link('Edit', '', ''); ?>
      </p>

      <div class="entry-content">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>
    </div>
    <?php endwhile; ?>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('さらに過去のエントリを表示') ?></div>
      <div class="alignright"><?php previous_posts_link('もっと新しいエントリを表示') ?></div>
    </div>

    <?php else : ?>

    <h2 class="center">Not Found</h2>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
