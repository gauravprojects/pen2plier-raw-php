<?php

    include('connection.php');

    $machine= $_GET['machine'];
    $state= $_GET['state'];


    echo $state;
    echo "<br>";
    $t= time();

    $time_stamp=date('Y/m/d H:i:s',$t);

    echo "Machine ".$machine." is switched ".$state." at  ".date('m/d/Y H:i:s',$t);

    echo "<br>";

    // this is for previous state before action was taken

    $query_pre= 'SELECT * FROM state WHERE machine_name="'.$machine.'" ';
    $result_pre=  $conn->query($query_pre);

    $row=mysqli_fetch_array($result_pre,MYSQLI_ASSOC);


    echo "current state is ".$current_state= $row['state'];


    if($current_state==0 && $state==1)
    {

        echo "<br>Now the details need to be inserted";

        $query_insert= "INSERT INTO api(time_on,machine_name)
                      VALUES('$time_stamp','$machine') ";
        var_dump($query_insert);
        $query_result=$conn->query($query_insert);

    }



    if($current_state==1 && $state==1)
    {
        echo "<br>to be ignored";
    }

    if($current_state==1 && $state==0)
    {
       $query_update=' UPDATE api
            SET time_off="'.$time_stamp.'"
            WHERE machine_name="'.$machine.'"
       ';


        var_dump($query_update);

        $query_result=$conn->query($query_update);

        $query_post= 'SELECT * FROM api WHERE machine_name="'.$machine.'" ';
        $result_post=  $conn->query($query_post);

        $row_post=mysqli_fetch_array($result_post,MYSQLI_ASSOC);

        $time_off=$row_post['time_off'];
        $time_on= $row_post['time_on'];

        echo "<br>";
        echo "Machine was switched on on ".$time_on." and then it was switched off at ".$time_off;


    }

    if($current_state==0 && $state==0)
    {
        echo "<br>Ignore this part also";
    }



    echo "<br>";




    $query= 'UPDATE state
            SET state='.$state.'
            WHERE machine_name="'.$machine.'"' ;




    $result= $conn->query($query);



    $query_post= 'SELECT * FROM state WHERE machine_name="'.$machine.'" ';
    $result_post=  $conn->query($query_pre);

    $row_post=mysqli_fetch_array($result_post,MYSQLI_ASSOC);



    echo "Now state is ".$post_state= $row_post['state'];




?>