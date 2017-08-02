<?php

/* Chargement de la feuille du style du theme parent */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-seos-photography-style', get_template_directory_uri() . '/style.css' );
}

function comogene_excerpt_length($length) {
     return 10;
}
add_filter('excerpt_length', 'comogene_excerpt_length');
