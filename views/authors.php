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

// $sql = "INSERT INTO students( firstname, age)
// VALUES ('steven', 23)";
// $ok = mysqli_query($link, $sql);
$link = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "INSERT INTO author(firstname, lastname)
 VALUES ('Steven','Simons')";
$ok = mysqli_query($link, $sql);
/* check query ran ok */
if ($ok === false) {
 echo mysqli_error($link);
} else {
 echo 'Data inserted...';
}


 ?>
 