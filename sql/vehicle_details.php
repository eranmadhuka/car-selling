<?php

include "sqlcon.php"; //Database Connection

switch ($_GET['functionName']){
    case 'ALLDATA' :
        $result = getAllData($conn , $_GET);
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


 

function getAllData($mysqlConn , $data){
      
    $sql = "SELECT * FROM vehicles
             INNER JOIN users
        ON vehicles.user_id = users.user_id;";

    $query = mysqli_query($mysqlConn, $sql);
    $r_array = [];

    while($res = mysqli_fetch_assoc($query)){
        array_push($r_array , $res);
    }
    return $r_array;
}

?>