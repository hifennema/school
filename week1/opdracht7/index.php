<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$text = " wazig TV-filmpje rond chique skybox ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 7</title>
</head>
<body>
    <h1>Opdracht 7:</h1>

    <?php

    // Altering the text.
    $sentences = $functions->alterText($text);

    // Showing the text.
    ?>
    <label><b>Basis tekst:</b> "<?php echo $text; ?>".</label><br />
    <label><b>Wazig is verwijderd:</b> "<?php echo $sentences["removed"]; ?>".</label><br />
    <label><b>Onnodige spaties getrimd:</b> "<?php echo $sentences["trimmed"]; ?>".</label><br />
    <label><b>Alle woorden starten met een hoofdletter:</b> "<?php echo $sentences["capital"]; ?>".</label><br />
    <label><b>Alle spaties zijn vervangen met een dubbele streep:</b> "<?php echo $sentences["replaced"]; ?>".</label><br />
</body>
</html>