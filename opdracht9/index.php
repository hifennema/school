<?php
spl_autoload_register(function ($class_name) {
   include "./classes/" . $class_name . ".php";
});

// Declaring values
$functions = new functions();
$string = "";
$array = [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 9</title>
</head>
<body>
    <h1>Opdracht 9:</h1>

    <?php
    // Building the string.
    $string = $functions->buildStringValuesHighToLow($array);

    // Showing the string.
    ?>
    <label>All the random values from high to low: <?php echo $string; ?>.</label>
</body>
</html>