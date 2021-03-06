<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * @file index.php
 */

get_header();

if (have_posts()):
    while (true):
        ?>

        <!-- BODY -->
        <div class="main">

            <!-- Grid -->
            <div class="container-fluid grid">
                <div class="row">
                    <?php if (!have_posts()) break;
                    the_post() ?>
                    <!-- Cell 1 -->
                    <div class="col-lg-6 col-sm-8 cell-1">
                        <?php the_grid_cell_inner() ?>
                    </div>
                    <!-- /Cell 1 -->
                    <?php if (!have_posts()) break;
                    the_post() ?>
                    <!-- Cell 2 -->
                    <div class="col-lg-3 col-sm-4 cell-2">
                        <?php the_grid_cell_inner() ?>
                    </div>
                    <!-- /Cell 2 -->
                    <?php if (!have_posts()) break;
                    the_post() ?>
                    <!-- Cell 3 -->
                    <div class="col-lg-3 col-sm-4 cell-3">
                        <?php the_grid_cell_inner() ?>
                    </div>
                    <!-- /Cell 3 -->
                    <div class="scroll-box" style="padding:0;">
                        <?php if (!have_posts()) break;
                        the_post() ?>
                        <!-- Cell 4 -->
                        <div class="item col-lg-3 col-sm-4 cell-4">
                            <?php the_grid_cell_inner() ?>
                        </div>
                        <!-- /Cell 4 -->
                        <?php if (!have_posts()) break;
                        the_post() ?>
                        <!-- Cell 5 -->
                        <div class="item col-lg-3 col-sm-4 cell-5">
                            <?php the_grid_cell_inner() ?>
                        </div>
                        <!-- /Cell 5 -->
                        <?php if (!have_posts()) break;
                        the_post() ?>
                        <!-- Cell 6 -->
                        <div class="item col-lg-3 col-sm-4 cell-6">
                            <?php the_grid_cell_inner() ?>
                        </div>
                        <!-- /Cell 6 -->
                        <?php if (!have_posts()) break;
                        the_post() ?>
                        <!-- Cell 7 -->
                        <div class="item col-lg-3 col-sm-4 cell-7">
                            <?php the_grid_cell_inner() ?>
                        </div>
                        <!-- /Cell 7 -->
                    </div>
                </div>
            </div>
            <!-- /Grid -->

            <!-- News -->
            <div class="container news">

                <!-- choice -->
                <div class="col-md-4 col-md-push-8 choice">
                    <div class="inner">
                        <h5 class="head">EDITORS' CHOICE</h5>

                        <div class="section row">
                            <div class="col-xs-5 image">
                                <div class="ratio-wrapper">
                                    <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7 text">
                                <a class="cate" href="#">phóng sự</a>
                                <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và
                                    Galaxy
                                    S7
                                    edge trong tháng 3? Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy S7
                                    edge trong tháng 3?</a>
                            </div>
                        </div>

                        <hr>

                        <div class="section row">
                            <div class="col-xs-5 image">
                                <div class="ratio-wrapper">
                                    <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7 text">
                                <a class="cate" href="#">phóng sự</a>
                                <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và
                                    Galaxy
                                    S7
                                    edge trong tháng 3?</a>
                            </div>
                        </div>

                        <hr>

                        <div class="section row">
                            <div class="col-xs-5 image">
                                <div class="ratio-wrapper">
                                    <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7 text">
                                <a class="cate" href="#">phóng sự</a>
                                <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và
                                    Galaxy
                                    S7
                                    edge trong tháng 3?</a>
                            </div>
                        </div>

                        <hr>

                        <div class="section row">
                            <div class="col-xs-5 image">
                                <div class="ratio-wrapper">
                                    <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7 text">
                                <a class="cate" href="#">phóng sự</a>
                                <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và
                                    Galaxy
                                    S7
                                    edge trong tháng 3?</a>
                            </div>
                        </div>

                        <hr>

                        <div class="section row">
                            <div class="col-xs-5 image">
                                <div class="ratio-wrapper">
                                    <div class="ratio-content img" style="background-image: url(images/sample.jpg)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-7 text">
                                <a class="cate" href="#">phóng sự</a>
                                <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và
                                    Galaxy
                                    S7
                                    edge trong tháng 3?</a>
                            </div>
                        </div>

                        <hr>

                        <!-- banner FK -->
                        <div class="section row">
                            <div class="col-md-12 banner-fk">
                                <a href="http://freshkon.com/"><img
                                        src="<?php echo get_template_directory_uri() ?>/images/FK%20banner%20FTU2.jpg"
                                        alt=""></a>
                            </div>
                        </div>

                        <hr>

                        <!-- banner Dr Thanh -->
                        <div class="section row">
                            <div class="col-md-12">
                                <div class="banner-drthanh"
                                     onmouseup="document.location='http://tradrthanh.com/pho-hang-nong/'">
                                    <embed src="<?php echo get_template_directory_uri() ?>/flash/PHN_350x340.swf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /choice -->

                <!-- main -->
                <div class="col-md-8 col-md-pull-4 main-news">

                    <?php if (!have_posts()) break;
                    the_post();
                    the_news_section_1();

                    for ($i = 0; $i < 5; $i++):
                        if (!have_posts()) break;
                        the_post();
                        ?>
                        <hr>
                        <?php
                        the_news_section();
                    endfor; ?>

                </div>

            </div>
            <!-- /News -->


        </div>
        <!-- /BODY -->

        <?php
        break;
    endwhile;
else: echo "No Posts.";
endif;
get_footer(); ?>
