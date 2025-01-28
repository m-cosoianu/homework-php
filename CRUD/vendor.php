<?php

$db = new PDO("mysql:host=localhost;dbname=vendoropd","root", "");

$query = $db->prepare("SELECT * FROM vendor ");
$query->execute();

$vendors = $query->fetchAll(PDO::FETCH_ASSOC);

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
<?php

foreach ($vendors as $vendor){
    ?>
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo 'img/vendor'.$vendor['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $vendor['name'];?></h5>
                <p class="card-text"><?php echo $vendor['description'];?></p>
            </div>
        </div>

    </div>

    <?php
}
?>
</body>
</html>
