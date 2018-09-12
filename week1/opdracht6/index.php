<?php
spl_autoload_register(function ($class_name){
    include "./classes/" . $class_name . ".php";
});

// Declaring variable
$functions = new functions();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 6</title>
</head>
<body>
    <h1>Opdracht 6:</h1>

    <?php
    // Calculating the numbers
    $numbers = $functions->calculateValues(-7);

    // Showing the numbers.
    ?>
    <label>My absolute number: <?php echo $numbers["absolute"]; ?></label><br />
    <label>Multiplied number: <?php echo $numbers["multiplied"]; ?></label><br />
    <label>Squared number: <?php echo $numbers["squared"]; ?></label><br />
    <label>Rounded number: <?php echo $numbers["rounded"]; ?></label><br />
</body>
</html>