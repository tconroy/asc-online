<!-- <footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer> -->

<footer class="footer content-info" role="contentinfo">
  <div class="learnmore-footer">
    <h2>Learn More</h2>
      <a class="browser"  href="#"><span>ASC Website</span></a>
      <a class="schedule" href="#"><span>ASC Schedules</span></a>
      <a class="mail"     href="#"><span>Contact the ASC</span></a>
  </div>
  <div class="stayconnected-footer">
    <h2>Visit <a href="#">ASC</a> and Stay Connected</h2>
  </div>
  <div class="rit-footer">
      <small><a href="http://www.rit.edu"><img src="<?=get_template_directory_uri();?>/assets/img/layout/logo/ritLogo.png" alt=""></a></small>
      <small>1 Lomb Memorial Drive, Rochester, NY 14623</small>
  </div>
</footer>

  <?php wp_footer(); ?>
