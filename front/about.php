<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    
    <title>About/A propos</title>
</head>
<body>
<a class="btnback" href="http://localhost/backoffice-portfolio/front/index.php"><button>&#8592</button></a>
    <div id="navbar" class="topnav">
            <a id="home" href="home" class="colornav">Home</a>
            
            <a id="project" class='colornav' href="http://localhost/backoffice-portfolio/front/projects.php">Projects</a>
            
            <div id="myBtn">
            <a id="contact" class='colornav' href="http://localhost/backoffice-portfolio/front/contactform.php">Contact</a>
            </div>

            <a id="about" class='colornav' href="#about">About</a>
    </div>
    <div class="container">
                
    </div>
    

<div class="wrapper">

<div></div>

            <div class="titles"><h1 class="en">ABOUT</h1><h1 class="fr">&nbsp;A PROPOS</h1></div>
            <div></div>
            <div></div>
            <div></div>

</div>
<div class="wrappersec">

<div class="secleft"></div>
<div class="secwhite">


<p>Originaire de Bourgogne et résidant aujourd’hui à Dijon, j’ai 25 ans.</p><br>

<p>Après un master en marketing et management, j’ai décidé de céder à la curiosité en m’orientant dans le domaine du développement web.</p><br><p>
Passionné par ce que je fais, cette prise de décision fût une révélation.</p><br>

<p>Intéressé par les créations de toutes sortes, je pratique aussi le dessin et la musique depuis de nombreuses années.
</p>
<br><br>
<div class="split"></div>
<br><br>
<div class="eng">
<p>Originally from Burgundy and now living in Dijon, I am 25 years old.</p><br>
<p>After a master's degree in marketing and management, I decided to give in to curiosity by orienting myself in the field of web development.</p><br><p>Passionate about what I do, this decision making was kind of a revelation.</p><br>
<p>Interested in creations of all kinds, I also practice drawing and music for many years.</p>
</div>






</div>
<div class="secright"></div>


</div>

<div class="wrapimg">

<div></div>
<div id="dn" class="wrapimg_content"></div>
<div class="wrapimg_content"><img id="draw1" onclick="openModal();" src="../assets/pictures/godzi.jpg" alt=""></div>
<div class="wrapimg_content"><img id="draw2" src="../assets/pictures/lovecraft.jpg" alt=""></div>
<div class="wrapimg_content"></div>
<div></div>


</div>








            <table class = "table">
    <?php
    //Les clefs du tableau étant l'id_acd
    $EMPLOYEES = array(
        1 => array(
            'id_acd' => <?= ?>, 
            'nombre' => 2,
        ),
        3 => array(
            'id_acd' => 3,
            'nombre' => 4,
        ), 
        5 => array(
            'id_acd' => 5,
            'nombre' => 6,
        ), 
    );
    foreach($EMPLOYEES as $employee)
    {
        $employee = (object)$employee;
    ?>
        <tr>
        <td><?=$employee->id_acd;?></td>
        <td><?=$employee->nombre;?></td>
        <td>
            <!-- https://getbootstrap.com/docs/4.0/components/modal/ -->
            <button
            id="btnmodal"
                data-toggle="modal"
                data-target="#myModal"
                class="btn btn-warning btn-open-my-modal"
                data-employee-id = "<?=$employee->id_acd;?>"
                 
            >
             <span class="fa fa-plus" aria-hidden="true"></span>
           </button>
          </td>
       </tr>
    <?php }?>
    </table>
     
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-sm">
       <h4 id = "myModalTitle" style="text-align:center;color:green">{{id_acd}} {{nombre}} </h4>
       </div>
    </div>

    <div id="myModal" class="modal fade">
  <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

              <img class="img__modal1" src="../assets/pictures/godzi.jpg" alt="">


            </div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
     
        // On passe notre variables PHP au javascript grace à json_encode.
        var employees = <?=
            json_encode(
                $EMPLOYEES
            ); ?>;
             
        (function($){
             
            var myModalTitle = $( '#myModalTitle' );
            var myModalTitleText = myModalTitle.html();
            var myModal = $( '#myModal' );
            var btnOpenMyModal = $( '.btn-open-my-modal' );
             
            //On remplace le texte original par notre texte
            btnOpenMyModal.on(
                'click',
                function()
                {
                     
                    var btn = $( this );
                    var currentEmployees = employees[parseInt( btn.data( 'employee-id' ) )];
                    myModalTitle.html(
                        myModalTitleText
                        .replace( '{{id_acd}}', currentEmployees.id_acd )
                 
                    );                 
                }
            );
 
             
        }(jQuery));
         
    </script>


<script src="about.js"></script>
</body>
</html>