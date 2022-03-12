<?php 
function comandocerto_add_theme_support(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'comandocerto_add_theme_support');
?>
