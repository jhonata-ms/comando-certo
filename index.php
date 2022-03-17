<?php
$stylePage = 'index.css';
require_once 'header.php';

the_custom_logo();

while (have_posts()): the_post();
    the_post_thumbnail('post-thumbnail', array('class' => 'cc-post-thumbnail'));
    the_title('<h2>', '</h2>');
    the_content();
endwhile;

require_once 'footer.php';
?>