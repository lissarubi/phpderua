<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpderua</title>
</head>
<body>
<h1>Seu nome é <?= $name ?></h1>
<h1>Seu email é <?= $email ?></h1>

<p>Já escrevi na BD os seus dados beleza? otário</p>
</body>
</html>
