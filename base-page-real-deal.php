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
        <div style="margin: 0 auto;" class="content row col-sm-12 series">
            <?=
              do_shortcode('[Youtube_Channel_Gallery feed="playlist" user="PLQNUyWPG-wZfdzFU-QkXIGgntvZWam2yA" videowidth="580" ratio="16x9" theme="light" color="white" autoplay="0" rel="0" showinfo="1" maxitems="100" thumbwidth="277" thumbratio="16x9" quality="default" thumbcolumns="2" title="1" description="1" thumbnail_alignment="top" descriptionwordsnumber="100" link="1"]');
            ?>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </div>
  </main>

  <?php get_template_part('templates/asco-footer'); ?>

</body>
</html>
