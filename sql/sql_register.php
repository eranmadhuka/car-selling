<?php

    include 'sqlcon.php'; // Database Connection

    switch ($_POST['functionName']){
        case 'CREATE' :
            $result = adduser($conn, $_POST);
            $response['success'] = ($result)? true : false;
            $response['data'] = $result;
            $response['msg'] = ($result) ? "data has benn Saved" : "Data has not been Saved";
    
            echo json_encode($response);
            break;
     
    default :
        $response['success'] = false;
        $response['msg'] = "System Error. Call Administator";
        echo json_encode($response);
    }


    function adduser($mysqlConn , $data){
        // return $data['txtName'];
        
        $sql = "INSERT INTO users (user_name,user_email,u_name,user_TEL,user_password)
                VALUES ('".$data['txtUserName']."','".$data['txtEmail']."','".$data['txtName']."','".$data['txtTel']."',MD5('".$data['txtUserPassword']."'))";
    
        $query = mysqli_query($mysqlConn, $sql);
        return $query;
    }

?>