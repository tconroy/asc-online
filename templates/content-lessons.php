<div class="row">
    <div class="col-xs-12">
        <ul class="lessons-subnav" id="subnav">
            <li class="hover <?php echo $_GET['cat'] === 'study-skills' ? 'active' : '' ?>">
                <a href="?cat=study-skills#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/study-skills_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?php echo $_GET['cat'] === 'time-management' ? 'active' : '' ?>">
                <a href="?cat=time-management#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/time-management_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?php echo $_GET['cat'] === 'tutoring' ? 'active' : '' ?>">
                <a href="?cat=tutoring#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/tutoring_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?php echo $_GET['cat'] === 'math' ? 'active' : '' ?>">
                <a href="?cat=math#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/math_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?php echo $_GET['cat'] === 'reading' ? 'active' : '' ?>">
                <a href="?cat=reading#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/reading_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?php echo $_GET['cat'] === 'online-learning' ? 'active' : '' ?>">
                <a href="?cat=online-learning#subnav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content/icons/subnav/online-learning_nav.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="row" style="margin-bottom: 2em">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="container">
                <h1>Coming Soon!</h1>
                <p>
                We're hard at work making the best lessons possible for you. Be sure to check back soon for the latest updates and changes
                as we continue development! In the mean time, be sure to check out our blog over at the <a href="/community">Community Page</a>!
                </p>
                <p>
                <a class="btn btn-primary btn-lg" href="<?=get_site_url();?>/community/blog" role="button">To Community Blog »</a>
                <a class="btn btn-primary btn-lg" href="<?=get_site_url();?>/contact" role="button">Contact Us »</a>
                </p>
            </div>
        </div>
    </div>
</div>