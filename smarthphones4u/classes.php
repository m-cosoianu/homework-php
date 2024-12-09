
<?php
try {
    include_once('vendor.php');
    $db=new PDO( "mysql:host=localhost;dbname=smartphone4u", "root", "");
} catch(PDOException $e) {
    die('Geen database server actief');

}

$query = $db->prepare( 'SELECT * FROM vendor');
$query->execute();
$vendors=$query->fetchAll( PDO::FETCH_CLASS, 'Vendor');

foreach ($vendors as $vendor):?>
<?=$vendor->name?>
    <img src="img/vendors/ <?=$vendor->picture?>" alt="image not visible">
    <br>
<?php endforeach;?>
