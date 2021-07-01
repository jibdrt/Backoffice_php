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

<a class="btnback" href="http://localhost/backoffice-portfolio/front/index.php"><button>&#8592</button></a>



    <div class="cf">
    <form id="form" action="contacthandler.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
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

            <button type="reset">Reset</button><br>
            <button type="submit">Send</button>

            <!-- <input type="submit"> autre manière de crée un bouton -->
        </div>
        </fieldset>
        </form>
    
    </div>

<!-- <div class="elast">
  <div class="coordinates">
    <div>X:<span class="posX">95</span></div>
    <div>Y:<span class="posY">80</span></div>
  </div>

  <svg id="decoration" width="190" height="160" viewBox="0 0 190 160" xmlns="http://www.w3.org/2000/svg">
    <path d="M 10 80 Q 95 80 180 80" stroke="white" fill="transparent" id="curve" />

    <circle cx="10" cy="80" r="2" fill="white" id="start-point" />
    <circle cx="180" cy="80" r="2" fill="white" id="end-point" />
    <circle cx="95" cy="80" r="5" fill="white"id="control-point" />
  </svg>
</div> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
<script src="contact.js"></script>
</body>
</html>