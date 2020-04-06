<?php
function jquery_cdn() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
    wp_enqueue_script('jquery');
 }
 
 add_action('wp_enqueue_scripts', 'jquery_cdn');
 