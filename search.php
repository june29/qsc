<?php get_header(); ?>

<?php
  $str = $_SERVER["QUERY_STRING"];
  $array = split("=", $str);
  $search_word = urldecode($array[1]);
?>
  <div id="content" class="narrowcolumn">

  <?php if (have_posts()) : ?>

    <div class="pagetitle">「<?php echo $search_word; ?>」の検索結果</div>

    <div class="navigation">
      <div class="alignleft"><?php next_posts_link('さらに過去のエントリを表示') ?></div>
      <div class="alignright"><?php previous_posts_link('より新しいエントリを表示') ?></div>
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
      <div class="alignright"><?php previous_posts_link('より新しいエントリを表示') ?></div>
    </div>

  <?php else : ?>

    <div class="pagetitle">「<?php echo $search_word; ?>」を含むエントリは見つかりませんでした</div>
    <div class="noresult">他の言葉で検索してみてください</div>

  <?php endif; ?>

  </div>

<?php get_footer(); ?>