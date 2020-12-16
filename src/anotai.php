<?php
session_start();

require_once 'models/User.php';

$dsn = 'mysql:host=localhost;dbname=phpderua';
$userDB = 'ederson';
$pass = '1234';

$name = $_POST['nome'];
$email = $_POST['email'];

if (!empty($name) && !empty($email)) {

  $user = new User($name, $email);

  $db = new PDO($dsn, $userDB, $pass);

  $prepared = $db->prepare(
    'INSERT INTO users (name, email) VALUES (:name, :email)'
  );

  $prepared->bindParam(':name', $user->getName());
  $prepared->bindParam(':email', $user->getEmail());

  $prepared->execute();

  $_SESSION['name'] = $user->getName();

  $_SESSION['email'] = $user->getEmail();

  print_r($user);
  header('Location: mostrabagulho');
}
