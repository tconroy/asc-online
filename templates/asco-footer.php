<!-- <footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer> -->

<footer class="footer content-info" role="contentinfo">
  <div class="learnmore-footer container-fluid">
    <h2>Learn More</h2>
      <ul class="list-inline col-xs-12">
        <li class="col-xs-12 col-sm-4"><a class="browser"  href="#">ASC Website</a></li>
        <li class="col-xs-12 col-sm-4"><a class="schedule" href="#">ASC Schedules</a></li>
        <li class="col-xs-12 col-sm-4"><a class="mail"     href="#">Contact the ASC</a></li>
      </ul>
  </div>
  <div class="stayconnected-footer">
    <h2>Visit <a href="#">ASC</a> and Stay Connected</h2>

    <ul class="list-inline social-circle">
      <li><a class="fb" href="" title="Facebook"></a></li>
      <li><a class="ig" href="" title="Instagram"></a></li>
      <li><a class="tw" href="" title="Twitter"></a></li>
      <li><a class="yt" href="" title="Youtube"></a></li>
    </ul>

    <ul class="list-inline">
      <li><a href="www.rit.edu">Copyright 2013 Rochester Institute of Technology</a></li>
      <li><a href="www.rit.edu/studentaffairs/">Student Affairs</a></li>
      <li><a href="www.rit.edu/studentaffairs/asc">Academic Support Center</a></li>
      <li>All Rights Reserved.</li>
    </ul>
  </div>
  <div class="rit-footer">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <a href="http://www.rit.edu">
          <img src="<?=get_template_directory_uri();?>/assets/img/layout/logo/ritLogo.png">
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 text-right">
        <small>1 Lomb Memorial Drive, Rochester, NY 14623</small>
      </div>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>
