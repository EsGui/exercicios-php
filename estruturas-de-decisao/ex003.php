<?php

/*

Faça um program aque vrifique se uma letra digitada é "F" ou "M". Conforme a letra escrever:
    - F - Feminino
    - M - Masculino
    - Sexo inválido

*/

$genero = strtolower(readline("Digite M ou F: "));

if ($genero === "m") {
    echo "Masculino";
} else if ($genero === "f") {
    echo "Feminino";
} else {
    echo "Sexo inválido";
}

?>