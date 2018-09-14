<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$postValue = $functions->getPostValue();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 5</title>
</head>
<body>
    <h1>Opdracht 5:</h1>
    <form action="#" method="post">
        <select name="table-choice">
            <option value="">Maak een keuze</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <input type="submit" value="Toon tafel" />
    </form>
    <br />
    <?php
    if ($postValue) {
        ?>
        <h3>De resultaten van de omgekeerde tafel van <?php echo $postValue; ?>:</h3>
        <?php
        for ($i = 10; $i >= 0; $i--) {
            ?>
            <label><?php echo $i; ?> x <?php echo $postValue . " = " . $i * $postValue; ?></label><br />
        <?php
        }
    }
    ?>
</body>
</html>