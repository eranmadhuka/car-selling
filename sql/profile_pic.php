<?php

    include 'sqlcon.php'; // Database Connection

    $userId = $_POST['EditUserId']; 
    $photo = $_FILES['photo']['name'];  

    // Business Logic

    $dataFile = "../uploads/avatar/".basename($photo);
    $souseFile = $_FILES['photo']['tmp_name'];

    if(move_uploaded_file($souseFile, $dataFile)){

        // SQL QUERY
        $sql = "UPDATE users AS u 
                SET u.photo = '".$photo."'
                WHERE u.user_id = '".$userId."'";

        $query = mysqli_query($conn , $sql) or die(mysqli_error($conn));
        
        if($query){
            $msg = "Submit Successfully!";
            header('Location: ../dashboard-accountsetting.php?msg='.$msg);
        }else{
            $msg = "Submit Successfully!";
            header('Location: ../dashboard-accountsetting.php?error='.$errors);
        }      
    }else{
        $errors = "Error Uplode File";
        header('Location : ../dashboard-accountsetting.php?error='.$errors);
    }
?>