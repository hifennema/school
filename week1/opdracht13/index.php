<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variable
$array = [["name" => "A", "salary" => "1000"],["name" => "B", "salary" => "1200"], ["name" => "C", "salary" => "1400"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Opdracht 13</title>
</head>
<body>
    <h1>Opdracht 13:</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Salaris</th>
        </tr>
        <?php
        // Looping throught the array.
        foreach ($array as $item) {
            ?>
            <tr>
                <td id="salary">Salaris van <?php echo $item["name"]; ?> is.</td>
                <td>€ <?php echo $item["salary"]; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>