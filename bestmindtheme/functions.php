<?php


if (!function_exists('bestmindtheme')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bestmindtheme()
    {
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
    }
endif;
add_action('after_setup_theme', 'bestmindtheme');


function bestmind_scripts()
{
    wp_register_script('jQuery', '//code.jquery.com/jquery-3.5.1.min.js', null, null, true);
    wp_enqueue_script('jQuery');

    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_style('slick-theme-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

    wp_enqueue_style('bestmind-styleheet', get_stylesheet_uri(), array(), rand(111, 9999));

    wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);
    wp_enqueue_script('slick-js');

    wp_enqueue_script('bestmind-script', get_template_directory_uri() . '/scripts/main.js', array(), filemtime(get_template_directory() . '/scripts/main.js'), true);
}
add_action('wp_enqueue_scripts', 'bestmind_scripts');


/* MENUS */
function register_menus()
{
    register_nav_menus(
        array(
            'primary-nav' => __('Primary Nav'),
            'footer-nav' => __('Footer Nav'),
			'social-nav' => __('Social Nav')
        )
    );
}
add_action('init', 'register_menus');


/* THEME FEATURES */
add_theme_support('title-tag');
add_theme_support('post-thumbnails');


/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 10);


/* PAGE TEXTAREA REMOVAL */
function remove_textarea()
{
    remove_post_type_support('page', 'editor');
    remove_post_type_support( 'services', 'editor' ); 
    remove_post_type_support( 'conditions', 'editor' ); 
    remove_post_type_support( 'providers', 'editor' ); 
    remove_post_type_support( 'locations', 'editor' ); 
}
add_action('admin_init', 'remove_textarea');


/* EXCERPT LENGTH */
add_filter( 'excerpt_length', function($length) {
    return 20;
}, PHP_INT_MAX );


/* WIDGETS */
function blog_widgets_init()
{
    register_sidebar(array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'blog_widgets_init');


/* ADMIN FOOTER MODIFICATION */
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.cardinaldigitalmarketing.com" target="_blank">Cardinal Digital Marketing</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');



/* CUSTOM POST TYPES */
function custom_post_types() {
 
    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-clipboard',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'conditions',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Conditions' ),
                'singular_name' => __( 'Condition' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'conditions'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-open-folder',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'providers',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Providers' ),
                'singular_name' => __( 'Provider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'providers'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-businessperson',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );

    register_post_type( 'locations',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Locations' ),
                'singular_name' => __( 'Location' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'locations'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-location',
            'supports' => array( 'title', 'thumbnail', 'excerpt' )

        )
    );
}
add_action( 'init', 'custom_post_types' );



/* PROVIDER STATE TAXONOMY */
add_action( 'init', 'provider_state_taxonomy', 0 );
 
function provider_state_taxonomy() {
 
  $labels = array(
    'name' => _x( 'States', 'taxonomy general name' ),
    'singular_name' => _x( 'State', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search States' ),
    'all_items' => __( 'All States' ),
    'parent_item' => __( 'Parent State' ),
    'parent_item_colon' => __( 'Parent State:' ),
    'edit_item' => __( 'Edit State' ), 
    'update_item' => __( 'Update State' ),
    'add_new_item' => __( 'Add New State' ),
    'new_item_name' => __( 'New State Name' ),
    'menu_name' => __( 'Assign States' ),
  ); 	
 
  register_taxonomy('provider-states',array('providers'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'provider-state' ),
  ));
}



/* LOCATION STATE TAXONOMY */
add_action( 'init', 'location_state_taxonomy', 0 );
 
function location_state_taxonomy() {
 
  $labels = array(
    'name' => _x( 'States', 'taxonomy general name' ),
    'singular_name' => _x( 'State', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search States' ),
    'all_items' => __( 'All States' ),
    'parent_item' => __( 'Parent State' ),
    'parent_item_colon' => __( 'Parent State:' ),
    'edit_item' => __( 'Edit State' ), 
    'update_item' => __( 'Update State' ),
    'add_new_item' => __( 'Add New State' ),
    'new_item_name' => __( 'New State Name' ),
    'menu_name' => __( 'Assign States' ),
  ); 	
 
  register_taxonomy('location-states',array('locations'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location-state' ),
  ));
}




/* THEMES OPTIONS */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Topbar Settings',
		'menu_title'	=> 'Topbar',
		'parent_slug'	=> 'theme-general-settings',
        'redirect'		=> false
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'LP: No Topbar Settings',
		'menu_title'	=> 'LP No Topbar',
		'parent_slug'	=> 'theme-general-settings',
        'redirect'		=> false
	));
	
}

$my_excerpt = wp_strip_all_tags( get_the_excerpt(), true );
