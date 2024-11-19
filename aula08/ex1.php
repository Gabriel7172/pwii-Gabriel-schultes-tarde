<?php

$pum = 20.00;
$pdois = 40.00;

$desum = $pum - ((8/100)* $pum);
$desdois = $pdois - ((11/100)* $pdois);

$total = $desdois + $desum;

echo "O valor do produto um é R$ $pum, com desconto fica por R$ $desum,  valor do produto dois é R$ $pdois, com desconto fica por R$ $desdois, o total a pagar é R$ $total "

?>