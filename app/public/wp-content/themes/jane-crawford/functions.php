<?php

function jane_crawford_files()
{
  wp_enqueue_style('jane_crawford_styles', get_theme_file_uri('/css/style.css'));
//   wp_enqueue_script(
//     'violin_fix_scripts',
//     get_stylesheet_directory_uri() . '/build/index.js',
//     ['wp-element'],
//     time(), // Change this to null for production
//     true
//   );
}

add_action('wp_enqueue_scripts', 'jane_crawford_files');