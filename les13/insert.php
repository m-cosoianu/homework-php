<?php

try{
    include_once ('classes/Fiets.php');
    $db= new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
} catch (PDOException $e) {
    die('Geen database server actief');
}

$errorMerk="";
$errorType="";
$errorPrijs="";

if(isset($_POST["send"])){
    $merk=filter_input(INPUT_POST,"merk", FILTER_SANITIZE_SPECIAL_CHARS);
    $type=filter_input(INPUT_POST,"type", FILTER_SANITIZE_SPECIAL_CHARS);
    $prijs=filter_input(INPUT_POST,"prijs", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($merk)) {
        $errorMerk="Merk invullen";
    }
    if(empty($type)) {
        $errorType = "Type invullen";
    }
    if($prijs===false) {
        $errorPrijs = "Prijs invullen";
    }
    if($errorMerk=="" && $errorType=="" && $errorPrijs==""){
        $query = $db->prepare('INSERT INTO fiets(merk,type,prijs) VALUES (:merk, :type, :prijs)');
        $query->bindParam(':merk', $merk);
        $query->bindParam(':type', $type);
        $query->bindParam(':prijs', $prijs);
        $query->execute();
        header("location:read2.php");
    }
}
?>