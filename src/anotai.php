<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=phpderua';
$user = 'ederson';
$pass = '1234';

$name = $_POST['nome'];
$email = $_POST['email'];

$db = new PDO($dsn, $user, $pass);

$prepared = $db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

$prepared->bindParam(':name', $name);
$prepared->bindParam(':email', $email);


$prepared->execute();

if (!empty($_POST['nome'])){
  $_SESSION['name'] = $name;
}

if (!empty($_POST['email'])){
  $_SESSION['email'] = $email;
}

header('Location: mostrabagulho');
