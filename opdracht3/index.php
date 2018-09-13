<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring values
$functions = new functions();
$values = [rand(0, 30), rand(0, 30), rand(0, 30)];
list($low, $high) = $functions->determineHighestAndLowest($values);
$sortedValues = $functions->sortValues($values);
$average = $functions->average($values);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<body>
    <h1>Opdracht 3:</h1>
    <!--    Printing the values.-->
    <label>De drie getallen waren:</label><br /><br />
    <label><?php echo $sortedValues; ?></label><br /><br />
    <label>Het laagste getal is <?php echo $low; ?> en het hoogste getal is <?php echo $high; ?>.</label><br />
    <label>Het gemiddelde van de getallen is: <?php echo $average; ?>.</label>
</body>
</html>