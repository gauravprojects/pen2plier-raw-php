<?php

        session_start();

        include('connection.php');
        if($_POST['email'])
        {
            $email= $_POST['email'];
            $password= $_POST['password'];



            $sql= "SELECT * FROM users";
            $result= $conn->query($sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    if($email == $row['email'])
                    {
                        if($password == $row['password'])
                        {
                            echo "login successful";
                            $_SESSION['email']=$email;
                        }
                        else "password incorrect";

                    }

                }
            }

        }
        echo $_SESSION['email'];
?>



<html>
    <head>

    </head>

    <body>
            <div>
                <ul>
                    <li><a href="contact_response.php">Contact us responses</a></li>
                    <li><a href="statics.php">Statics On Home page</a> </li>
                </ul>
            </div>

    </body>

</html>
