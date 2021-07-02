<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../back/db-connect.php');
        
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
/*         echo '<pre>';
        var_dump($result); 
        echo '</pre>'; */
    } else {
      echo 'il y a un problème' ;
    }


?>


