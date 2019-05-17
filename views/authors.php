<?php
$content .= '<h1>Welcome to the Authors page</h1>';

$a1 = array('Author 1');
$a2 = array('Author 1', 'Author 2');
$a3 = array('Author 1', 'Author 2', 'Author 3');
$a4 = array('Author 1', 'Author 2', 'Author 3','Author 4');
$content .= '<p>'.printAuthor($a1) .'</p>';
$content .= '<p>'.printAuthor($a2) .'</p>';
$content .= '<p>'.printAuthor($a3) .'</p>';
$content .= '<p>'.printAuthor($a4) .'</p>';

 ?>
 