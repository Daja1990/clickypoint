<?php
  if (!defined('ABSPATH')) exit;

// Loads Stylesheets and JS
function custom_styles() {
    wp_enqueue_script('magnificjs', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), false, true );
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), false, true );
    wp_enqueue_style( 'magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// Make img routes doable
if( !defined('THEME_IMG_PATH')){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
   }

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);

// Custom Image Sizes - true/false is whether its a hard crop or not
add_image_size('blog-extralarge', 1200, 600, true);
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// register Sidebars
function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
        );
        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
            );
}

add_action('widgets_init', 'my_sidebars');

// Cut down excerpt length
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// Number of search results displayed
function change_wp_search_size($query) {
    if ( $query->is_search && !$query->is_admin ) // Make sure it is a search page
        $query->query_vars['posts_per_page'] = 6; // Change 10 to the number of posts you would like to show

    return $query; // Return our modified query variables
}
add_filter('pre_get_posts', 'change_wp_search_size'); // Hook our custom function onto the request filter


function ScanWPostFilter($query) {
    if ($query->is_search && !$query->is_admin) {
        $query->set('post_type', array('post','cars','reviews'));
    }
    return $query;
}
add_filter('pre_get_posts','ScanWPostFilter');

// Custom post types
function game_review_post_type(){
    $args = array(
        'labels' => array(
            'name' => 'Reviews',
            'singular_name' => 'Review',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'query_var' => true,
        'exclude_from_search'   => false,
        'menu_icon' => 'dashicons-welcome-widgets-menus',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        // Remove supports and it will be like a basic page. This is done to restrict what the user can do

    );
    register_post_type('reviews', $args);

}
add_action('init', 'game_review_post_type');

// Creating short codes
function review_shortcode(){
    ob_start();
    get_template_part('includes/latest', 'reviews');
    return ob_get_clean();
}

// ob_start and ob_get_clean makes sure the things getting echoed out is put in the same place as the short code. If this is not done it is echoed in at the top of the page instead

add_shortcode('latest_reviews', 'review_shortcode');

// Creating short codes
function review_shortcode_new($atts, $content = null, $tag = ''){
    ob_start();
    set_query_var('attributes', $atts);
    get_template_part('includes/latest', 'reviews');
    return ob_get_clean();
}

// ob_start and ob_get_clean makes sure the things getting echoed out is put in the same place as the short code. If this is not done it is echoed in at the top of the page instead
// content is used to parse extra info, like if the shortcode is [new_cars] you can do [new_cars] info I want within [/new_cars] and the text comes above the shortcode

add_shortcode('latest_review_new', 'review_shortcode_new');


// More direct search, closer to match
add_action( 'pre_get_posts', 'my_search_is_exact', 10 );

function my_search_is_exact( $query ) {
       if ( !is_admin() && $query->is_main_query() && $query->is_search && !$query->is_admin ) {
            $query->set( 'sentence', 1 );
       }
}

  function custom_post_type_cat_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_category()) {
        $query->set( 'post_type', array( 'post', 'reviews', 'reports' ) );
      }
    }
  }
  
  add_action('pre_get_posts','custom_post_type_cat_filter');


// Register Post Type tags add to archive 
  function custom_post_type_tag_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_tag()) {
        $query->set( 'post_type', array( 'post', 'reviews', 'reports' ) );
      }
    }
  }
  
  add_action('pre_get_posts','custom_post_type_tag_filter');
  


// Custom post types
function report_post_type(){
    $args = array(
        'labels' => array(
            'name' => 'Reports',
            'singular_name' => 'Report',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'query_var' => true,
        'exclude_from_search'   => false,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('post_tag', 'category'),
        // Remove supports and it will be like a basic page. This is done to restrict what the user can do

    );
    register_post_type('reports', $args);

}
add_action('init', 'report_post_type');

// Taxonomy
function upcoming_taxonomy(){
    $args = array(
        'labels' => array(
            'name' => 'Upcoming',
            'singular_name' => 'Upcoming_Reviews',
        ),
        'public' => true,
        'hierarchical' => false,
    );
    register_taxonomy('upcoming_reviews', array('reports'), $args);
}
add_action('init', 'upcoming_taxonomy');

// Creating short codes
function upcoming_shortcode(){
    ob_start();
    get_template_part('includes/latest', 'upcoming');
    return ob_get_clean();
}

// ob_start and ob_get_clean makes sure the things getting echoed out is put in the same place as the short code. If this is not done it is echoed in at the top of the page instead

add_shortcode('latest_upcoming', 'upcoming_shortcode');

// Creating short codes
function upcoming_shortcode_new($atts, $content = null, $tag = ''){
    ob_start();
    set_query_var('attributes', $atts);
    get_template_part('includes/latest', 'upcoming');
    return ob_get_clean();
}

// ob_start and ob_get_clean makes sure the things getting echoed out is put in the same place as the short code. If this is not done it is echoed in at the top of the page instead
// content is used to parse extra info, like if the shortcode is [new_cars] you can do [new_cars] info I want within [/new_cars] and the text comes above the shortcode

add_shortcode('upcoming_new', 'upcoming_shortcode_new');

// Options page - global element

// Check if function exists to make sure ACF is activated
if( function_exists('acf_add_options_page')){

    acf_add_options_page(
        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-tools',
            // Redirection true is only used if you want to redirect from parent to a child category
            'redirection' => 'true'
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Header Settings',
            'menu_title' => 'Header Settings',
            'parent_slug' => 'website-settings'
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Footer Settings',
            'menu_title' => 'Footer Settings',
            'parent_slug' => 'website-settings'
        )
    );
}