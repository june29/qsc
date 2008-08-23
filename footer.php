<div id="footer">
  <p><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> is proudly powered by <a href="http://wordpress.org/">WordPress</a></p>
  <p><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.</p>
  <p><?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.</p>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
