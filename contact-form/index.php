<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="global">

    <form action="form.php" method="post">
    <label for="objet">Objet</label>
    <input type="text" value="" id="objet" name="object_value">

</div>
<div>
    <label for="mail">E-mail :</label>
    <input type="email" value="" id="mail" name="mail_value">

</div>
<div>
    <label for="msg">Message :</label>
    <textarea name="message_value" id="msg"></textarea>

</div>
    <div class="button">
    <button type="submit">Envoyer</button>
</div>
    
</body>
</html>