<!-- <footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer> -->

<footer class="footer content-info" role="contentinfo">
  <div class="learnmore-footer row">
    <h2>Learn More</h2>
        <div class="col-xs-4">
          <a href="#">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/layout/footer/browser.png" alt="">
            <p>ASC Website</p>
          </a>
        </div>
        <div class="col-xs-4">
          <a href="#">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/layout/footer/schedule.png" alt="">
            <p>ASC Schedules</p>
          </a>
        </div>
        <div class="col-xs-4">
          <a href="#">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/layout/footer/email.png" alt="">
            <p>Contact the ASC</p>
          </a>
        </div>
    </div>
    <div class="stayconnected-footer row">
      <h2>Visit <a href="#">ASC</a> and Stay Connected</h2>
    </div>
    <div class="rit-footer row">

    </div>
  </footer>

  <?php wp_footer(); ?>
