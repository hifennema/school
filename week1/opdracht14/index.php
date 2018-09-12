<?php
spl_autoload_register(function ($class_name) {
   include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$postValues = $functions->retrievePostValues();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 14</title>
</head>
<body>
    <h1>Opdracht 14:</h1>
    <form action="#" method="post">
        <select name="fruit-choice">
            <option value="appel">Appel</option>
            <option value="banaan">Banaan</option>
            <option value="peer">Peer</option>
        </select>
        <input type="submit" value="Toon keuze" />
    </form>

    <?php
    // Checking if the postvalue is used!
    if ($postValues["fruit-choice"] !== false) {
        ?>
        <form action="#" method="post">
            <h3>Resultaat:</h3>
            <label>Uw favoriete fruitsoort is een: <b><?php echo $postValues["fruit-choice"]; ?>!</b></label><br />
            <input type="submit" name="cancelChoice" value="Verwijder Keuze" />
        </form>
        <?php
    }
    ?>
</body>
</html>