<?php
$uname = isset($_POST['uname']) ? htmlspecialchars($_POST['uname'], ENT_QUOTES, 'UTF-8') : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .box {
            background:#f7f7f7;
            padding:20px;
            border-radius:6px;
        }
    </style>
</head>
<body>
    <div class="box">
        <p><strong>Användarnamn:</strong><?= $uname ?></p>
        <p><strong>Lösenord:</strong><?= $password ?></p>
    </div>
</body>
</html>
