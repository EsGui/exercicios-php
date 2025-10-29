<?php

/* 

Faça um programa que peça as 4 notas bimestrais e mostre a média.

*/

$nota1 = floatval(readline("Digite a primeira nota: "));
$nota2 = floatval(readline("Digite a segunda nota: "));
$nota3 = floatval(readline("Digite a terceira nota: "));
$nota4 = floatval(readline("Digite a quarta nota: "));

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "media = ".number_format($media, 2);


?>