<?php

function jane_crawford_files()
{
  wp_enqueue_style('jane_crawford_styles', get_theme_file_uri('/css/style.css'));
  wp_register_script( 'js-file', get_template_directory_uri() . '/dist/main.js', array());
  wp_enqueue_script('js-file');
}

add_action('wp_enqueue_scripts', 'jane_crawford_files');