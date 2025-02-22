<?php 
require_once 'database-connection.php'; 

$id = 1;
$sql = "SELECT forename, surname 
        FROM membro
        WHERE id = :id;";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $id]);
$membro = $statement->fetch();
if (!$membro) {
    include 'form.php';
}
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $membro['forename'] ?>
    <?= $membro['surname'] ?>
</body>
</html>