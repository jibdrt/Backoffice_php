<?php
session_start();

if($_SESSION['username']){
    echo $_SESSION['success'];
    require_once('db-connect.php');
    $_sql = 'SELECT * FROM `projects`';
    $query = $db->prepare($_sql);
    $query ->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
/*     var_dump($result); */
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    
    foreach ($result as $project) {
        echo $project['project_title'].'<br>';

        echo $project['project_begining_date'].'<br>';

        echo $project['project_ending_date'].'<br>';

        echo $project['project_context'].'<br>';

        echo $project['project_specs'].'<br>';

        echo $project['project_github'].'<br>';

        echo $project['project_link'].'<br>';
    }
    
    
    
    ?>

    <a href="add-form.php"><button>Add a project</button></a>

</body>
</html>