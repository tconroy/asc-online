<?php
/**
 * Custom functions
 */
// bug testing only. remove for production!
add_action('wp_footer', 'roots_wrap_info');
function roots_wrap_info(){
  $format = '<h6>The %s template being used is: %s</h6>';
  $main   = Roots_Wrapping::$main_template;
  global $template;
  printf($format, 'Main', $main);
  printf($format, 'Base', $template);
}

/**
 * easy way to get comment count for post. just call disqus_count('ritacademicsupportcenteronline')
 * @return [type]                   [description]
 */
function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    // $classString = "class='disqus-comment-count'";
    // echo '<a href="'. get_permalink() .'#disqus_thread"' .$classString.'></a>';

    $url = get_permalink().'#disqus_thread';
    $class = 'disqus-comment-count';
    $dataID = get_permalink();
    echo "<a href='{$url}' class='{$class}' data-disqus-url='{$dataID}'></a>";
}


/**
 * Utility function to check if a gravatar exists for a given email or id
 * @param int|string|object $id_or_email A user ID,  email address, or comment object
 * @return bool if the gravatar exists or not
 */
function validate_gravatar($id_or_email) {
  //id or email code borrowed from wp-includes/pluggable.php
  $email = '';
  if ( is_numeric($id_or_email) ) {
    $id = (int) $id_or_email;
    $user = get_userdata($id);
    if ( $user )
      $email = $user->user_email;
  } elseif ( is_object($id_or_email) ) {
    // No avatar for pingbacks or trackbacks
    $allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
    if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types ) )
      return false;

    if ( !empty($id_or_email->user_id) ) {
      $id = (int) $id_or_email->user_id;
      $user = get_userdata($id);
      if ( $user)
        $email = $user->user_email;
    } elseif ( !empty($id_or_email->comment_author_email) ) {
      $email = $id_or_email->comment_author_email;
    }
  } else {
    $email = $id_or_email;
  }

  $hashkey = md5(strtolower(trim($email)));
  $uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

  $data = wp_cache_get($hashkey);
  if (false === $data) {
    $response = wp_remote_head($uri);
    if( is_wp_error($response) ) {
      $data = 'not200';
    } else {
      $data = $response['response']['code'];
    }
      wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);

  }
  if ($data == '200'){
    return true;
  } else {
    return false;
  }
}