<?php
    function getHeaderImgUri($pageName) {
        $pageName = strtolower($pageName);
        $uri = get_template_directory_uri() . '/assets/img/layout/cover/';
        switch($pageName) {
            case "lessons":
                $uri .= "adasdasdas.png";
                break;
            case "series":
                $uri .= "ASC_RealDeal_Banner.png";
                break;
            case "real deal":
                $uri .= "ASC_RealDeal_Banner.png";
                break;
            default:
                $uri .= "ASC_Community_Banner.png";
                break;
        }
        return $uri;
    }
 ?>
<div style="position: relative;">
    <div class="community jumbotron">
        <img style="width: 100%; max-height: 800px; position:relative;" src="<?= getHeaderImgUri(get_the_title()); ?>" alt="" ?>
    </div>
</div>
<div class="community jumbotron-caption">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <p>
                College is hard... We are here to help! The ASC Is here to help you
                figure out how to make college just a little bit easier. Follow us as
                we blog, film, tweet, post, and assit you on your academic journey!cxczxczx
                </p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul class="social list-inline">
                    <a target="_blank" href="https://www.facebook.com/RITAcademicSupportCenter"><li class="fb"></li></a>
                    <a target="_blank" href="https://twitter.com/ASCatRIT"><li class="tw"></li></a>
                    <a target="_blank" href="https://www.youtube.com/user/ASCatRIT"><li class="yt"></li></a>
                    <a target="_blank" href="https://instagram.com/ascatrit"><li class="ig"></li></a>
                </ul>
            </div>
        </div>
    </div>
</div>