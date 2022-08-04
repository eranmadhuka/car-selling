<?php

include 'sqlcon.php'; //Database Connection

switch ($_POST['functionName']){

    case 'UPDATE' :
        $result = editvehicle($conn, $_POST);
        $response['success'] = ($result)? true : false;
        $response['data'] = $result;
        $response['msg'] = ($result) ? "data has benn Updated" : "Data has not been Updated";

        echo json_encode($response);
        break;

    case 'DELETE' :
        $result = DeleteVehicle($conn, $_POST);
        $response['success'] = ($result)? true : false;
        $response['data'] = $result;
        $response['msg'] = ($result) ? "data has benn Updated" : "Data has not been Updated";

        echo json_encode($response);
        break;
    

    default :
    $response['success'] = false;
    $response['msg'] = "System Error. Call Administator";
        echo json_encode($response);
}

function editvehicle($mysqlConn , $data){
    
    $sql = "UPDATE vehicles AS v
            SET v.`condition` = '".$data['isCondition']."',
                v.brand = '".$data['isBrand']."',
                v.vehicle_model = '".$data['isModel']."',
                v.year_manufactured = '".$data['isManufactured_Year']."',
                v.transmission = '".$data['isTransmission']."',
                v.fuel_type = '".$data['isFuel_Type']."',
                v.engine_capacity = '".$data['isEngine_Capacity']."',
                v.mileage = '".$data['isMileage']."',
                v.description ='".$data['isMessage']."' ,
                v.price = '".$data['isPrice']."',
                v.negotiable = '".$data['isNegotiable']."'
                
            WHERE v.vehicle_id = '".$data['isVehicle_ID']."' ";
    
 
    $query = $mysqlConn->query($sql);
    return $query;
}


function DeleteVehicle($mysqlConn , $data){
    $sql = "DELETE FROM `vehicles` WHERE '".$data['isVehicle_ID']."' ";
    
    $query = $mysqlConn->query($sql);
    return $query;
}


?>