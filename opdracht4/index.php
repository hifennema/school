<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$fruitChoice = $functions->getPostValue();
$sentence  = $functions->switchCases($fruitChoice);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 4</title>
</head>
<body>
    <h1>Opdracht 4:</h1>

    <!--    Form for the fruit choice-->
    <form action="#" method="post">
        <select name="fruit-choice">
            <option value="">Maak een keuze</option>
            <option value="appel">Appel</option>
            <option value="banaan">Banaan</option>
            <option value="peer">Peer</option>
        </select>
        <input type="submit" value="Toon Keuze" />
    </form>

    <br />

    <?php
    // Checking if the user made a choice.
    if ($fruitChoice) {
        ?>
        <form action="#" method="post">
            <label>Uw favoriete fruitsoort is een <?php echo $fruitChoice; ?>!</label><br />
            <input type="submit" value="Verwijder keuze" />
        </form>
        <?php
    }
    ?>
    <h3>Een zin bij de <?php echo $sentence[0]; ?>:</h3>
    <label><?php echo $sentence[1]; ?></label><br />
</body>
</html>