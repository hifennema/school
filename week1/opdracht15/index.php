<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

// Declaring variables
$functions = new functions();
$data = $functions->getPersons($functions->getPostValue());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Opdracht 15</title>
</head>
<body>
    <h1>Opdracht 15:</h1>

    <form action="#" method="post">
        <label>Kies een dag en kijk wie er nog allemaal jarig zijn!</label><br />
        <select name="date-choice">
            <option value="09-06">9 juni</option>
            <option value="08-11">8 november</option>
        </select>
        <input type="submit" value="Zoeken" />
    </form>
    <?php
    // Checking if data exists.
    if ($data) {
        ?>
        <br />
        <table class="persons-list">
            <tr class="header-tr">
                <th>Geboren op <?php echo $data["date"]; ?></th>
            </tr>
            <?php
            // Looping throught the persons data.
            foreach ($data["persons"] as $person) {
                ?>
                <tr>
                    <td class="person">
                        <b><?php echo $person["name"] ; ?></b>, <?php echo $person["job"]; ?> (<?php echo $person["born"]; ?>)
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    ?>

</body>
</html>