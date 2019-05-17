<?php

function formatMoney($number) {
    $format = number_format($number, 2);
    $formatted = '£' . $format;
    return $formatted;
}

function printAuthor($authors){
    $output = '';
    switch(true){

    case (count($authors) == 1):
    $output= '<p>'. htmlentities($authors[0]). '<p>'. PHP_EOL;
    break;
    
    case (count($authors) == 2):
        $output= '<p>'. htmlentities($authors[0]). ' and '. htmlentities($authors[1]). '<p>';
        break;
    
    default:   
    $finalauthor = array_reverse($authors);
    $output.=  '<p>' . $authors[0];
    array_shift($authors);
    array_pop($authors);
    foreach ($authors as $key => $author) {
        $output.=', ' . htmlentities($author);
    }
    
    $output .=  ' and '.  htmlentities($finalauthor[0]). '</p>'. PHP_EOL;
}
    return $output;
}

function printBook($title, $isbn, $price, $authors){


    
    $output = '<table> <tr> <td>'. $title . '</td> <td>' . $isbn
    . '</td> <td>' .  formatMoney($price) .
    '</td>   <td>' . printAuthor($authors) . '</td> </tr> </table>';
    
    return $output;  
}


    ?>           