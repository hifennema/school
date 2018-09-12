<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 10</title>
</head>
<body>
    <h1>Opdracht 10:</h1>

    <?php
    // Determining random values.
    $round1 = rand(0, 150);
    $round2 = rand(0, 150);
    $round3 = rand(0, 150);
    $totalTime = $round1 + $round2 + $round3;

    // Calculating average round time.
    $average = ($totalTime) / 3;

    // Showing values.
    ?>

    <label>First round time: <?php echo $round1; ?></label><br />
    <label>Second round time: <?php echo $round2; ?></label><br />
    <label>Third round time: <?php echo $round3; ?></label><br />
    <label>Total time: <?php echo $totalTime; ?></label><br />
    <label>Average round time: <?php echo $average; ?></label><br />
</body>
</html>