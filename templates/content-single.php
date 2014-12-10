<hr>
<?php while (have_posts()) : the_post(); ?>

    <style>
      article .media img {
        float: left;
        margin-right: 1em;
      }
      article .media-body {
        line-height: 2.0;
      }
    </style>

    <article <?php //post_class(); ?>>

      <section>
        <div class="media">
          <a class="media-left" href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?= get_avatar(get_the_author_meta('ID'), 90, '', get_the_author_meta('display_name')); ?></a>
          <div class="media-body">
            <h3 class="media-heading"><?= the_title(); ?></h3>
            <?= get_template_part('templates/entry-meta'); ?>
            <?= the_content(); ?>
          </div>
        </div>
      </section>

      <section>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php echo do_shortcode('[starbox]') ?>
      </section>

      <section>
        <?php comments_template('/templates/comments.php'); ?>
      </section>
    </article>
  </article>
<?php endwhile; ?>
