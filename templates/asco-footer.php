<!-- <footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer> -->

<footer class="footer content-info" role="contentinfo">
  <?php if( is_front_page() ) { get_template_part('templates/learnmore-footer'); } ?>
  <div class="stayconnected-footer">
    <h2>Visit <a href="#">ASC</a> and Stay Connected</h2>

    <ul class="list-inline social-circle">
      <li><a class="fb" href="" title="Facebook"></a></li>
      <li><a class="ig" href="" title="Instagram"></a></li>
      <li><a class="tw" href="" title="Twitter"></a></li>
      <li><a class="yt" href="" title="Youtube"></a></li>
    </ul>

    <ul class="list-inline">
      <li><a href="www.rit.edu">Copyright <?=Date('Y');?> Rochester Institute of Technology</a></li>
      <li>|</li>
      <li><a href="www.rit.edu/studentaffairs/">Student Affairs</a></li>
      <li>|</li>
      <li><a href="www.rit.edu/studentaffairs/asc">Academic Support Center</a></li>
      <li>|</li>
      <li>All Rights Reserved.</li>
    </ul>
  </div>

  <div class="rit-footer">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://www.rit.edu">
          <img src="<?=get_template_directory_uri();?>/assets/img/layout/logo/ritLogo.png">
        </a>
      </div>
      <small class="navbar-right">1 Lomb Memorial Drive, Rochester, NY 14623</small>
    </div>
  </div>
</footer>

  <?php wp_footer(); ?>
