<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../back/db-connect.php');
        
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $project = $query->fetch();
/*         echo '<pre>';
        var_dump($result); 
        echo '</pre>'; */
    }/*  else {
      echo 'il y a un problème' ;
    } */


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="projectmodal.css">
    <title>Project</title>
</head>
<body>
<?= $result['project_title'] ?> <br>
<img id="controlsize" src="../assets/pictures/<?= $result['project_picture'] ?>"> <br>
<style>
    #controlsize{
        width: 200px;
    }
</style>
<div id="controlsize">
<?= $result['project_context'] ?> <br>
<?= $result['project_specs'] ?> <br>
<?= $result['project_begining_date'] ?> <br>
<?= $result['project_ending_date'] ?>
</div>

    
</body>
</html>