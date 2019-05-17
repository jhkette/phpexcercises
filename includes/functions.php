<?php

function formatMoney($number) {
    $format = number_format($number, 2);
    $formatted = '£' . $format;
    return $formatted;
}

function printAuthor($authors){
    $output = '';
    if(count($authors) == 1){
    $output= '<p>'. htmlentities($authors[0]). '<p>'. PHP_EOL;
    }
    else if (count($authors) == 2){
        $output= '<p>'. htmlentities($authors[0]). ' and '. htmlentities($authors[1]). '<p>'. PHP_EOL;
    }
    else{
    $finalauthor = array_reverse($authors);
    $output.= '<p>'. $authors[0];
    array_shift($authors);
    array_pop($authors);
    foreach ($authors as $key => $author) {
        $output.=', ' . htmlentities($author);
    }
    
    $output.= ' and '.  htmlentities($finalauthor[0]). '</p>'. PHP_EOL;
}
    return $output;
}

?>