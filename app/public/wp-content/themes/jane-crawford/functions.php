<?php

function jane_crawford_files()
{
  wp_enqueue_style('jane_crawford_styles', get_theme_file_uri('/css/style.css'));
  wp_enqueue_script(
    'jane_crawford_scripts',
    get_stylesheet_directory_uri() . '/build/index.js',
    ['wp-element'],
    time(), // Change this to null for production
    true
  );
}

add_action('wp_enqueue_scripts', 'jane_crawford_files');

function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );
