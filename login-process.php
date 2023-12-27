<?php

$email = $_POST['email'];
$password = $_POST['password'];

$db = new PDO('mysql:host=hostname;dbname=database', 'username', 'password');
$stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password_hash'])) {
    echo "Connexion réussie!";
} else {
    echo "Identifiants incorrects!";
}

?>
