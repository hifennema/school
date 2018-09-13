<?php
spl_autoload_register(function($class_name){
    include "./classes/" . $class_name . ".php";
});

// Declaring variable
$functions = new functions();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 4</title>
</head>
<body>
    <h1>Opdracht 4:</h1>
    <label><?php echo $functions->addingOneFirst(); ?>  => $five++</label><br />
    <label><?php echo $functions->addingOneSecond(); ?> => ++$five</label><br />
    <label><?php echo $functions->addingOneThird(); ?> => $five = $five + 1;</label><br />
</body>
</html>