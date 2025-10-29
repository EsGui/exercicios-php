<?php

/*

Faça um programa que leia três números e mostre o maior deles

*/


$n1 = intval(readline("Digite o primeiro número: "));
$n2 = intval(readline("Digite o segundo número: "));
$n3 = intval(readline("Digite o terceiro número: "));

if ($n1 >= $n2 && $n1 >= $n3) {
    echo "Maior número = ".$n1;
} else if ($n2 >= $n1 && $n2 >= $n3) {
    echo "Maior número = ".$n2;
} else {
    echo "Maior número = ".$n3;
}

?>