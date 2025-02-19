<?php
    $email = $_COOKIE['email'] ?? null;
    $password = $_COOKIE['password'] ?? null;

    if ($email == null || $password == null) {
        header('Location: login.php');
        exit;
    } 
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos PHP</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-image: url('../fundo.avif');
            background-size: 400px;
        }

        main {
            width: 100vw;
            height: 70vh;

            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            align-items: center;
        }

        section {
            width: 500px;
            height: 300px;
            border: 1px solid rgb(210, 210, 210);
            padding: 10px;
            margin: 20px;
            border-radius: 10px;
            background-color: #ffffff;
        }

        img {
            width: 300px;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <p><?= $email ?></p>
            <p><?= $password ?></p>
            <p><a href="logout.php">Sair</a></p>
        </section>
    </main>
</body>
</html>