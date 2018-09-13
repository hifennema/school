<?php
spl_autoload_register(function ($class_name) {
   include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$radius = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 8</title>
</head>
<body>
    <h1>Opdracht 8:</h1>

    <?php
    // Calculating the circumference.
    $circumference = $functions->calculateCircumference($radius);

    // Calculating the surface.
    $surface = $functions->calculateSurface($radius);

    // Showing the values.
    ?>

    <label>De omtrek van een cirkel met een straal van <?php echo $radius; ?> cm is <?php echo $circumference; ?>.</label><br />
    <label>De oppervlakte van een cirkel met een straal van <?php echo $radius; ?> cm is <?php echo $surface; ?>.</label><br />
</body>
</html>