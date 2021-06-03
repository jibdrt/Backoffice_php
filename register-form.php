<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-office Portfolio</title>
</head>
<body>
    <form action="register-form-handler.php" method="post">
        <div>
            <label for="input-username">nom d'utilisateur : </label>
            <input type="text" name="username" id="input-username" required>
        </div>
        <div>
            <label for="input-email">email : </label>
            <input type="email" name="email" id="input-email" required>
        </div>
        <div>
            <label for="input-password">mot de passe : </label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div>
            <label for="input-confirmation">confirmation du mot de passe : </label>
            <input type="password" name="confirmation" id="input-confirmation" required>
            <span id="error"></span>
        </div>
        <div>
            <input type="submit" value="enregistrer" id="submit">
        </div>
    </form>
<script src="main.js"></script>
</body>
</html>