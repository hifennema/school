<?php
spl_autoload_register(function($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$salesPrice = 100;
$purchasePrice = 50;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
</head>
<body>
    <h1>Opdracht 5:</h1>
    <?php
    // Calculating the profit.
    $prices = $functions->calculateProfit($salesPrice, $purchasePrice);

    echo "De winst prijs is " . $prices["profit"] . " euro als de inkoopprijs " . $prices["purchase"] . " euro en de verkoopprijs " . $prices["sales"] . " euro zijn <br />";
    ?>
</body>
</html>