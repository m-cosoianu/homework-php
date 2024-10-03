<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$db = new PDO( "mysql: host=localhost; dbname=school",
    "root", "");
$query= $db->prepare("SELECT * FROM leerlingen WHERE klassen_id=". $_GET['id']);
$query-> execute();

$leerlingen=$query->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>voornaam</th>
        <th>tussenvoegsel</th>
        <th>achternaam</th>
    </tr>

    <?php
    foreach ($leerlingen as $leerling) {
        echo "<tr>";
        echo "<td>" .$leerling['voornaam']. "</td>";
        echo "<td>" .$leerling['tussenvoegsel']. "</td>";
        echo "<td>" .$leerling['achternaam']. "</td>";
        echo "</tr>";
    }
    ?>
    <br>
    <a href="les5.php">Terug</a>
</table>
</body>
</html>

