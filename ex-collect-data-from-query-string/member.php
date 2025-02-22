<?php
require_once 'database-conection.php';
require_once 'functions.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    include 'page-not-found.php';
}

$sql = "SELECT forename, surname 
        FROM membro
        WHERE id = :id";
$member = pdo($pdo, $sql, [$id])->fetch();

if (!$member) {
    include 'page-not-found.php';
}
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data from query string</title>
</head>
<body>
    <?= $member['forename'] ?>
    <?= $member['surname'] ?>
</body>
</html>