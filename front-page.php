<?php
 // get_template_part('templates/page', 'header');
 ?>

<!-- did have a class of "container" -->
<div class="">

  <?php get_template_part('templates/asco-jumbotron') ?>

  <div class="home whatsnew hidden-xs">
    <div class="container">

      <div class="title">
        <h2>What's New</h2>
        <small>ASC Sneak Peak</small>
      </div>

      <div class="macbook-wrapper">
        <div class="inner-macbook">
          <!--<iframe src="//www.youtube.com/embed/DAYDZBD3pT8?rel=0"
                  width="560"
                  height="315"
                  frameborder="0"
                  allowfullscreen class="fluid-width-video-wrapper">
          </iframe> -->
          <div class="vid-wrap">
            <div class="js-lazyYT fluid-width-video-wrapper" data-youtube-id="DAYDZBD3pT8" data-parameters="color=white&modestbranding=1&rel=0" data-width="100%" data-height="100%">
          </div>
          </div>

        </div>
      </div>

    </div>
  </div>


  <div class="home classroom container">
        <div class="title col-sm-12">
        <div class="title-cont">
          <h2>ASC Online Classroom</h2>
          <small>Lessons worth Learning</small>
        </div>
        </div>
        <div class="col-sm-6 col-md-4">

          <div class="panel panel-default blue">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/study_skills_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Study Skills</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default green">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/time_management_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Time Management</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default orange">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/tutoring_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Tutoring</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>

         <div class="clearfix visible-md visible-lg lcf"></div>

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default yellow">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/math_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Math</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default red">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/reading_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Reading</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="panel panel-default gray">
            <a href=""><img class="img-responsive" src="<?php
echo get_template_directory_uri(); ?>/assets/img/content/lessons/online_learning_icon.png" alt=""></a>
            <div class="panel-body">
              <h3 class="panel-title"><a href="">Online Learning</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatibus tempore blanditiis.</p>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm"></div>
    </div>

  </div>

</div>