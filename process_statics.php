<?php

    include('connection.php');
    $schools=$_POST['schools'];
    $trainers= $_POST['trainers'];
    $innovators= $_POST['innovators'];

    echo $schools.$trainers.$innovators;

    $sql= "UPDATE statics(schools,trainers,innovators)
            VALUES('$schools','$trainers','$innovators')
          ";

    $result= $conn->query($sql);

    header("location:process_login.php");


?>