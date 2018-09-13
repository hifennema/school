<?php
spl_autoload_register(function ($class_name) {
    include "./classes/" . $class_name . ".php";
});

$functions = new functions();
$data = $functions->getPersons();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Opdracht 15</title>
</head>
<body>
<h1>Opdracht 15:</h1>

<form action="#" method="post">
    <select name="fruit-choice">
        <option value="">Maak en keuze</option>
        <option value="09-06">9 juni</option>
        <option value="08-11">8 november</option>
    </select>
    <input type="submit" value="Toon Keuze" />
</form>
<br />
<?php
if ($data["date"] !== false) {
    ?>
    <table>
        <tr>
            <th>Geboren op <?php echo $data["date"]; ?></th>
        </tr>
        <?php
        foreach ($data["persons"] as $person) {
            ?>
            <tr>
                <td><b><?php echo $person["name"]; ?></b>, <?php echo $person["job"]; ?> (<?php echo $person["born"]; ?>)</td>
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