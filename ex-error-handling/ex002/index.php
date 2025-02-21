<?php
    include 'Jogador.php';

    $message = '';

    try {
        $jogador1 = new Jogador('Tiago', 19, 2000);
        $jogador2 = new Jogador('Martim', 9, 0);

        $jogador2->jogar();
        $jogador1->jogar();
    } catch (JogadorException $e) {
        $message = $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 002</title>
</head>
<body>
    <h1>Jogadores</h1>
    <?= $message ?>
</body>
</html>