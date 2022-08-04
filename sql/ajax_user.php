<?php

include 'sqlcon.php'; //Database Connection

switch ($_GET['functionName']){
    case 'ALLDATA' :
        $result = grtAllData($conn);
        $response['success'] = ($result)? true : false;
        $response['data'] = $result;
        $response['msg'] = ($result) ? "data has benn OK" : "Data has not been Error";

        echo json_encode($response);
        break;

    default :
    $response['success'] = false;
    $response['msg'] = "System Error. Call Administator";
        echo json_encode($response);
}

function grtAllData($mysqlConn){
      
    $sql = "SELECT  u.user_id,
                    u.user_name,
                    u.user_email,
                    u.u_name,
                    u.user_TEL,
                    u.user_address,
                    u.user_city

                from users AS u";

    $query = mysqli_query($mysqlConn, $sql);
    $r_array = [];

    while($res = mysqli_fetch_assoc($query)){
        array_push($r_array , $res);
    }
    return $r_array;
}

?>