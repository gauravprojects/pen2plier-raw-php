<?php

session_start();
if(isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    //Is Used To Destroy Specified Session
    echo "Session destroyed";
    header("location:login.php");
}
?>