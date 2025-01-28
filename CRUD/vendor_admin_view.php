<?php

$db = new PDO("mysql:host=localhost;dbname=vendoropd","root", "");

$query = $db->prepare("SELECT * FROM vendor WHERE id = :id ");
$query->bindParam(':id', $_GET['id']);
$query->execute();

$vendors = $query->fetchAll(PDO::FETCH_ASSOC);
$vendor = $vendors[0];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-dark fs-3" href="vendor.php">Crud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fs-5 text-dark" aria-current="page" href="index_html.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary fs-5" href="vendor.php">Bestellen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>


                    <tr>
                        <th scope="row"><?=$vendor['id']?></th>
                        <td><?=$vendor['name']?></td>
                        <td><?=$vendor['description']?></td>
                    </tr>

                    </tbody>
                </table>

                <a href="vendor_admin.php">Go back</a>
            </div>
        </div>

    </div>
</main>
</body>
</html>
