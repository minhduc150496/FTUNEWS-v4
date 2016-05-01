<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * @file: category.php
 */

get_header();

?>

  <!-- BODY -->
  <div class="main">

    <!-- archive title -->
    <div class="container">
      <div class="col-xs-12">
        <h1 class="archive-title"><?php the_search_query() ?></h1>
      </div>
    </div>
    <!-- /archive title -->

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
              <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy
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
              <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy
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
              <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy
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
              <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy
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
              <a class="three-dots title" href="#">Samsung bán được hơn 10 triệu chiếc Galaxy S7 và Galaxy
                S7
                edge trong tháng 3?</a>
            </div>
          </div>

          <hr>

          <!-- banner FK -->
          <div class="section row">
            <div class="col-md-12 banner-fk">
              <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/FK%20banner%20FTU2.jpg" alt=""></a>
            </div>
          </div>

          <hr>

          <!-- banner Dr Thanh -->
          <div class="section row">
            <div class="col-md-12">
              <div class="banner-drthanh">
                <embed src="<?php echo get_template_directory_uri()?>/flash/PHN_350x340.swf">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /choice -->

      <!-- main -->
      <div class="col-md-8 col-md-pull-4">
        <?php if (have_posts()): the_post();
          ?>
          <section class="section-1">
            <header>
              <h3 class="title">
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </h3>
            </header>
            <div class="ratio-wrapper">
              <div class="ratio-content img"
                   style="background-image: url(<?php echo get_thumbnail_photo_url(get_the_ID()) ?>)">
              </div>
            </div>
            <p class="detail">
              BY <span class="author"><?php the_author_link() ?></span>
              | <?php the_time('j \t\h\á\n\g n, Y') ?>
            </p>
            <p class="three-dots excerpt">
              <?php the_excerpt() ?>
            </p>
          </section>

          <?php while (have_posts()): the_post();
            ?>

            <hr>
            <section>
              <header>
                <h3 class="title">
                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h3>
              </header>
              <div class="row">
                <div class="col-sm-6">
                  <div class="ratio-wrapper">
                    <div class="ratio-content img"
                         style="background-image: url(<?php echo get_thumbnail_photo_url(get_the_ID()) ?>)">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <p class="detail">
                    BY <span class="author"><?php the_author_link() ?></span>
                    | <?php the_time('j \t\h\á\n\g n, Y') ?>
                  </p>
                  <p class="three-dots excerpt">
                    <?php the_excerpt() ?>
                  </p>
                </div>
              </div>
            </section>

            <?php
          endwhile;
        else: echo "No Results.";
        endif;
        ?>

      </div>
      <!-- /main -->

    </div>
    <!-- /News -->


  </div>
  <!-- /BODY -->


<?php get_footer(); ?>