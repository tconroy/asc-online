<div class="row">
    <div class="col-xs-12">
        <ul class="lessons-subnav" id="subnav">
            <li class="hover <?= $_GET['cat']==='study-skills' ? 'active' : '' ?>">
                <a href="?cat=study-skills#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/study-skills_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?= $_GET['cat']==='time-management' ? 'active' : '' ?>">
                <a href="?cat=time-management#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/time-management_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?= $_GET['cat']==='tutoring' ? 'active' : '' ?>">
                <a href="?cat=tutoring#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/tutoring_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?= $_GET['cat']==='math' ? 'active' : '' ?>">
                <a href="?cat=math#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/math_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?= $_GET['cat']==='reading' ? 'active' : '' ?>">
                <a href="?cat=reading#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/reading_nav.png" alt="">
                </a>
            </li>
            <li class="hover <?= $_GET['cat']==='online-learning' ? 'active' : '' ?>">
                <a href="?cat=online-learning#subnav">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/content/icons/subnav/online-learning_nav.png" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="row" style="outline: 1px solid red;">
    <div class="col-md-12">
        <p>hello world</p>
        <?php echo do_shortcode('[yendifgallery playlist="1"]'); ?>
    </div>
</div>