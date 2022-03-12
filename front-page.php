<?php
$stylePage = 'front-page.css';
require_once 'header.php';

while (have_posts()): the_post();
    the_content();
endwhile;

require_once 'footer.php';
?>
