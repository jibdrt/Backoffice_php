
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
        <title>Mes projets</title>
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
        <a class="btnback" href="../index.php"><button>&#8592</button></a>
        <div id="showArea"></div>
        <div class="container">
        <?php
                foreach ($result as $project) {
        ?>


            <div id="myBtn" class="block block-1" >

            <div id="table" class="table">
                <div>
                <h1><?= $project['project_title'] ?></h1> <br><br>
                <img id="logo" src="../assets/pictures/<?= $project['project_picture'] ?>" alt=""><br>
                </div>


            </div>





        </div>


        <?php
            }
        ?>

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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
                $(document).ready(function(){
                $(".block").click(function(){
                    $("#showArea").load("project-front-detail.php?id=<?=$project['project_id']?>").slideToggle(1500);
                });
                });
        </script>

    
    </body>
</html>

