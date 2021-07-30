<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="front/alternate-anim.css">
<!--     <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="front/animhome.css">
    <link rel="stylesheet" href="front/testfront.css">
    <script language="javascript" src="anime/lib/anime.min.js"></script>

</head>
<body>



    <?php include "front/animhome.php";?>

    <span id="circle" class="circle"></span>
    <span id="circlewhite" class="circlewhite"></span>




    

<div class="menu">
  <nav class="menu__nav">
    <ul class="menu__list r-list">
      <li class="menu__group">
        <a href="front/projects.php" class="menu__link r-link nav__link">
                        <span class="nav__link--text" data-splitting>PROJETS -</span>
                        <span class="nav__link--text" data-splitting>- PROJECTS</span>
        </a>
      </li>
<!--       <li class="menu__group">
        <a href="front/about.php" class="menu__link r-link nav__link">
                        <span class="nav__link--text" data-splitting>À PROPOS DE MOI</span>
                        <span class="nav__link--text" data-splitting>ABOUT</span>
        </a>
      </li> -->
      <li class="menu__group">
        <a href="front/contactform.php" class="menu__link r-link nav__link">
                <span class="nav__link--text" data-splitting>ME CONTACTER -</span>
                <span class="nav__link--text" data-splitting>- CONTACT ME</span>
        </a>
      </li>
    </ul>
  </nav>
  <button class="menu__toggle r-button" type="button">
    <span class="menu__hamburger m-hamburger">
      <span class="m-hamburger__label">
        <span class="menu__toggle-hint screen-reader"></span>
      </span>
    </span>
  </button>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="front/main.js"></script>
</body>
</html>