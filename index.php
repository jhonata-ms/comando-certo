<?php
$stylePage = 'index.css';
require_once 'header.php';
require_once 'navbar.php';

while (have_posts()): the_post();
    the_post_thumbnail('post-thumbnail', array('class' => 'cc-post-thumbnail'));
    echo '<content class="cc-content">';
    the_title('<h2>', '</h2>');
    the_content();
    echo '</content>';
endwhile;

require_once 'footer.php';
?>