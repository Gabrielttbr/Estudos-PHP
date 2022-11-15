<?php
    spl_autoload_register(
        function($nomeCompletoDaClasse)
        {
            $caminhoCompleto = str_replace("Gabriel\\Banco", 'src', $nomeCompletoDaClasse);
            $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
            $caminhoArquivo .= '.php';
            echo $caminhoArquivo.PHP_EOL;
            if(file_exists($caminhoArquivo))
            {
                echo $caminhoArquivo.PHP_EOL;
                require_once $caminhoArquivo;
            }
        }
    );