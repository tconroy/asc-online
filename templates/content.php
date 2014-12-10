<!-- <article <?php post_class(); ?>>
  <header>
    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article> -->

<article>
  <div class="media">
    <a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="media-left" title="<?= the_title(); ?>">
      <?= get_avatar(get_the_author_meta('ID'), 60, '', get_the_author_meta('display_name')); ?>
    </a>
    <div class="media-body">

      <h4 class="media-heading">
        <a href="<?=the_permalink()?>" title="<?=the_title();?>"><?=the_title();?></a>
      </h4>

      <?= get_template_part('templates/entry-meta'); ?>
      <?= the_excerpt(); ?>
    </div>
  </div>
</article>
