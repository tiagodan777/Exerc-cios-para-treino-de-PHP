<?php include 'functions.php' ?>
<?php
    $email = $_COOKIE['email'] ?? null;
    $password = $_COOKIE['password'] ?? null;
    
    if ($email != null || $password != null) {
        header('Location: account.php');
        exit;
    } 

    $email_user = 'tiagoamdaniel488@gmail.com';
    $password_user = 'Tiago1234';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == $email_user && $password == $password_user) {
            login($email, $password);
            header('Location: account.php');
            exit;
        }
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
            <form action="login.php" method="post" enctype="multipart/form-data">
                <label for="email">Email: </label><input type="email" name="email" id="email"><br>
                <label for="password">Palavra-Passe: </label><input type="password" name="password" id="password"><br>
                <input type="submit" value="Login">
            </form>
        </section>
    </main>
</body>
</html>