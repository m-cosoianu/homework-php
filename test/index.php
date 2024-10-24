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
//include 'dbconnect.php';

const AMOUNT_REQUIRED = 'Aantal opgeven';
const PRODUCT_REQUIRED = 'Product selecteren';

$errors = [];
$inputs = [];

if(isset($_POST['send'])){

    //amount
    $amount=filter_input(INPUT_POST,'amount',FILTER_VALIDATE_INT);
    if($amount===false)
    {
        $errors['amount']=AMOUNT_REQUIRED;
    } else {
        $inputs['amount']=$amount;
    }

    $product = filter_input(INPUT_POST, FILTER_VALIDATE_INT);
    if($product==false){
        $errors['product'] = PRODUCT_REQUIRED;
    } else {
        $inputs['product']=$product;
    }
}
?>
<div class="container">
<h2>Stappelkorting</h2>
<form method="post" action=" ">
    <label>Welke product wordt gekocht?</label> <br>
    <input class="form-check-input" type="radio" name="product" value="1" id="flexRadioDeafult1"
           <?php if (isset($inputs['product']) && $inputs['product']===1) {echo "checked";} ?>>
    <label>Handdoek</label><br>
    <input class="form-check-input" type="radio" name="product" id="flexRadioDeafult1" value="2"
        <?php if (isset($inputs['product']) && $inputs['product']===2) {echo "checked";} ?>>
    <label>Broek</label>
    <br>

    <input class="form-check-input" type="radio" name="product" id="flexRadioDeafult1" value="3"
        <?php if (isset($inputs['product']) && $inputs['product']===3) {echo "checked";} ?>>
    <label>Shirt</label>

    <div class="form-text">
        <?=$errors['product'] ?? '' ?>
    </div>


 
    <label>Amount:</label>
    <input type="text" name="amount" value="<?php echo $inputs['amount'] ?? ''?>">
    <div class="form-text">
        <?=$errors['amount'] ?? '' ?>
    </div>

    <input type="submit" name="send" value="uitrekenen">
    <br>

</div>
</form>
</body>
</html>
