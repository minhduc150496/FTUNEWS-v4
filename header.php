<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * @file header.php
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/css/main.css") ?>

    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "style.css") ?>

    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri()?>/images/Logo%20ftunews%20tron.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="<?php echo get_template_directory_uri()?>/html5-boilerplate/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/html5-boilerplate/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Serif&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>

    <link href="<?php echo get_template_directory_uri()?>/html5-boilerplate/slick/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/css/WP-default.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri()?>/css/ftunews.css" rel="stylesheet"/>

</head>
<body <?php body_class(); ?>>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser
    today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better
    experience this site.</p>
<![endif]-->


<!-- HEADER -->
<div class="header clear">

    <!-- Search Form -->
    <form class="search" role="search" method="get">
        <input class="input" type="text" autocomplete="off" placeholder=" search for article & more" name="s">
        <button class="btn btn-link"><i class="fa fa-search"></i></button>
    </form>
    <!-- /Search Form -->

    <!-- Logo -->
    <div class="logo">
        <a href="<?php get_site_url() ?>">
            <img width="80" height="80" src="<?php echo get_template_directory_uri()?>/images/Logo%20ftunews%20tron.png" alt="">
        </a>
    </div>
    <!-- /Logo -->

    <!-- Big Stories -->
    <div class="clear">
        <div class="title">
            CLB TRUYỀN THÔNG FTUNEWS<br>
            'TIL EVERYTHING IS SHARED
        </div>
        <div class="social">
            <i class="follow">FOLLOW US ON </i>
            <a href="#" class="btn btn-link"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-link"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="menu">
            <ul>
                <li class="menu-item">
                    <a class="item-a" href="#">chuyển động ftu2</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">FTUCHARM <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">FTUSHINE <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <a class="all" href="#">TẤT CẢ</a>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <a href="#" class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title">The Four Horsemen</h5>
                                </a>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">cảm thức</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">Cà phê thư <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Trà đá thư <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Hủ tiếu thư <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">phóng sự</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">Phóng sự 1 <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Phóng sự 2 <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">điểm tin</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">Điểm tin 1 <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Điểm tin 2 <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">hỗ trợ sinh viên</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">Hỗ trợ 1<i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Hỗ trợ 2 <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
                <li class="menu-item">
                    <a href="#">vitamin biz</a>
                    <div class="mega-menu clear">
                        <!-- sub menu -->
                        <div class="sub-menu">
                            <ul>
                                <li>
                                    <a href="#">Vitamin A <i class="fa fa-play"></i></a>
                                </li>
                                <li>
                                    <a href="#">Vitamin B <i class="fa fa-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /sub menu -->
                        <!-- slick mega -->
                        <div class="slick-mega clear">
                            <div class="wrapper">
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                                <div class="item">
                                    <div class="ratio-wrapper">
                                        <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                        </div>
                                    </div>
                                    <h5 class="three-dots title"><a href="#">The Four Horsemen take center stage in new X-Men: Apocalypse featurette</a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- /slick mega -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Big Stories -->

    <!-- Mobi menu -->
    <div class="mobi-menu">
        <div class="btn btn-link btn-harmburger"><i class="fa fa-bars"></i></div>
        <ul class="body">
            <li>
                <a href="#">CHUYỂN ĐỘNG FTU2</a>
                <ul>
                    <li>
                        <a href="#">FTUCHARM</a>
                    </li>
                    <li>
                        <a href="#">FTUSHINE</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">CẢM THỨC</a>
                <ul>
                    <li>
                        <a href="#">CÀ PHÊ THƯ</a>
                    </li>
                    <li>
                        <a href="#">TRÀ ĐÁ THƯ</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /Mobi menu -->
</div>
<!-- /HEADER -->
