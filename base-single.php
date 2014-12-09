<?php get_template_part('templates/head'); ?>
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
        <div class="header row">
          <div class="text-center">
            <h1>What's New</h1>
            <h4>ASC Sneak Peak</h4>
              <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn active" href="/community">ASC Blog</a></div>
              <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn" href="/community/twitter">Twitter</a></div>
              <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn" href="/community/facebook">Facebook</a></div>
          </div>
        </div>
        <div class="content row">
          <div class="col-sm-9">
            <?php include roots_template_path(); ?>
          </div><!-- /.main -->
          <?php if (roots_display_sidebar()) : ?>
            <aside class="sidebar col-md-3" role="complementary">
              <?php include roots_sidebar_path(); ?>
            </aside><!-- /.sidebar -->
          <?php endif; ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div>
  </main>

  <?php get_template_part('templates/asco-footer'); ?>

</body>
</html>
