<?php

$dsn = 'mysql:host=localhost;dbname=phpderua';
$userDB = 'ederson';
$pass = '1234';

$db = new PDO($dsn, $userDB, $pass);

$stmt = $db->prepare('SELECT name, email FROM users');
$stmt->execute();

$usersTable = '<tr><th>Nome</th><th>Email</th></tr>';

while ($row = $stmt->fetch()) {
  $name = $row['name'];
  $email = $row['email'];
  $usersTable .= "<tr><th style=\"padding-top: 12px; padding-bottom: 12px; text-align: left;background-color: #ddd;color: black;\">$name</th><th style=\"padding-top: 12px; padding-bottom: 12px; text-align: left;background-color: #ddd;color: black;\">$email</th></tr>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpderua</title>
</head>
<body>
<h1>Ta aí a tabela</h1>
<table style="border: 1px solid black;"><?= $usersTable ?></table>
</body>
</html>
