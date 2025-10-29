<?php

/*

Faça um programa que peça dois números e imprima o maior deles

*/

$n1 = intval(readline("Digite o primeiro valor: "));
$n2 = intval(readline("Digite o segundo valor: "));

if ($n1 > $n2) {
    echo $n1." maior que ".$n2;
} else if ($n1 < $n2) {
    echo $n2." maior que ".$n1;
} else {
    echo $n1." igual á ".$n2;
}

?>