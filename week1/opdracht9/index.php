<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 9</title>
</head>
<body>
    <h1>Opdracht 9:</h1>

    <?php
    // Determining random values.
    $a = rand(1, 20);
    $b = rand(1, 20);
    $c = rand(1, 20);
    $d = rand(1, 20);
    $string = "";

    // Creating an array with all the random values.
    $array = [$a, $b, $c, $d];

    // Sorting the values from high to low.
    rsort($array);

    // Creating a string with each item in the array.
    foreach ($array as $item) {
        $string = $string . $item . ", ";
    }

    // Trimming the end of the string.
    $string = trim($string, ", ");

    // Showing the string.
    ?>
    <label>All the random values from high to low: <?php echo $string; ?>.</label>
</body>
</html>