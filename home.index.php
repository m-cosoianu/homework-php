<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<?php
//$db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","root");
//?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white fs-3" href="index_html.php">Best Smartphones</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active fs-5 text-white" aria-current="page" href="index_html.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary fs-5" href="vendor.php">Buy</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container-fluid py-5 "  style="background: url('img'); background-size: cover">
        <div class="row py-5"></div>
    </div>
</header>
<main>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 text-center pt-3">
                <p class="fw-bold display-4">Toon hier Goedemiddag, goedemorgen of goedenavond</p>
                <p class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tortor pharetra, dignissim nisl eu, pellentesque lectus. Donec consequat nisl.</p>
                <p class="fs-4 fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tortor pharetra, dignissim nisl eu, pellentesque lectus. Donec consequat nisl.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center pt-2">
                <p class="fw-bold fs-4">
                <h2>show Today's date</h2>
                <h2>show Open or closed</h2>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card w-100">
                    <a href="vendor.php"><img src="img" class="card-img-top" style="object-fit: cover; height: 24rem"></a>
                    <div class="card-body">
                        <a class="card-link text-dark text-decoration-none" href="vendor.php">Buy Smartphone</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card w-100">
                    <a href="vendor.php"><img src="img" class="card-img-top" style="object-fit: cover; height: 24rem"></a>
                    <div class="card-body">
                        <a class="card-link text-dark text-decoration-none" href="vendor.php">Choose one of our Smartphones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="bg-dark">
    <div class="container-fluid text-white">
        <div class="row pb-3">
            <div class="col-md-6 mt-4 text-center">
                <ul class="list-unstyled">
                    <li class="list-group-item fw-bold">Contact Info</li>
                    <li class="list-group-item">SmartPhone4u</li>
                    <li class="list-group-item">Bananastraat 14</li>
                    <li class="list-group-item">1234AB Rijswijk</li>
                    <li class="list-group-item">smartphones4u@gmail.com</li>
                    <li class="list-group-item">06- 12345678</li>
                </ul>
            </div>
            <div class="col-md-6 mt-4 text-center">
                <ul class="list-unstyled">
                    <li class="list-group-item fw-bold">Timetable</li>
                    <li class="list-group-item">Monday: 9:00 - 21:00</li>
                    <li class="list-group-item">Tuesday: 9:00 - 21:00</li>
                    <li class="list-group-item">Wednesday: 9:00 - 21:00</li>
                    <li class="list-group-item">Thursday: 9:00 - 21:00</li>
                    <li class="list-group-item">Friday: 9:00 - 20:00</li>
                    <li class="list-group-item">Saturday: 12:00 - 18:00</li>
                    <li class="list-group-item">Sunday: Closed</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

</body>
</html>