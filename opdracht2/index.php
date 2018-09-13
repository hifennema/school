<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring values
$functions = new functions();
$x = rand(0, 20);
$y = rand(0, 20);
$z = rand(0, 20);
$values = $functions->determineHighestAndLowest([$x, $y, $z]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 2</title>
</head>
<body>
    <h1>Opdracht 2:</h1>
    <!--    Printing the random values.-->
    <label>De drie getallen waren: <?php echo $x . ", " . $y . " en " . $z; ?></label><br />
    <label>De hoogste waarde hiervan is: <?php echo $values[0]; ?></label><br />
    <label>De laagste waarde hiervan is: <?php echo $values[1]; ?></label><br />
</body>
</html>