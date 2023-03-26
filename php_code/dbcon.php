<?php

    $con = mysqli_connect('localhost', 'root', '', 'testare');

    if($con -> connect_error){
        die("Connection failed: " . $con -> connect_error);
    }


?>