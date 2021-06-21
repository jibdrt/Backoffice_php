<?php
session_start();


if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db-connect.php');
        $id=strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
/*         var_dump($result); */


    } else {
        echo 'something went wrong';
    }

} else {
    echo 'please login';
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
<br>
<?= $result['project_title'] ?> <br>
<img src="assets/<?= $result['project_picture'] ?>"> <br>
<?= $result['project_context'] ?> <br>
<?= $result['project_specs'] ?> <br>
<?= $result['project_begining_date'] ?> <br>
<?= $result['project_ending_date'] ?>

<a href="project-delete.php?id=<?= $result['project_id'] ?>">DELETE <?= $result['project_title'] ?></a>
<a href="project-edit.php?id=<?= $result['project_id'] ?>">EDIT <?= $result['project_title'] ?></a>


<a href="home.php"><button>Back</button></a>


</body>
</html>