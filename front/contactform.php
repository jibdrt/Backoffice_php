<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>

<section id="my-background">

<a class="btnback" href="../index.php"><button>&#8592</button></a>



    <div class="cf">
    <form id="form" action="contacthandler.php" method="post" target="empty">
        <fieldset>
        <legend>Contact me</legend>
        <div>
            <label for="topic">Object</label><br>
            <input type="text" id='topic' name='message_topic'>
        </div>
        <div>
            <label for="mail">e-mail</label><br>
            <input type="email" id='mail' name='user_mail'>
        </div>
        <div>
            <label for="msg">Message</label><br>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">

            <button class="btnform" type="reset">Reset</button><br>
            <button onclick="validate()" class="btnform" type="submit">Send</button>

            <iframe name="empty" id="empty" style="display: none;"></iframe>

            <!-- <input type="submit"> -->
        </div>
        </fieldset>
        </form>

</section>

<!-- --------------------------------------------------------------------------------------------------- -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.waves.min.js"></script>
                <script>
                  VANTA.WAVES({el :'#my-background',
                    color: 0x222222,
                    shininess: 150.00,
                  })
        </script>

<!-- --------------------------------------------------------------------------------------------------- -->
<script src="main.js"></script>

</body>
</html>