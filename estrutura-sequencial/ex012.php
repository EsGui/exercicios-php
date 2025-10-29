<?php

/*

Tendo comod ados de entrada um arquivo em Gigabytes, construa um algoritmo que faça a conversão para Megabytes, usando a seguinte fórmula:

Gygabytes * 1024

*/

$arquivo = floatval(readline("Arquivo: "));

$mega_bytes = $arquivo * 1024;

echo "Conversão ".$mega_bytes

?>