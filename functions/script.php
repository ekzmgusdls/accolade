<?php 

function theme_scripts()
{
  wp_enqueue_style('swipercss', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('scrollHorizontally', get_template_directory_uri().'/assets/js/fullpage.scrollHorizontally.min.js');
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
  wp_enqueue_script('basicJS', get_template_directory_uri().'/assets/js/basic.js');
}


?>