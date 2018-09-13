<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

$function = new functions();
$fruitChoice = $function->getPostValue();
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
            <option value="">Maak en keuze</option>
            <option value="appel">Appel</option>
            <option value="banaan">Banaan</option>
            <option value="peer">Peer</option>
        </select>
        <input type="submit" value="Toon Keuze" />
    </form>
    <br />
    <?php
    if ($fruitChoice) {
        ?>
        <form action="#" method="post">
            <label>Uw favoriete fruitsoort is een <?php echo $fruitChoice; ?>!</label><br />
            <input type="submit" value="Verwijder keuze" />
        </form>
        <?php
    }
    ?>
</body>
</html>