<?php
$ListasDeConta = [
    '000.000.000-00' => [
        'id' => 1,
        'nome' => 'Gabriel',
        'nascimento' => '09/08/2004',
        'tipo' => 'poupança'
    ],
    '111.111.111-11' => [
        'id' => 2,
        'nome' => "Rafael",
        'nascimento' => '19/01/2000',
        'tipo' => 'poupança'
    ],
    '222.222.222-22' => [
        'id' => 3,
        'nome' => 'Carlos',
        'nascimento' => '01/06/2015',
        'tipo' => 'poupança'
    ],
    '333.333.333-33' => [
        'id' => 4,
        'nome' => 'Fran',
        'nascimento' => '29/09/1964',
        'tipo' => 'corrente'
    ],
];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro projeto web com PHP</title>
</head>
<body>
    <main>
        <ol>
            <?php
                foreach ($ListasDeConta as $intem){
            ?>
            <br>
                nome <?= $intem['nome'] ?></br>
                nascimento <?= $intem['nascimento'] ?></br>
                tipo <?= $intem['tipo'] ?></br>
            </li>
            <?php }?>
        </ol>
    </main>
</body>
</html>