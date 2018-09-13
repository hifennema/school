<?php
// Declaring variables
$x = 8;
$y = 6;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 11</title>
</head>
<body>
    <h1>Opdracht 11:</h1>
    <?php
    // Showing the values.
    ?>

    <label>De waarde van variabele x = <?php echo $x; ?>.</label><br />
    <label>De waarde van variabele y = <?php echo $y; ?>.</label><br />
    <label><b>MAGIC IS HAPPENING.</b></label><br />

    <?php
    // Swapping the values.
    $array1 = [$x, $y];
    list($y, $x) = $array1;

    // Showing the swapped values.
    ?>

    <label>De waarde van variabele x = <?php echo $x; ?>.</label><br />
    <label>De waarde van variabele y = <?php echo $y; ?>.</label><br />
</body>
</html>