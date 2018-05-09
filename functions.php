<?php

define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// REGISTER MENUS
function register_menus() {
    register_nav_menus( array(
      'header_menu' => 'Header Menu',
        'shop_header_menu' => 'Shop Header Menu',
      'social_media_menu' => 'Social Media Menu'
    ));
}
add_action( 'after_setup_theme', 'register_menus' );

// BODY CLASS
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
    return $classes;
  }
  
add_filter( 'body_class', 'add_slug_body_class' );

function wecanwordpress_widgets_init() {
    register_sidebar(array(
      'name' => __( 'Sidebar 1', 'sidebar-1' ),
      'id' => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => "</aside>",
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __( 'Footer Sidebar', 'footer' ),
        'id' => 'sidebar-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __( 'WooCommerce Sidebar', 'woocommerce' ),
        'id' => 'sidebar-woocommerce',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

add_action( 'init', 'wecanwordpress_widgets_init' );


add_filter('avf_which_archive_output','avf_change_which_archive', 10, 3);
function avf_change_which_archive($output) {
  if(is_category())
  {
    $output = single_cat_title('',false);
  }

  return $output;
}

// FONT MENU
add_filter( 'storm_social_icons_networks', 'storm_social_icons_networks');
function storm_social_icons_networks( $networks ) {
 
    $extra_icons = array (
        '/feed' => array(                  
            'name' => 'RSS',
            'class' => 'rss',
            'icon' => 'fa-rss',
            'icon-sign' => 'fa-rss-sign'
        ),
        '/apple' => array(                  
            'name' => 'Apple',
            'class' => 'fa fa-apple',
            'icon' => 'fa-apple',
            'icon-sign' => 'fa-apple'
        ),
        '/bandcamp' => array(                  
            'name' => 'Bandcamp',
            'class' => 'bandcamp',
            'icon' => 'fa-bandcamp',
            'icon-sign' => 'fa-bandcamp'
        ),
        '/facebook' => array(                  
            'name' => 'Facebook',
            'class' => 'facebook',
            'icon' => 'fa-facebook',
            'icon-sign' => 'fa-facebook'
        ),
        '/instagram' => array(                  
            'name' => 'Instagram',
            'class' => 'instagram',
            'icon' => 'fa-instagram',
            'icon-sign' => 'fa-instagram'
        ),
        '/soundcloud' => array(                  
            'name' => 'Soundcloud',
            'class' => 'soundcloud',
            'icon' => 'fa-soundcloud',
            'icon-sign' => 'fa-soundcloud'
        ),
        '/spotify' => array(                  
            'name' => 'Spotify',
            'class' => 'spotify',
            'icon' => 'fa-spotify',
            'icon-sign' => 'fa-spotify'
        ),
        '/feed' => array(                  
            'name' => 'RSS',
            'class' => 'rss',
            'icon' => 'fa-rss',
            'icon-sign' => 'fa-rss-sign'
        ),
        '/feed' => array(                  
            'name' => 'RSS',
            'class' => 'rss',
            'icon' => 'fa-rss',
            'icon-sign' => 'fa-rss-sign'
        ),
        '/twitter' => array(                  
            'name' => 'Twitter',
            'class' => 'twitter',
            'icon' => 'fa-twitter',
            'icon-sign' => 'fa-twitter'
        ),
    );
 
    $extra_icons = array_merge( $networks, $extra_icons );
    return $extra_icons;
 
}

// ENQUEUE STYLES
function enqueue_styles() {
  wp_register_style( 'font-awesome-style', THEME_DIR . '/css/font-awesome.min.css', array(), '1', 'all' );
  wp_enqueue_style( 'font-awesome-style' );
       
  wp_register_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_style( 'main-style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
   

// ENQUEUE SCRIPTS
// function enqueue_scripts() {
//   wp_register_script( 'jb-analytics', get_stylesheet_directory_uri() . '/production-assets/js/analytics.min.js', array( 'jquery' ), '1', false );
//   wp_enqueue_script( 'jb-analytics' );    
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// ENQUEUE FOOTER SCRIPTS
function enqueue_footer_scripts() {
  if ( is_front_page() ) {       
    wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/production-assets/js/min/scripts.min.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'custom-script' );
    
    $upload_dir = wp_upload_dir();
    $media_url = trailingslashit($upload_dir['baseurl']); // Uploads url
    $loc_array = array(
      'stylesheetUri' =>  get_stylesheet_directory_uri(),
      'mediaLibraryUri' => $media_url
    );
    wp_localize_script('custom-script','theme_paths', $loc_array);
  }
}
add_action( 'wp_enqueue_scripts', 'enqueue_footer_scripts' );

?>
