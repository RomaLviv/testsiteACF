<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    add_action('after_setup_theme', 'add_features');
    add_action('after_setup_theme', 'add_menu');
    add_theme_support('custom-logo');

    function add_scripts_and_styles() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, null, true);
      wp_enqueue_script('jquery');
      wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', false, null, 'footer');
      wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-script'), null, 'footer');

      wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css');
      wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
      wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
      wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
      wp_enqueue_style('main', get_stylesheet_uri(), array('fontello', 'fonts','font-awesome', 'swiper-style'));
  }
  function add_features(){
    add_theme_support('custom-logo', [
      'height'  => 50,
      'width'   => 100,
    ]);
  }

  function add_menu(){
    register_nav_menu('top', 'Головне меню');
    register_nav_menu('bottom', 'Нижнє меню');
  }
?>