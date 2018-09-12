<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 8</title>
</head>
<body>
    <h1>Opdracht 8:</h1>

    <?php
    // Setting the radius.
    $radius = 7;

    // Calculating the circumference.
    $circumference = 2 * 3.14 * $radius;

    // Calculating the surface.
    $surface = 3.14 * $radius * $radius;

    // Showing the values.
    ?>

    <label>De omtrek van een cirkel met een straal van <?php echo $radius; ?> cm is <?php echo $circumference; ?>.</label><br />
    <label>De oppervlakte van een cirkel met een straal van <?php echo $radius; ?> cm is <?php echo $surface; ?>.</label><br />
</body>
</html>