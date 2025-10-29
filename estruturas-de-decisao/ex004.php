<?php

/*

Faça um programa que verifique se uma letra digitada é vogal ou consoante

*/

$letra = readline("Digite uma letra: ");

if (str_contains("aeiou", $letra)) {
    echo "TRUE";
} else {
    echo "FALSE";
}

?>