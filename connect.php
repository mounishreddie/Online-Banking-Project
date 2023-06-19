<?php
    $con=new mysqli('localhost','root','','bankproject');

    if(!$con){
        die(mysqli_error($con));
    }

?>