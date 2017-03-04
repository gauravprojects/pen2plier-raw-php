<?php
    include('connection.php');

    $query="SELECT * FROM state";
    $result= $conn->query($query);

    var_dump($result);





?>

