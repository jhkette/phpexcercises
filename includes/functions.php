<?php

function formatMoney($number) {
    $format = number_format($number, 2);
    $formatted = '£' . $format;
    return $formatted;
}

function printAuthor($authors){
    $output = '';
    if(count($authors) == 1){
    $output= '<p>'. $authors[0]. '<p>'. PHP_EOL;
    }
    if(count($authors) == 2){
        $output= '<p>'. $authors[0]. ' and '. $authors[1]. '<p>'. PHP_EOL;
    }
    if(count($authors) > 2){
    $finalauthor = array_reverse($authors);
    $output.= '<p>'. $authors[0];
    $newauthors = $authors;
    array_shift($newauthors);
    array_pop($newauthors);
    foreach ($newauthors as $key => $author) {
        $output.=', ' .$author;
    }
    
    $output.= ' and '.  $finalauthor[0]. '</p>'. PHP_EOL;
}
    return $output;
}

?>