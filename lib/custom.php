<?php
/**
 * Custom functions
 */
// bug testing only. remove for production!
add_action('wp_footer', 'roots_wrap_info');
function roots_wrap_info() {
  $format = '<h6>The %s template being used is: %s</h6>';
  $main   = Roots_Wrapping::$main_template;
  global $template;

  printf($format, 'Main', $main);
  printf($format, 'Base', $template);
}

/*
unneeded -- using plugin to embed
function disqus_embed($disqus_shortname) {
    global $post;
    // wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    wp_enqueue_script('disqus_embed', 'http://a.disquscdn.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}*/

/**
 * easy way to get comment count for post. just call disqus_count('ritacademicsupportcenteronline')
 * @return [type]                   [description]
 */
function disqus_count($disqus_shortname, $elementClass="") {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    $classString = "class='{$elementClass}'";
    echo '<a href="'. get_permalink() .'#disqus_thread"' .$classString.'></a>';
}