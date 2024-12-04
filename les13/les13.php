<?php


try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker", "root", "");
    $query = $db->prepare("select * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($result);
    foreach ($result as $data) {
        echo "<a href='detail.php?id=" . $data['id'] . "'>";
        echo $data["merk"] . " " . $data["type"];
        echo "</a>";
        echo "<br>";
    }
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
//echo "<td>$euro; " . number_format($data["prijs"],2,",",".") . "<td>";
?>

<style type="text/css">
    table {
        border-collaps: collapse;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
        widtch: 100px;
    }
</style>


