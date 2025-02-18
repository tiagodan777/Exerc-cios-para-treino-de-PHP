<?php
    $allowed_media_types = ['image/jpeg', 'image/png', 'image/gif'];
    $allowed_extentions = ['jpg', 'jpeg', 'png', 'gif'];
    $max_sixe = 5224880;

    $message = '';
    $moved = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['image']['error'] === 0) {
            if ($_FILES['image']['size'] <= $max_sixe) {
                $filename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);   
                $extention = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                $filename = preg_replace('/[^A-z0-9]/', '-', $filename);

                $i = 0;
                while (file_exists($filename)) {
                        $i++;
                        $filename = $filename . '-' . $i . $extention;    
                }
                
                $message = in_array(mime_content_type($_FILES['image']['tmp_name']), $allowed_media_types) ? '' : 'Tipo de media não suportado';
                $message .= in_array($extention, $allowed_extentions) ? '' : '<br>Extenção (' . $extention . ') não suportada';

                if (!$message) {
                    $path = 'uploads/' . $filename . '.' . $extention;
                    $moved = move_uploaded_file($_FILES['image']['tmp_name'], $path);
                    $message = '<img src="' . $path .  '" alt="Foto">';
                }
            }
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
            background-image: url('fundo.avif');
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
            <?= $message ?>
            <form action="form.php" method="post" enctype="multipart/form-data">
                <label for="image">Upload de arquivo:</label>
                <input type="file" name="image" id="image">
                <br>
                <input type="submit" value="Enviar">
            </form>
        </section>
    </main>
</body>
</html>