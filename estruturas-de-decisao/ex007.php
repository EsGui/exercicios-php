<?php

/*

Faça um programa que leia três números e mostre o maior e o menor deles

*/

$n1 = intval(readline("Digite o primeiro valor: "));
$n2 = intval(readline("Digite o segundo valor: "));
$n3 = intval(readline("Digite o terceiro valor: "));

$maior = 0;
$menor = 0;

if ($n1 >= $n2 && $n1 >= $n3) {
    $maior = $n1;
} else if ($n2 >= $n1 && $n2 >= $n3) {
    $maior = $n2;
} else {
    $maior = $n3;
}

if ($n1 <= $n2 && $n1 <= $n3){
    $menor = $n1;
} else if ($n2 <= $n1 && $n2 <= $n3){
    $menor = $n2;
} else {
    $menor = $n3;
}

echo "Maior número ".$maior." Menor número = ".$menor
    


?>