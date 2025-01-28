<?php

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);
$db = new PDO("mysql:host=localhost;dbname=vendoropd", "root", "");

if ($request_method === 'GET') {

    $id = $_GET['id'];

    $query = $db->prepare("SELECT * FROM vendor WHERE id = :id ");
    $query->bindParam(':id', $id);
    $query->execute();

    $vendors = $query->fetchAll(PDO::FETCH_ASSOC);
    $vendor = $vendors[0];
}

if(isset($_POST['delete'])){
    $id = filter_input(INPUT_POST, 'delete-id', FILTER_SANITIZE_SPECIAL_CHARS);

    $query = $db->prepare("DELETE FROM vendor WHERE id = :id;  ");
    $query->bindParam(':id', $id);
    $query->execute();

    header("Location: vendor_admin.php");
}

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

</body>
</html>

<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <h4 class="text-danger">Are you sure you want to proceed?</h4>
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

                <a href="vendor_admin.php"><button>No, go back</button></a>
                <form method="post" action="vendor_admin_delete.php">
                    <input type="hidden" name="delete-id" value="<?=$id?> ">
                    <button name="delete" type="submit">Yes, delete</button>
                </form>
            </div>
        </div>

    </div>
</main>
