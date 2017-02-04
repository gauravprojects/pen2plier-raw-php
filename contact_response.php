<?php
/**
 * Created by PhpStorm.
 * User: gaurav
 * Date: 01-07-2016
 * Time: 22:20
 */
session_start();

if(isset($_SESSION['email']))
{

    //header("location:login.php");
    //header("location: login_success.php");
}
else
{
    header("location:login.php");
}



?>


<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</head>

<body>

<table>
    <thead>
    <tr>
        <th data-field="id">Id</th>
        <th data-field="name">Name</th>
        <th data-field="email">Email</th>
        <th data-field="subject">Subject</th>
        <th data-field="message">Message</th>
    </tr>
    </thead>

    <tbody>

    <?php
    include('connection.php');

    $sql="SELECT * FROM contact_us";
    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<tr><td>".$row['id']."</td><td>".$row['author']."</td><td>".$row['email']."</td><td>".$row['subject']."</td><td>".$row['comment']."</td></tr>";
        }
    }

    ?>


    </tbody>
</table>
</body>

</html>



