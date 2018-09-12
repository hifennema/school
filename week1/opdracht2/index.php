<?php
    spl_autoload_register(function($class_name){
        include "./classes/" . $class_name . ".php";
    });

    // Declaring variables
    $functions = new functions();
    $words = ["Hallo", "prachtige", "Wereld!"];
    $sentence = $functions->combineWords($words);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2</title>
</head>
<body>
    <h1>Opdracht 2:</h1>
    <label><?php echo $sentence; ?></label>
</body>
</html>