<?php


    require 'dbcon.php';
           
    

    //UPDATE IN TABLE
    if(isset($_POST['update_user']))
    {
        $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $cnp = mysqli_real_escape_string($con, $_POST['cnp']);
        $work = mysqli_real_escape_string($con, $_POST['work']);

        if($name == NULL || $email == NULL || $phone == NULL || $cnp == NULL || $work == NULL)
        {
            $res = [
                'status' => 422,
                'message' => 'Toate campurile sunt obligatorii'
            ];
            echo json_encode($res);
            return false;
        }

        // Upload file
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx','xls');
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                $uploadedFile = $fileName; 

                // Update user data in database
                $query = "UPDATE users SET name='$name', 
                                           email='$email', 
                                           phone='$phone', 
                                           cnp='$cnp', 
                                           file_name='$uploadedFile',
                                           work_id='$work'
                          WHERE id = '$user_id'";
                $query_run = mysqli_query($con, $query);

                if($query_run)
                {
                    $res = [
                        'status' => 200,
                        'message' => 'Userul a fost actualizat cu succes'
                    ];
                    echo json_encode($res);
                    return false;
                }
                else
                {
                    $res = [
                        'status' => 500,
                        'message' => 'Userul nu a putut fi actualizat'
                    ];
                    echo json_encode($res);
                    return false;
                }
            }else{
                $res = [
                    'status' => 501,
                    'message' => 'A aparut o eroare la incarcarea fisierului'
                ];
                echo json_encode($res);
                return false;
            }
        }else{
            $res = [
                'status' => 502,
                'message' => 'Tipul de fisier nu este acceptat'
            ];
            echo json_encode($res);
            return false;
        }
    }
?>
