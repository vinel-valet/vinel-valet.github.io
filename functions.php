<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('main', get_template_directory_uri(), array('style', 'swiper-style'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', null, false);
    wp_enqueue_script('index', get_template_directory_uri() . '/assets/js/index.js', array('swiper'), null);
});


?>
