<?php 

    require_once("inc/class.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pessoa01 = new Pessoa("João", "White", "Dog");
        echo $pessoa01->getName();
         
        ?>
</body>
</html>