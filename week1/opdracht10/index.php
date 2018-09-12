<?php
spl_autoload_register(function ($class_name) {
   include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$round1 = rand(1, 150);
$round2 = rand(1, 150);
$round3 = rand(1, 150);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 10</title>
</head>
<body>
    <h1>Opdracht 10:</h1>

    <?php
    $times = $functions->getTimeValues($round1, $round2, $round3);
    // Showing values.
    ?>

    <label>First round time: <?php echo $round1; ?> seconden</label><br />
    <label>Second round time: <?php echo $round2; ?> seconden</label><br />
    <label>Third round time: <?php echo $round3; ?> seconden</label><br />
    <label>Total time: <?php echo $times["total"]; ?> seconden</label><br />
    <label>Average round time: <?php echo $times["average"]; ?> seconden</label><br />
</body>
</html>