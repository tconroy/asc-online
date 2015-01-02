<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
  <?php
    do_action('get_header');
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-rit-navbar');
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <main class="main" role="main">
    <div class="home">
      <?php get_template_part('templates/asco', 'page-jumbotron') ?>
      <div class="wrap home container" role="document">
        <div class="content row col-sm-12 series">
          <?php include roots_template_path(); ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div>
  </main>

  <?php get_template_part('templates/asco-footer'); ?>

</body>
</html>
