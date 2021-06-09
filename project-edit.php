<?php
session_start();

if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('db-connect.php');
        $id=strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query ->execute();
        $result = $query->fetch();

    }else{
        echo "l'url n'est pas valide";
    }
} else {
    echo "vous n'êtes pas identifié";
}
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add project</title>
</head>
<body>
    

    <form action="project-edit-form-handler.php" method="post">
        <div>
            <label for="input_title">Title</label>
            <input type="text" id="input_title" name="project_title">
        </div>
        <div>
            <label for="input_begin">Begining date</label>
            <input type="date" id="input_begin" name="project_begin">
        </div>
        <div>
            <label for="input_end">Ending date</label>
            <input type="date" id="input_end" name="project_end">
        </div>
        <div>
            <label for="input_context">Context</label>
            <textarea name="project_context" id="input_context" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="input_specs">Specs</label>
            <textarea name="project_specs" id="input_specs" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="input_githublink">GitHub link</label>
            <input type="text" id="input_githublink" name="project_githublink">
        </div>
        <div>
            <label for="input_link">Project link</label>
            <input type="text" id="input_link" name="project_link">
        </div>
        <div>
            <input type="hidden" name="project_id" value="<?= $result['project_id'] ?>">
            <input type="submit">
        </div>

    </form>
    <a href="project-details.php?id=<?= $result['project_id'] ?>"><button>BACK</button></a>
</body>
</html>
