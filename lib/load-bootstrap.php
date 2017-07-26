<?php

// Adding Bootstrap functionality
function bootstrap_script() {
  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '', true );
  wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style( 'bootstrap-style' );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_script' );
