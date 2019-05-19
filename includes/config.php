<?php

// $link = mysqli_connect( 'localhost',
// 'root',
// // Pass the DB credentials to the
//  '',
// // connect function, store handle
// 'test'
// );
define('DB_HOST', 'localhost' );
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'test2');

$production = false;

// development
if($production == false){
    error_reporting(E_ALL);
}
else{
    // production
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
}

?>