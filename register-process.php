<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$db = new PDO('mysql:host=hostname;dbname=database', 'username', 'password');
$stmt = $db->prepare("INSERT INTO users (name, email, password_hash) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $password]);

echo "Inscription réussie!";
?>
