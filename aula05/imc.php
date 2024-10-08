<?php

$altura = 1.50 ;

$peso = 90; 

$res = $peso/($altura*$altura); 





if ($res < 18.5){

    echo "Magreza";
}


else if ($res > 18.5 || $res = 18.5 and $res < 25) {

    echo  "Normal";
}

else if ($res > 25 || $res = 25 and $res < 30) {

    echo "Obesidade Grau I";
}


else if ($res > 30 || $res = 30 and $res < 40) {

    echo  "Obesidade Grau II";
}

else {

    echo  "Obesidade Grave, Grau III";
}




?>