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


// CONTENT FORMATTING
function add_slug_body_class( $classes ) {
global $post;

if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
    return $classes;
  }
  
add_filter( 'body_class', 'add_slug_body_class' );

// Paragraphs
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// Excerpt
function get_excerpt($limit, $source = null) {
  global $post;

  if ( has_excerpt() ? ($excerpt = get_the_excerpt()) : ($excerpt = get_the_content()));

  $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $limit);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  $excerpt = $excerpt.'... <a class="btn" href="'.get_permalink($post->ID).'">View Project</a>';
  return $excerpt;
}


function max_widgets_init() {
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
}

add_action( 'init', 'max_widgets_init' );


// ENQUEUE STYLES
function enqueue_styles() {
  wp_register_style( 'font-awesome-style', THEME_DIR . '/assets/production-assets/css/fa-svg-with-js.css', array(), '1', 'all' );
  wp_enqueue_style( 'font-awesome-style' );
       
  wp_register_style( 'main-style', get_stylesheet_uri() );
  wp_enqueue_style( 'main-style' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
   

// ENQUEUE SCRIPTS
function enqueue_scripts() {
  wp_register_script( 'font-awesome', get_stylesheet_directory_uri() . '/assets/production-assets/js/fontawesome/fontawesome-all.min.js', array( 'jquery' ), '1', false );
  wp_enqueue_script( 'font-awesome' );    
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


// ENQUEUE FOOTER SCRIPTS
function enqueue_footer_scripts() {
  if ( is_front_page() ) {       
    wp_register_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/production-assets/js/scripts.min.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'custom-scripts' );
    
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
