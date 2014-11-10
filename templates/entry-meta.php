<p class="byline author vcard">
  <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>

  <?php /*disqus_count('ritacademicsupportcenteronline', 'pull-right');*/ ?>
  |
  <a href='<?= the_permalink()."#disqus_thread"?>' class='disqus-comment-count'><?php comments_number();?></a>
</p>

