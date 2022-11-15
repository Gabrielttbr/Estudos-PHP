<?php
    $altura = 1.86 ** 2;
    $peso = 90.0;
    $imc = $peso / $altura;
    if($imc < 16.5){
        echo "Macreza".PHP_EOL;
    }elseif ($imc >= 16.5 and $imc <= 24.9){
        echo "Normal".PHP_EOL;
    }elseif ($imc >= 25.0 and $imc <= 29.9){
        echo "Sobrepeso".PHP_EOL;
    }elseif ($imc >= 30.0 and $imc <= 39.9){
        echo "Obesidade".PHP_EOL;
    }else{
        echo "Obesidade grave".PHP_EOL;
    }
    echo $imc.PHP_EOL;