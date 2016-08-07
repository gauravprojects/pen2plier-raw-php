<html>
    <head>

    </head>

    <body>
            <form action="process_statics.php" method="post" >


                <?php

                include('connection.php');
                $sql="SELECT * FROM statics";
                $result= $conn->query($sql);


                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        echo "Schools <br>";
                        echo '<input name="schools" type="text" value="'.$row['schools'].'" />';
                        echo "<br>No of Innovators<br><br>";
                        echo '<input name="innovators" type="text" value="'.$row['innovators'].'" />';
                        echo "<br>No of trainers<br><br>";
                        echo '<input name="trainers" type="text" value="'.$row['trainers'].'" />';
                        echo '<br>';


                    }
                }

                ?>








                <input type="submit" name="Submit form" />
            </form>


    </body>




</html>






