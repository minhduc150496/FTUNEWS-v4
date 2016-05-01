<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 * @file functions.php
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
    <li>
    <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <header class="comment-author vcard">
            <?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
            <time><a
                    href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a>
            </time>
            <?php edit_comment_link(__('(Edit)'), '  ', '') ?>
        </header>
        <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation.') ?></em>
            <br/>
        <?php endif; ?>

        <?php comment_text() ?>

        <nav>
            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </nav>
    </article>
    <!-- </li> is added by wordpress automatically -->
    <?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url') . "/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes = "")
{
    echo '<link rel="stylesheet" href="' . versioned_resource($relative_url) . '" ' . $add_attributes . '>' . "\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes = "")
{
    echo '<script src="' . versioned_resource($relative_url) . '" ' . $add_attributes . '></script>' . "\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url)
{
    $file = $_SERVER["DOCUMENT_ROOT"] . $relative_url;
    $file_version = "";

    if (file_exists($file)) {
        $file_version = "?v=" . filemtime($file);
    }

    return $relative_url . $file_version;
}

// Enable post thumbnail - featured image
add_theme_support('post-thumbnails');

// Set posts per page
add_action('pre_get_posts', 'set_posts_per_page');
function set_posts_per_page($query)
{

    global $wp_the_query;

    if ((!is_admin()) && ($query === $wp_the_query) && ($query->is_home())) {
        $query->set('posts_per_page', 25);
    }
    // Etc..

    return $query;
}

/**
 * Get posts in same category
 * @param $postsNumber
 * @return array
 */
function get_posts_in_same_category($postsNumber) {
    global $post;
    $cat_ID = array();
    $categories = get_the_category(); //get all categories for this post
    foreach ($categories as $category) {
        array_push($cat_ID, $category->cat_ID);
    }
    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'numberposts' => $postsNumber,
        'post__not_in' => array($post->ID),
        'category__in' => $cat_ID
    ); // post__not_in will exclude the post we are displaying
    $cat_posts = get_posts($args);
    return $cat_posts;
}

/**
 * Get posts in same author
 * @param $postsNumber
 * @return array
 */
function get_posts_in_same_author($postsNumber) {
    global $post;
    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'numberposts' => $postsNumber,
        'post__not_in' => array($post->ID),
        'author' => $post->post_author
    ); // post__not_in will exclude the post we are displaying
    $au_posts = get_posts($args);
    return $au_posts;
}

/**
 * Load more pattern
 */
function the_load_more_pattern()
{
    if (have_posts()):
        ?>
        <div style="display:none">
            <div class="load-more-item">
                <?php
                the_vertical_thumbnail_rows(false, 3);
                ?>
            </div>
        </div>
        <?php
        rewind_posts();
    endif;
}



/**
 * Get the first image in a post
 * @return string
 */
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
    /*
        if(empty($first_img)) {
            $first_img = "/path/to/default.png";
        }
    /**/
    return $first_img;
}

/**
 * Get the thumb url from post id
 * @param $ID
 * @return bool|false|string
 */
function get_thumbnail_photo_url($ID) {
    $thumb_url = false; // thumb url
    if (has_post_thumbnail($ID)) $thumb_url = get_the_post_thumbnail_url($ID, 'large');
    else {
        $tmp = catch_that_image();
        if (empty($tmp)) return false;
        else $thumb_url = $tmp;
    }
    return $thumb_url;
}

/**
 * remove all img tags
 * @param string $s : input html
 * @return string
 */
function removeImageTags($s = "")
{
    $res = "";
    $add = true;
    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        // detect <img
        if ($i < $len - 4) {
            $t = $s[$i] . $s[$i + 1] . $s[$i + 2] . $s[$i + 3];
            if ($t == "<img") $add = false;
        }
        // append
        if ($add == true) $res .= $s[$i];
        //detect >
        if ($s[$i] == ">") $add = true;
    }/**/
    return $res;
}