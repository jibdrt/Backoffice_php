<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/testfront.css">
    <script language="javascript" src="anime/lib/anime.min.js"></script>
<!--     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js"> -->
    <link rel="stylesheet" href="front/animhome.css">
    <title>-Portfolio-</title>
</head>
<body>

    <div id="navbar" class="topnav">
            <a id="home" href="front/index.php" class="colornav">Home</a>
            
            <a id="project" class='colornav' href="front/projects.php">Projects</a>
            

            <a id="contact" class='colornav' href="front/contactform.php">Contact</a>
            
            
            <a id="about" class='colornav' href="front/about.php">About</a>
    </div>
    <div class="container">
                
    </div>
    <?php include "front/animhome.php";?>

    <div class="menu">
            <nav class="menu__nav">
                <ul class="menu__list r-list">
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">Home</a>
                </li>
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">About me</a>
                </li>
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">Services</a>
                </li>
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">Portfolio</a>
                </li>
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">Blog</a>
                </li>
                <li class="menu__group">
                    <a href="#0" class="menu__link r-link">Contacts</a>
                </li>
                </ul>
            </nav>

            
  <button class="menu__toggle r-button" type="button">
    <span class="menu__hamburger m-hamburger">
      <span class="m-hamburger__label">
        <span class="menu__toggle-hint screen-reader">Open menu</span>
      </span>
    </span>
  </button>



</div>






<script src="front/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>