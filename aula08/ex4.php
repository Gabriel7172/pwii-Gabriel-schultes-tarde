<?php

$inicio = 5;
$fim = 20;

if ($inicio < $fim) {
    for ($i=$fim; $i>=$inicio; $i--) {
        echo "numero: $i <br/>";  
    } 
}

else if ($inicio > $fim) {
    for ($j=$fim; $j<=$inicio; $j++) {
        echo "numero: $j <br/>"; 
    }
}
?>