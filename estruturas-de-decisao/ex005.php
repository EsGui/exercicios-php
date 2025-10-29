<?php

/*

Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar

    - A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
    - A mensagem "Reprovado" se a média for menor do que sete;
    - A mensagem "Aprovado com Dinstinção", se a média for igual a dez;

*/

$nota1 = floatval(readline("Digite a primeira nota: "));
$nota2 = floatval(readline("Digite a segunda nota: "));

$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    echo "Aprovado";
} else if ($media <= 7) {
    echo "Reprovado";
} else {
    echo "Aprovado com distinção";
}


?>