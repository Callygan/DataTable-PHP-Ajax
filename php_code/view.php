<?php


    require 'dbcon.php';


    //SHOW FROM TABLE
    if(isset($_GET['user_id']))
    {
        $user_id = mysqli_real_escape_string($con, $_GET['user_id']);

        $query = "SELECT 
              u.`id` AS id,
              u.`name` AS name,
              u.`email` AS email,
              u.`phone` AS phone,
              u.`cnp` AS cnp,
              w.`workName` AS workName,
              u.`created_at` AS created_at
          FROM `users` AS u
          INNER JOIN `works` AS w
          ON u.`work_id` = w.`workID` AND id='$user_id'";

        //$query = "SELECT * FROM users WHERE id='$user_id'";
        $query_run = mysqli_query($con, $query);


        if(mysqli_num_rows($query_run) == 1){
            
            $user = mysqli_fetch_array($query_run);
            $res = [
                'status' => 200,
                'message' => 'User preluat cu succes prin id',
                'data' => $user

            ];
            echo json_encode($res);
            return false;

        }
        else{
 
            $res = [
                'status' => 404,
                'message' => 'User ID nu este gasit'

            ];
            echo json_encode($res);
            return false;

        }
    }
?>