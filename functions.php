<?php

    include('connection.php');
    function get_current_state($machine)
    {
        $query_pre= 'SELECT * FROM state WHERE machine_name="'.$machine.'" ';
        $result_pre= $conn->query($query_pre);

        $row=mysqli_fetch_array($result_pre,MYSQLI_ASSOC);


        echo "current state is ".$current_state= $row['state'];
    }
?>