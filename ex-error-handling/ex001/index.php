<?php
    try {
        include 'include.php';
    } catch (Exception $e) {
        echo "Ocorreu um probelma";
        error_log($e);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>
    <h1>Página de teste</h1>
</body>
</html>