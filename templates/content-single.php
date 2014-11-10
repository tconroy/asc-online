<hr>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class='row'>
      <div class="col-xs-3 col-sm-2">
        <?php
          if (validate_gravatar(get_the_author_meta('ID'))) {
            echo get_avatar(get_the_author_meta('ID'), 90, '', get_the_author_meta('display_name'));
          }
        ?>
      </div>
      <div class="col-xs-9 col-sm-10">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="entry-content">
      <div class="col-sm-offset-2">
         <?php the_content(); ?>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <?php echo do_shortcode('[starbox]') ?>
    </footer>
    <?php
      comments_template('/templates/comments.php');
      // commented out so as not to interfere with the comment lazy load
      //disqus_embed('ritacademicsupportcenteronline');
    ?>
  </article>
<?php endwhile; ?>
