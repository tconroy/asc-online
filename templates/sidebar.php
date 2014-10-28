<?php
  //dynamic_side bar('sidebar-primary');
  if ( is_single() ) :
    dynamic_sidebar('sidebar-single');
  else:
    dynamic_sidebar('sidebar-primary');
  endif;
?>
