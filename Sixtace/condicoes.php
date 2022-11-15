<?php
    $idade = 16;
    $acompanhado = true;
    echo "=================================================================".PHP_EOL;
    echo "                   BEM VINDO A BOATE                             ".PHP_EOL;
    echo "=================================================================".PHP_EOL;
    if($idade >= 18){
        echo "          Parabéns, bem vindo a boate                   ".PHP_EOL;
    }elseif ($idade >=  16 and $idade < 18 and $acompanhado == true){
        echo"Parabéns menor, chegou a boate".PHP_EOL;
    }
    else{
        echo "          Você não tem 18 anos, não pode entrar       ".PHP_EOL;
    }

    echo "Adeus!".PHP_EOL;