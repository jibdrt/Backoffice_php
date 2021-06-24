<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../back/db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        /*  var_dump($result); */
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projectmodal.css">
    <title>Modal</title>
</head>
<body>
    <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>


    <h1><?= $result['project_title'] ?></h1> <br><br>
    <img src="../assets/pictures/<?= $result['project_picture'] ?>" alt=""><br>
    <p><?= $result['project_context'] ?></p><br>
    <p><?= $result['project_specs'] ?></p>
    <p>Projet démarré le <?= $result['project_begin'] ?> et terminé le <?= $result['project_end'] ?></p>
    <br>
    <br>
    <br><br>




    
    </p>
  </div>

</div>
<script src="modal.js"></script>
</body>
</html>