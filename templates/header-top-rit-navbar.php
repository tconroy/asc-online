<div class="hidden-xs rit-banner banner navbar navbar-inverse navbar-static-top" style="margin-bottom: 0;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.rit.edu">
        <img src="<?=get_template_directory_uri();?>/assets/img/layout/logo/ritLogo.png" alt="">
      </a>
    </div>
    <form class="navbar-form navbar-right" role="search" method="get" action="<?=home_url('/');?>">
      <a href="http://www.rit.edu/directories1.html">Directory</a>
      <div class="rit-search">
        <input
          value="<?php if (is_search()) { echo get_search_query(); } ?>"
          type="search"
          placeholder="<?= _e('Search ', 'roots').' '.bloginfo('name') ?>"
          name="s" />
        <button type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </form>
    <nav class="collapse navbar-collapse" role="navigation">
    </nav>
  </div>
</div>
