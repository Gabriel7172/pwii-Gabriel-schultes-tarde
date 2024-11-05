<?php

$valor = 360.00;

$v_com_acrescimo = $valor+($valor*0.16) ;

$parcelas = $v_com_acrescimo/10;


echo "um produto de R$ $valor , ficou com seu valor final de R$ $v_com_acrescimo com o acrescimo de 16% graças ao juros das parcelas, onde o cliente ira pagar R$ $parcelas em 10 parcelas. "

?>