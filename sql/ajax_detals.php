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

    case 'FULLDATA' :
        $result = getFulldata($conn , $_GET);
        $response['success'] = ($result)? true : false;
        $response['data'] = $result;
        $response['msg'] = ($result) ? "data has benn OK" : "Data has not been Error";
    
        echo json_encode($response);
        break;

    case 'FULLUSERDATA' :
        $result = userfulldata($conn , $_GET);
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
      
    $sql = "SELECT  v.vehicle_id,
                    v.`condition`,
                    v.brand,
                    v.vehicle_model,
                    v.year_manufactured,
                    v.transmission,
                    v.fuel_type,
                    v.engine_capacity,
                    v.mileage,
                    v.description,
                    v.price,
                    v.negotiable,
                    v.v_imege_1,
                    v.v_imege_2,
                    v.v_status,
                    v.entry_on

                FROM vehicles AS v WHERE user_id = '".$data['isUser_ID']."'";

    $query = mysqli_query($mysqlConn, $sql);
    $r_array = [];

    while($res = mysqli_fetch_assoc($query)){
        array_push($r_array , $res);
    }
    return $r_array;
}

function getFulldata($mysqlConn , $data){
      
    $sql = "SELECT * FROM vehicles ";

    $query = mysqli_query($mysqlConn, $sql);
    $r_array = [];

    while($res = mysqli_fetch_assoc($query)){
        array_push($r_array , $res);
    }
    return $r_array;
}

function userfulldata($mysqlConn , $data){
      
    $sql = "SELECT * FROM users ";

    $query = mysqli_query($mysqlConn, $sql);
    $r_array = [];

    while($res = mysqli_fetch_assoc($query)){
        array_push($r_array , $res);
    }
    return $r_array;
}


?>