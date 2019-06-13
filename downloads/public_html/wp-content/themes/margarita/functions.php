<?php
add_action( 'after_setup_theme', 'MBS_setup' );
function MBS_setup()
{
    load_theme_textdomain( 'MBS', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 640;
    register_nav_menus(
        array( 'main-menu' => __( 'Main Menu', 'MBS' ) )
    );
}
add_action( 'wp_enqueue_scripts', 'MBS_load_scripts' );
function MBS_load_scripts()
{
    wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'MBS_enqueue_comment_reply_script' );
function MBS_enqueue_comment_reply_script()
{
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'MBS_title' );
function MBS_title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}
add_filter( 'wp_title', 'MBS_filter_wp_title' );
function MBS_filter_wp_title( $title )
{
    return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'MBS_widgets_init' );
function MBS_widgets_init()
{
    register_sidebar( array (
        'name' => __( 'Sidebar Widget Area', 'MBS' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
function MBS_custom_pings( $comment )
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php 
}
add_filter( 'get_comments_number', 'MBS_comments_number' );
function MBS_comments_number( $count )
{
    if ( !is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}


/******************************************************************************/
/****** Register menus ********************************************************/
/******************************************************************************/

register_nav_menus( array(
  'top-bar-navigation' => __( 'Top Bar Navigation' ),
  'left-nav' => __( 'Left Navigation' ),
  'right-nav' => __( 'Right Navigation' ),
) );

/******************************************************************************/
/****** Upload SVG files ******************************************************/
/******************************************************************************/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function custom_admin_head() {
  $css = '';

  $css = 'td.media-icon img[src$=".svg"] { width: 100% !important; height: auto !important; }';

  echo '<style type="text/css">'.$css.'</style>';
}
add_action('admin_head', 'custom_admin_head');

