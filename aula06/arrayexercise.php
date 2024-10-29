<?php

$nums = array (2, 5, 7, 8, 10, 18, 30, 37, 38, 60); 

foreach($nums as $num){

    if ($num %2 == 0) {
        echo "$num é par <br/> ";

    } elseif ($num %2 !=0) {

            echo "$num é impar <br/>";

    }
    


}





?>