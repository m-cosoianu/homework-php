<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h2>Review</h2>

<?php
if(isset($_POST['verzenden'])){
    echo "Het formulier is verzonden! <br>";
    $name = filter_input(INPUT_POST, 'naam',FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Naam: ". $name."<br>";
    $review=filter_input(INPUT_POST, 'review',FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Bericht: ". $review."<br>";
    if(isset($_POST['akkoord']))
    {
        echo "voorwaarden geaccepteerd!";
    }
}
?>
<form method="post" action=" ">
    <div class="mb-3">
        <label for="n" class="form-label">Naam</label>
        <input type="text" class="form-control" id="n" name="naam">
    </div>

    <div class="mb-3">
        <label for="b">Bericht</label>
        <textarea name="review" id="b" class="form-control"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="a" name="akkoord" value="akkoord">
        <label class="form-check-label" for="a">accepteer voorwaarden</label>
    </div>

    <input type="submit" class="btn btn-primary" name="verzenden" value="verzenden">
</form>

</body>
</html>
