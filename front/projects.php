
<?php
 require_once('../back/db-connect.php');
 $sql ='SELECT * FROM `projects`';
 $query =$db-> prepare($sql);
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Horizontal Scroll</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="projects.css" />
    </head>
    <style> 
            body { 
            animation: fadeInAnimation ease 5s; 
            animation-fill-mode: forwards; 
            animation-iteration-count: 1; 
            } 
            @keyframes fadeInAnimation { 
            0% { 
            opacity: 0; 
            } 
            100% { 
            opacity: 1; 
            } 
            } 
</style> 
    <body>
        <a class="btnback" href="http://localhost/backoffice-portfolio/front/index.php"><button>&#8592</button></a>
        <div class="container">
        <?php
                foreach ($result as $project) {
        ?>

     <a href="project-front-detail.php?id=<?=$project['project_id']?>">
            <div id="myBtn" class="block block-1" >

            <div class="table">
                <div>
                <h1><?= $project['project_title'] ?></h1> <br><br>
                <img id="logo" src="../assets/pictures/<?= $project['project_picture'] ?>" alt=""><br>
                </div>


            </div>
     </a>




        </div>


        <?php
            }
        ?>


<!--             <div id="myBtn" class="block block-1">
                <h1>.</h1>
            </div>
            <div class="block block-2">
                <h1>.</h1>
            </div>
            <div class="block block-3">
                <h1>.</h1>
            </div>
            <div class="block block-4">
                <h1>A propos.</h1>
            </div>
            <div class="block block-5">
                <h1>Contact.</h1>
            </div> -->
        </div>
        <script src="mainscroll.js"></script>
        <script>
            var blocks = document.getElementsByClassName("block");
            var container = document.getElementsByClassName("container");
            var hs = new HorizontalScroll.default({
                blocks: blocks,
                container: container,
                isAnimated: true,
                springEffect: 0.8,
            });
        </script>
    <?php include "projectmodal.php";?>
    
    </body>
</html>

