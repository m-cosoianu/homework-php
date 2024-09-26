<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$db = new PDO( "mysql:host=localhost;dbname=fietsenmaker",
"root", "");
$id=$_GET['id'];
$query = $db->prepare("SELECT * FROM fietsen WHERE id=". $id);

$query->execute();
$result = $query->fetchALL ( PDO::FETCH_ASSOC);
foreach ($result as &$data) {
    echo "Artikelnummer:" . $data['id'] . "<br>";
    echo "Merk:" . $data['merch'] . "<br>";
    echo "Type:" . $data['type'] . "<br>";
    echo "Prijs EUR:" . $data['price'] . "<br>";
}
?>
<a href="les4.php"></a>
</body>
</html>
