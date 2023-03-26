<?php


    require 'dbcon.php';

     //DELETE A ROW FROM TABLE
     if(isset($_POST['delete_user']))
     {
         $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
 
         $query = "DELETE FROM users WHERE id = '$user_id'";
         $query_run = mysqli_query($con, $query);
 
         if($query_run)
         {
             $res = [
                 'status' => 200,
                 'message' => 'Userul a fost sters cu succes'
             ];
             echo json_encode($res);
             return false;
         }
         else
         {
             $res = [
                 'status' => 500,
                 'message' => 'Userul nu putut fi sters'
             ];
             echo json_encode($res);
             return false;
         }
     }

?>