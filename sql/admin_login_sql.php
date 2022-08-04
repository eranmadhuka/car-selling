<?php
    
    session_start();

    include "sqlcon.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    
    // $sql = "SELECT * FROM users AS u  WHERE u.user_name = '".$username."' AND u.password = '".$password."'";
    $sql = "SELECT * FROM users AS u  WHERE u.user_name = '".$username."' AND u.user_password = MD5('".$password."') AND u.user_type = 'admin'";
    $query = mysqli_query($conn , $sql) or die(mysqli_error($conn));
    
    if(mysqli_num_rows($query) > 0){


        while($resalt = mysqli_fetch_assoc($query)){
            $array = [
                'user_name' => $resalt['user_name'],
                'user_id' => $resalt['user_id'],
                'user_email' => $resalt['user_email'],
                'u_name' => $resalt['u_name'],
                'user_TEL' => $resalt['user_TEL'],
                'user_address' => $resalt['user_address'],
                'user_city' => $resalt['user_city'],
                'user_status' => $resalt['user_status'],
                'photo' => $resalt['photo'],

            ];

            $_SESSION['user'] = $array;
            $_SESSION['sys_date'] = date('y-m-d');
        }
        
        echo json_encode (['success' => true, 'msg' => 'User Logged in successfully']);
    }else{
        echo json_encode (['success' => false, 'msg' => 'Username or Password Invalid']);
    }
?>
