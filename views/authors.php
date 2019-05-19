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

$names = array(
    0 => array(
        "Donald",
        "Norman"
         ),
    1 => array(
        "Tim",
        "O'Reilly"
        )
    );
foreach ($names as $writer) {
    $first = mysqli_real_escape_string($link, $writer[0]);
    $second = mysqli_real_escape_string($link, $writer[1]);
    $sql = "INSERT INTO author (firstname, lastname)
    VALUES ('$first', '$second')";
    $ok = mysqli_query($link, $sql);
    /* check query ran ok */
    if ($ok === false) {
    echo mysqli_error($link);
    } else {
    // echo 'Data inserted...';
    }
}


 ?>
 