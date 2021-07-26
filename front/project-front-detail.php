


<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    require_once('../back/db-connect.php');
    $id = strip_tags($_GET['id']);
    $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
} else {
    echo 'id manquant';
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project-front-detail.css">
</head>
<body>

<a class="btnback" href="front/projects.php"><button>&#8592</button></a>

                <div class="card">
                                
                                     <div class="logotitle">    
                                        <img src="../assets/pictures/<?= $result['project_picture']; ?>"><span id="title"><?= $result['project_title'] ?></span>
                                    </div>           

                                    <p><?= $result['project_context'] ?></p>
                                    <p> <?= $result['project_specs'] ?></p>
                                    <p> <?= $result['project_begining_date'] ?></p>
                                    <p> <?= $result['project_ending_date'] ?></p>
                                    <p><?= $result['project_github'] ?></p>
                                    <p><?= $result['project_link'] ?></p>
                                    
                </div>
</body>
</html>