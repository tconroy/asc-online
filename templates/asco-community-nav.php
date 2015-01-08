<?php
  if (isset($cm_section)) {
    $a = [];
    switch($cm_section) {
      case "community": $a['c']  = 'active'; break;
      case "home":      $a['h']  = 'active'; break;
      case "twitter":   $a['t']  = 'active'; break;
      case "facebook":  $a['f']  = 'active'; break;
      default: $a = null; break;
    }
  }
 ?>
<div class="header row col-sm-12">
  <div class="text-center">
    <h1 id="whatsnew">What's New</h1>
    <h4>Explore the ASC Community!</h4>
      <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn <?= isset($a['h']) ? $a['h'] : ''; ?>" href="<?=get_site_url();?>/community/blog#whatsnew">ASC Blog</a></div>
      <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn <?= isset($a['t']) ? $a['t'] : ''; ?>" href="<?=get_site_url();?>/community/twitter#whatsnew">Twitter</a></div>
      <div class="col-sm-4"><a class="btn btn-holo-dark bigCommBtn <?= isset($a['f']) ? $a['f'] : ''; ?>" href="<?=get_site_url();?>/community/facebook#whatsnew">Facebook</a></div>
  </div>
</div>