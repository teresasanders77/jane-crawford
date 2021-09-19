<?php

function jane_crawford_files()
{
  wp_enqueue_style('jane_crawford_styles', get_theme_file_uri('/css/style.css'));
  wp_enqueue_script('main-scripts', get_template_directory_uri().'/build/index.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'jane_crawford_files');