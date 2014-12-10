<?php
# disables error output
xdebug_disable();
error_reporting(1);

get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
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
        <?php
          $cm_section = 'twitter';
          include(locate_template('templates/asco-community-nav.php'));
        ?>
        <div class="content row col-sm-12">
          <div class="col-sm-12">
            <?php include roots_template_path(); ?>
          </div><!-- /.main -->
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div>
  </main>

  <?php get_template_part('templates/asco-footer'); ?>

</body>
</html>
