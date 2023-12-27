<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inscription</h1>
    <form action="register_process.php" method="post">
        <div>
            <label>Nom: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email: </label>
            <input type="email" name="email">
        </div>
        <div>
            <label>Mot de passe: </label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Inscription">
        </div>
    </form>
</body>
</html>
