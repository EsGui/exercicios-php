<?php

/*

Faça um programa que peça um valor e mostra na tela se o valor é positivo ou negativo

*/

$n1 = intval(readline("Digite um número: "));

if ($n1 > 0) {
    echo $n1." = positivo";
} else {
    echo $n1." = negativo";
}

?>