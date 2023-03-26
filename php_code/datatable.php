<?php


    require 'dbcon.php';


    $data = array();

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
              ON u.`work_id` = w.`workID`";

      //$query = "SELECT * FROM users";

        $results = $con->query($query);
        while($r = mysqli_fetch_assoc($results)) {
          
            $dateFormatat = date("Y-m-d", strtotime(addslashes($r['created_at'])));

            $dt = array($r['id'], 
                        addslashes($r['name']), 
                        addslashes($r['email']), 
                        addslashes($r['phone']), 
                        addslashes($r['cnp']), 
                        addslashes($r['workName']), 
                        $dateFormatat, 
                        butoane($r['id']));

            array_push($data,$dt);
        }
        echo '{"data":'.json_encode($data).'}';





    function butoane($id){
      return  '<button row-id='.$id.' type="button" class="viewUserBtn btn btn-info">View</button> 
              <button row-id='.$id.' type="button" class="editUserBtn btn btn-success">Edit</button>
              <button row-id='.$id.' type="button" class="deleteUserBtn btn btn-danger">Delete</button>';
    }

?>
