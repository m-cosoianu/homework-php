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
$query = $db->prepare ("SELECT * FROM klassen");
$query->execute();
$klassen = $query->fetchALL (PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>naam</th>
        <th>mentor</th>
        <th>leerlingen</th>
    </tr>

<?php
foreach ($klassen as $klas) {
echo "<tr>";
echo "<td>" .$klas['naam']. "</td>";
echo "<td>" .$klas['mentor']. "</td>";
echo "<td><a href='leerlingen.php?id=" .$klas ['id']. "'>";
echo "leerlingen</a>";
echo "</tr>";
}
?>

</table>
</body>
</html>
