<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../../autoloader.php';

use Classes\DisplayProject;
use Classes\UpdateProject;

$displayProject = new DisplayProject;
$displayProject->displayProject();

$updateProject = new UpdateProject;
$updateProject->updateProject();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../../style/main.css">
    </head>
    <body class="update"> 

        <h1 class="text-center">Modifier le projet <?php echo $project['name'];?></h1>
        <form method="POST">
            <div class="d-flex direction-column">
                <div class="d-flex">
                    <label for="">Code</label>
                    <input type="text" name="" id="" value="<?php echo $project['code'];?>">
                </div>
                <div class="d-flex">
                    <label for="">Nom</label>
                    <input type="text" name="name" id="name" value="<?php echo $project['name'];?>">
                </div>
                <div class="d-flex">
                    <label for="">Notes</label>
                    <textarea name="notes" id="notes" cols="30" rows="10"><?php echo $project['notes'];?></textarea>
                </div>
                <input type="submit" name="submit" value="mettre a jour">
            </div>
        </form>
    </body>
</html> 