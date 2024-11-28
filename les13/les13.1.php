<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root", "");
    $query = $db->prepare("select * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    echo "<table>";
    foreach($result as $data) {
        echo "<tr>";
        echo "<td>". $data["merk"] . "</td> ";
        echo "<td>" . $data["type"] . "</td> ";
        echo "<td>" . $data["prijs"] . "</td>"; echo "</tr>";
    }
    echo "</table>";
} catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}
//echo "<td>$euro; " . number_format($data["prijs"],2,",",".") . "<td>";
?>

<style  type="text/css">
    table{
        border-collaps: collapse;
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
        widtch: 100px;
    }
</style>

?>
