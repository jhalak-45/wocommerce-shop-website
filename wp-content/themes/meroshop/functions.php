<?php

add_theme_support('menu');

// style used 

if (!function_exists('theme_enquee_scripts')) {
    function theme_enquee_scripts()
    {
        //css
        wp_enqueue_style('css', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('css', get_template_directory_uri() . '/css/responsive.css');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/css/all.css');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/css/regular.min.css');

        wp_enqueue_style('css', get_template_directory_uri() . '/css/boxicons.min.css');
        wp_enqueue_style('css', get_template_directory_uri() . '/css/boxicons.css');

        wp_enqueue_style('javascript', get_template_directory_uri() . '/script.js');
        wp_enqueue_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');

        //functions to link booktstrap,JS and jquery
        wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js');
        wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-min.js');
        wp_enqueue_script('jquery',get_template_directory_uri().'/js/bootstrap.bundle.min.js');

        wp_enqueue_script('javascript',get_template_directory_uri(). '/js/slim.min.js');
        wp_enqueue_script('javascript',get_template_directory_uri(). '/js/popper.min.js');
        wp_enqueue_script('javascript', get_template_directory_uri() .'/js/bootstrap.min.js');
    }
}
add_action('wp_enqueue_scripts', 'theme_enquee_scripts');

//Functions for creating menus 
add_theme_support('menus');
function wp_theme_setup()
{

    register_nav_menus(array(
        'primary' => __('Primary_Menu', 'primary menu'),
        'secondary' => __('Secondary_Menu', 'Sidebar menu'),

    ));
}
add_action('after_setup_theme', 'wp_theme_setup');
//post thumbnail support
add_theme_support('post-thumbnails');

//theme logo 
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 120,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
//excerpt
function custom_excerpt()
{
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 450);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = $excerpt . '... <a href="' . get_the_permalink() . '"></a>';
    return $excerpt;
}
add_filter( 'jetpack_offline_mode', '__return_true' );

function my_widgets()
{

    //Register Sidebar #1
    register_sidebar(
        array(
            'name' => __('sidebar widget', 'textdomain'),
            'id' => 'sidebar-1',
            'description' => __('Add widgets here to appear Advertisement', 'textdomain'),
        )
    );
    register_sidebar(
        array(
            'name' => __('Search product', 'textdomain'),
            'id' => 'search-box',
            'description' => __('Add widgets here to appear Advertisement', 'textdomain'),
        )
    );
   
   
}
add_action('widgets_init', 'my_widgets');


add_filter('woocommerce_form_field_args',  'wc_form_field_args',10,3);
function wc_form_field_args($args, $key, $value) {
  $args['input_class'] = array( 'form-control' );
  return $args;
} 

add_shortcode('product_data','custom_product_function');
function custom_product_function($atts)
{
    $post_id = $atts['id'];
    $title = get_the_title($post_id);
    $link = get_the_permalink($post_id);
    $image = get_the_post_thumbnail($post_id, 'thumbnail');
    $data ='<div class="releated-products wow fadeInUp"><a href="'.$link.'">'.$image.'<h5>'.$title.'</h5><h6></h6></a></div>';
    return $data;
}
add_theme_support( 'post-thumbnails' );



add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_class');
add_filter('wp_pagenavi_class_page', 'theme_pagination_class');

function theme_pagination_class($class_name) {
  switch($class_name) {
    case 'previouspostslink':
      $class_name = 'pagination__control-link pagination__control-link--previous';
      break;
    case 'nextpostslink':
      $class_name = 'pagination__control-link pagination__control-link--next';
      break;
    case 'page':
      $class_name = 'pagination__current';
      break;
  }
  return $class_name;
}
add_filter( 'jetpack_offline_mode', '__return_true' );