<?php
/**
* Child theme stylesheet einbinden in Abhängigkeit vom Original-Stylesheet
*/

function child_theme_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'permanent-tourist-fse', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'), wp_get_theme()->get('Version'));

}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
