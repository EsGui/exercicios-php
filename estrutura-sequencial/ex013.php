<?php

/*

Tendo como dados de entrada um arquivo em Gigabytes, construa um algoritmo que faça a conversão para Megabytes e Kilobytes, usando a seguinte fórmula

    - Para Megabytes: Gigabytes * 1024
    - Para Kilobytes: Gigaytes * 1024 * 1024

Responda o tamanho do arquivo em Megabytes e o tamanho em Kilobytes.
*/

$arquivo = floatval(readline("arquivo: "));

$mega_bytes = $arquivo * 1024;

$kilo_bytes = $arquivo * 1024 * 2;

echo "Conversão Megabytes = ".$mega_bytes."\n";
echo "Conversão Kilobytes = ".$kilo_bytes;

?>
