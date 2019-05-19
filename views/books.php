<?php
$content .= '<h1>Welcome to the books page</h1>';
$content  .= printBook('Prioritibility','978-0321350312', 24.99, array('Jakob Nielsen', 'Hoa Loranger'));
 
//  $host = DB_HOST;
// $user = DB_USER;
// $pass = DB_PASS;
//  $dbname = DB_NAME;

$link = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = "SELECT title, isbn
FROM book";
$result = mysqli_query($link, $sql);
if ($result === false) {
    echo mysqli_error($link); }
 else {       

// $sql = "INSERT INTO students( firstname, age)
// VALUES ('steven', 23)";
// $ok = mysqli_query($link, $sql);


while ($row = mysqli_fetch_assoc($result)) { echo $row['title'].' is '.$row['isbn'];
}
mysqli_free_result($result);
 }
?>

 <!-- Use strtotime -->