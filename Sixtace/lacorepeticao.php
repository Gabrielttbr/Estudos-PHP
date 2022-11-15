<?php
    $cont = 0;
    $numeroalunos = 10;
    echo "FOR ".PHP_EOL;
    for($c=0; $c < $numeroalunos; $c++){
        echo "Aluno: $c".PHP_EOL;
    }
    echo "DO WHILE".PHP_EOL;
    do{
        $cont ++;
        echo "Número de alunos: ".$cont.PHP_EOL;
    }while($cont < 10);
    echo "While".PHP_EOL;
    $cont = 0;
    while ($cont < 10){
        $cont++;
        echo "Alunas gostosas: $cont".PHP_EOL;
    }