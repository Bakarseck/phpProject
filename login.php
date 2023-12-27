<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connexion</h1>
    <form action="login_process.php" method="post">
        <div>
            <label>Email: </label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Mot de passe: </label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Connexion">
        </div>
    </form>
</body>
</html>
