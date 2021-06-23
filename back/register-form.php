<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-form.css">
    <title>Back-office Portfolio</title>
</head>
<body>
<div class="wrapper">
    <form action="register-form-handler.php" method="post">
        <div class="lite">
            <label for="input-username">USERNAME : </label>
            <input type="text" name="username" id="input-username" required>
        </div>
        <div class="lite1">
            <label for="input-email">EMAIL : </label>
            <input type="email" name="email" id="input-email" required>
        </div>
        <div class="lite2">
            <label for="input-password">PASSWORD : </label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div class="lite3">
            <label for="input-confirmation">CONFIRMATION : </label>
            <input type="password" name="confirmation" id="input-confirmation" required>
            <span id="error"></span>
        </div>
        <div class="lite4">
            <input type="submit" value="REGISTER" id="submit">
        </div>
    </form>
</div>
<script src="main.js"></script>
</body>
</html>