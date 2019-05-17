<?php

function formatMoney($number) {
    $format = number_format($number, 2);
    $formatted = '£' . $format;
    return $formatted;
}

function printAuthor($authors){
    $output= '<p>'. $authors[0]. '<p>'. PHP_EOL;
    
    if(count($authors) > 1){
    foreach ($authors as $key => $author) {
        $output.='<p> and' .$author.'</p>'. PHP_EOL;
    }
}
    return $output;
}

?>