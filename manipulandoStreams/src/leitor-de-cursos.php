<?php
/*
//Abri o arquivo
$arquivo = fopen('listadecursos.txt', 'r');

//Laço de repetição
/*while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso;
}*/
//Lendo o tamanho de um arquivo
/*
$tamanhoDoArquivo = filesize('listadecursos.txt');]
echo $tamanhoDoArquivo;
//Fechar arquivo
fclose($arquivo);*/

$dadosArquivo = file_get_contents('listadecursos.txt');

echo $dadosArquivo;