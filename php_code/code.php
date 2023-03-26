<?php

    //require 'dbcon.php';

    // //DELETE A ROW
    // if(isset($_POST['delete_user']))
    // {
    //     $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    //     $query = "DELETE FROM users WHERE id = '$user_id'";
    //     $query_run = mysqli_query($con, $query);

    //     if($query_run)
    //     {
    //         $res = [
    //             'status' => 200,
    //             'message' => 'Userul a fost sters cu succes'
    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }
    //     else
    //     {
    //         $res = [
    //             'status' => 500,
    //             'message' => 'Userul nu putut fi sters'
    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }
    // }

    // //UPDATE IN TABLE
    // if(isset($_POST['update_user']))
    // {
    //     $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    //     $name = mysqli_real_escape_string($con, $_POST['name']);
    //     $email = mysqli_real_escape_string($con, $_POST['email']);
    //     $phone = mysqli_real_escape_string($con, $_POST['phone']);
    //     $cnp = mysqli_real_escape_string($con, $_POST['cnp']);

    //     if($name == NULL || $email == NULL || $phone == NULL || $cnp == NULL)
    //     {
    //         $res = [
    //             'status' => 422,
    //             'message' => 'Toate campurile sunt obligatorii'
    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }

    //     // Upload file
    //     $targetDir = "uploads/";
    //     $fileName = basename($_FILES["file"]["name"]);
    //     $targetFilePath = $targetDir . $fileName;
    //     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    //     $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx','xls');
    //     if(in_array($fileType, $allowTypes)){
    //         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
    //             $uploadedFile = $fileName; 

    //             // Update user data in database
    //             $query = "UPDATE users SET name='$name', email='$email', phone='$phone', cnp='$cnp', file_name='$uploadedFile' 
    //                         WHERE id = '$user_id'";
    //             $query_run = mysqli_query($con, $query);

    //             if($query_run)
    //             {
    //                 $res = [
    //                     'status' => 200,
    //                     'message' => 'Userul a fost actualizat cu succes'
    //                 ];
    //                 echo json_encode($res);
    //                 return false;
    //             }
    //             else
    //             {
    //                 $res = [
    //                     'status' => 500,
    //                     'message' => 'Userul nu a putut fi actualizat'
    //                 ];
    //                 echo json_encode($res);
    //                 return false;
    //             }
    //         }else{
    //             $res = [
    //                 'status' => 501,
    //                 'message' => 'A aparut o eroare la incarcarea fisierului'
    //             ];
    //             echo json_encode($res);
    //             return false;
    //         }
    //     }else{
    //         $res = [
    //             'status' => 502,
    //             'message' => 'Tipul de fisier nu este acceptat'
    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }
    // }



    // //SHOW FROM TABLE
    // if(isset($_GET['user_id']))
    // {
    //     $user_id = mysqli_real_escape_string($con, $_GET['user_id']);

    //     $query = "SELECT * FROM users WHERE id='$user_id'";
    //     $query_run = mysqli_query($con, $query);


    //     if(mysqli_num_rows($query_run) == 1){
            
    //         $user = mysqli_fetch_array($query_run);
    //         $res = [
    //             'status' => 200,
    //             'message' => 'User preluat cu succes prin id',
    //             'data' => $user

    //         ];
    //         echo json_encode($res);
    //         return false;

    //     }
    //     else{
 
    //         $res = [
    //             'status' => 404,
    //             'message' => 'User ID nu este gasit'

    //         ];
    //         echo json_encode($res);
    //         return false;

    //     }
    // }



    // //INSERT IN TABLE
    // if(isset($_POST['save_user']))
    // {
    //     $name = mysqli_real_escape_string($con, $_POST['name']);
    //     $email = mysqli_real_escape_string($con, $_POST['email']);
    //     $phone = mysqli_real_escape_string($con, $_POST['phone']);
    //     $cnp = mysqli_real_escape_string($con, $_POST['cnp']);

    //     if($name == NULL || $email == NULL || $phone == NULL || $cnp == NULL)
    //     {
    //         $res = [
    //             'status' => 422,
    //             'message' => 'Toate campurile sunt obligatorii'

    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }

    //     // Upload file
    //     $targetDir = "uploads/";
    //     $fileName = basename($_FILES["file"]["name"]);
    //     $targetFilePath = $targetDir . $fileName;
    //     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    //     $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx','xls','xlsx');
    //     if(in_array($fileType, $allowTypes)){
    //         if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
    //             $uploadedFile = $fileName; 

    //             // Insert user data into database
    //             $query = "INSERT INTO users (name, email, phone, cnp, file_name) VALUES ('$name', '$email', '$phone', '$cnp', '$uploadedFile')";
    //             $query_run = mysqli_query($con, $query);

    //             if($query_run)
    //             {
    //                 $res = [
    //                     'status' => 200,
    //                     'message' => 'Userul a fost creat cu succes'
    //                 ];
    //                 echo json_encode($res);
    //                 return false;
    //             }
    //             else
    //             {
    //                 $res = [
    //                     'status' => 500,
    //                     'message' => 'Userul nu a putut fi creat'
    //                 ];
    //                 echo json_encode($res);
    //                 return false;
    //             }
    //         }else{
    //             $res = [
    //                 'status' => 501,
    //                 'message' => 'A aparut o eroare la incarcarea fisierului'
    //             ];
    //             echo json_encode($res);
    //             return false;
    //         }
    //     }else{
    //         $res = [
    //             'status' => 502,
    //             'message' => 'Tipul de fisier nu este acceptat'
    //         ];
    //         echo json_encode($res);
    //         return false;
    //     }
    // }

?>



