<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$function = new functions();
$fruitChoice = $function->getPostValue();

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
            <label>Uw favoriete fruitsoort is een <?php echo $fruitChoice[0]; ?>!</label><br />
            <label><?php echo $fruitChoice[1]; ?></label>
            <input type="submit" value="Verwijder keuze" />
        </form>
        <?php
    }
    ?>
</body>
</html>