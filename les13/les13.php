
<?php
try{
    $db = new PDO("mysql:localhost;dbname=fietsenmaker","root", "");
    $query = $db->prepare("select * FROM fietsen");
    $query->execute();
    $result = $query-FetchAll (PDO::FETCH_ASSOC);
    foreach($result as $data) {
        echo
    }
   

}
?>

