<?php

    // connect database

    include 'sqlcon.php';

    // 1.connect FORM Data From Method in PHP

 
        $UserId = $_POST['txtUerId'];
        $Type = $_POST['txtType'];
        $condition = $_POST['txtCondition'];
        $brand = $_POST['txtBrand'];
        $model = $_POST['txtModel'];
        $manuYear = $_POST['txtManuYear'];
        $transmission = $_POST['txtTransmission'];
        $fuelType = $_POST['txtFuelType'];
        $engineCap = $_POST['txtEngineCapacity'];
        $mileage = $_POST['txtMileage'];
        $message = $_POST['txtMessage'];
        $price = $_POST['txtPrice'];

        $negotiable = $_POST['txtNegotiable'];
        $photo1 = $_FILES['vphoto1']['name']; 
        $photo2 = $_FILES['vPhoto2']['name']; 
        $photo3 = $_FILES['vPhoto3']['name']; 
        
    

        // Business Logic

        $dataFile1 = "../uploads/vehicles/".basename($photo1);
        $souseFile1 = $_FILES['vphoto1']['tmp_name'];

        $dataFile2 = "../uploads/vehicles/".basename($photo2);
        $souseFile2 = $_FILES['vPhoto2']['tmp_name'];

        $dataFile3 = "../uploads/vehicles/".basename($photo3);
        $souseFile3 = $_FILES['vPhoto3']['tmp_name'];

        if(move_uploaded_file($souseFile1, $dataFile1)){

            if(move_uploaded_file($souseFile2, $dataFile2)){

                if(move_uploaded_file($souseFile3, $dataFile3)){
                    $sql = "INSERT INTO vehicles ( `user_id`, `type`, `condition`, `brand`, `vehicle_model`, `year_manufactured`, `transmission`, `fuel_type`, `engine_capacity`, `mileage`, `description`, `price`, `negotiable`, `v_imege_1`,`v_imege_2`,`v_imege_3`, `entry_on` ) 
                    VALUES ('".$UserId."',
                            '".$Type."',
                            '".$condition."',
                            '".$brand."',
                            '".$model."',
                            '".$manuYear."',
                            '".$transmission."',
                            '".$fuelType."',
                            '".$engineCap."',
                            '".$mileage."',
                            '".$message."',
                            '".$price."',
                            '".$negotiable."',
                            '".$photo1."',
                            '".$photo2."',
                            '".$photo3."',
                            NOW())";

                    $query = mysqli_query($conn , $sql) or die(mysqli_error($conn));

                    if($query){
                        $msg = "Submit Successfully!";
                        header('Location: ../dashboard-post_ad.php?msg='.$msg);
                    }else{
                        $msg = "Submit Successfully!";
                        header('Location: ../dashboard-post_ad.php?error='.$errors);
                    }

                }
                
            } 
        }else{
            $errors = "Error Uplode File";
            header('Location : ../dashboard-post_ad.php?error='.$errors);
        }



?>