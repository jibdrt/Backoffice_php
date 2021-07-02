<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../back/db-connect.php');
        
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        echo '<pre>';
        var_dump($result); 
        echo '</pre>';
    } else {
      echo 'il y a un problème' ;
    }


?>

    <h1><?= $result['project_title'] ?></h1> <br><br>
    <img src="../assets/pictures/<?= $result['project_picture'] ?>" alt=""><br>
    <p><?= $result['project_context'] ?></p><br>
    <p><?= $result['project_specs'] ?></p>
    <p>Projet démarré le <?= $result['project_begin'] ?> et terminé le <?= $result['project_end'] ?></p>
    <br>
    <br>
    <br><br>
