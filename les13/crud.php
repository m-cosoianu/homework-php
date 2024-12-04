<?php
include_once "modules/database.php";
global $db;

$query = $db->prepare('SELECT * FROM fiets');
$query-> execute();
$fietsen=$query->fetchAll(FETCH_CLASS, 'Fiets');
?>

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
<div class="container">
    <h1>Fietsen CRUD</h1>
    <table class="table">
        <tr>
            <th>merk</th>
            <th>type</th>
            <th class="text-center">details</th>
            <th class="text-center">update</th>
            <th class="text-center">delete</th>
        </tr>

        <?php foreach ($fietsen as $fiets):?>
            <tr>
                <td><?=$fiets->merk?></td>
                <td><?=$fiets->type?></td>
                <td class="text-center"><a href="details.php?id=<?=$fiets->id?>">details</a></td>
                <td class="text-center"><a href="update.php?id=<?=$fiets->id?>">details</a></td>
                <td class="text-center"><a href="delete.php?id=<?=$fiets->id?>">details</a></td>
            </tr>
            <?php endforeach;?>
    </table>
    <a href="insert.php">insert</a>
</div>
</body>
</html>
