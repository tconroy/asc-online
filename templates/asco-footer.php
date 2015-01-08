<footer class="footer content-info" role="contentinfo">
    <?php if( is_front_page() ) { get_template_part('templates/learnmore-footer'); } ?>
    <div class="stayconnected-footer">
        <h2>Visit <a href="http://www.rit.edu/studentaffairs/asc" target="_blank">ASC</a> and Stay Connected</h2>
        <ul class="list-inline social-circle">
            <li><a class="fb" target="_blank" href="https://www.facebook.com/RITAcademicSupportCenter" title="Facebook"></a></li>
            <li><a class="ig" target="_blank" href="https://instagram.com/ascatrit" title="Instagram"></a></li>
            <li><a class="tw" target="_blank" href="https://twitter.com/ASCatRIT" title="Twitter"></a></li>
            <li><a class="yt" target="_blank" href="https://www.youtube.com/user/ASCatRIT" title="Youtube"></a></li>
        </ul>
        <ul class="list-inline">
            <li><a href="http://www.rit.edu" target="_blank">Copyright <?=Date('Y');?> Rochester Institute of Technology</a></li>
            <li>|</li>
            <li><a href="http://www.rit.edu/studentaffairs/" target="_blank">Student Affairs</a></li>
            <li>|</li>
            <li><a href="http://www.rit.edu/studentaffairs/asc" target="_blank">Academic Support Center</a></li>
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