<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1</title>
</head>
<body>
    <h1>Opdracht 1:</h1>
    <?php
    $address = "Van Doorenveste, Zernikeplein 11, 9747 AS, Groningen";
    list($name, $address, $postalCode, $place) = explode(", ", $address);
    ?>
    <label><b>Naam van het gebouw:</b> <?php echo $name; ?></label><br />
    <label><b>Adres:</b> <?php echo $address; ?></label><br />
    <label><b>Postcode:</b> <?php echo $postalCode; ?></label><br />
    <label><b>Plaats:</b> <?php echo $place; ?></label><br />
</body>
</html>