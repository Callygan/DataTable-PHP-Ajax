<?php

    require 'dbcon.php';


    //INSERT IN TABLE
    if(isset($_POST['save_user']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $cnp = mysqli_real_escape_string($con, $_POST['cnp']);
        $work = mysqli_real_escape_string($con, $_POST['work']);

        if($name == NULL || $email == NULL || $phone == NULL || $cnp == NULL || $work == 0)
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
        $allowTypes = array('jpg','png','jpeg','gif','pdf','doc','docx','xls','xlsx');
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                $uploadedFile = $fileName; 

                // Insert user data into database
                $query = "INSERT INTO users (name, email, phone, cnp, file_name, work_id) 
                          VALUES ('$name', '$email', '$phone', '$cnp', '$uploadedFile', '$work')";
                $query_run = mysqli_query($con, $query);

                if($query_run)
                {
                    $res = [
                        'status' => 200,
                        'message' => 'Userul a fost creat cu succes'
                    ];
                    echo json_encode($res);
                    return false;
                }
                else
                {
                    $res = [
                        'status' => 500,
                        'message' => 'Userul nu a putut fi creat'
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