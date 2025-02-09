<?php

$inputs = [];
$errors = [];

$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=vendoropd","root", "");
$request_method = strtoupper($_SERVER['REQUEST_METHOD']);
if ($request_method === 'GET') {


    $query = $db->prepare("SELECT * FROM vendor WHERE id = :id ");
    $query->bindParam(':id', $id);
    $query->execute();

    $vendors = $query->fetchAll(PDO::FETCH_ASSOC);
    $vendor = $vendors[0];

    $inputs['name'] = $vendor['name'];
    $inputs['description'] = $vendor['description'];
    $inputs['image'] = $vendor['image'];
}

if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_SPECIAL_CHARS);

    $name = trim($name);
    $description = trim($description);
    $image = trim($image);

    if($name === ''){
        $errors['name'] = 'Naam niet ingevuld';
    } else{
        $inputs['name'] = $name;
    }

    if($description === ''){
        $errors['description'] = 'Description niet ingevuld';
    } else{
        $inputs['description'] = $description;
    }

    if($image === ''){
        $errors['image'] = 'Image niet ingevuld';
    } else{
        $inputs['image'] = $image;
    }

    if(count($errors) === 0){
        var_dump($inputs);
        $query = $db->prepare("UPDATE vendor SET name = :name, description = :description, image = :image WHERE id = :id;  ");
        $query->bindParam(':name', $inputs['name']);
        $query->bindParam(':description', $inputs['description']);
        $query->bindParam(':image', $inputs['image']);
        $query->bindParam(':id', $id);
        $query->execute();

        header("Location: vendor_admin.php");
    }
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
<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <form method="post" action="vendor_admin_edit.php?id=<?=$id?>">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="inputName" value="<?=$inputs['name'] ?? ''?>">
                        <div class="form-text text-danger">
                            <?= $errors['name'] ?? ''?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="inputDescription" value="<?=$inputs['description'] ?? ''?>">
                        <div class="form-text text-danger">
                            <?=$errors['description'] ?? ''?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Image</label>
                        <input type="text" class="form-control" name="image" id="inputImage" value="<?=$inputs['image'] ?? ''?>">
                        <div class="form-text text-danger">
                            <?=$errors['image'] ?? ''?>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</main>
</body>
</html>

