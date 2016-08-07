<?php
/**
 * Created by PhpStorm.
 * User: gaurav
 * Date: 30-06-2016
 * Time: 11:55
 */

$servername= "localhost";
$username= "pen2plier_user";
$password= "india123.";
$dbname="pen2plier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO news_letter_emails (email_id)
//VALUES ('reachgauravarora@outlook.com')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//

?>
