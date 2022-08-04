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

        case 'DATAUPDATE' :
            $result = edituser($conn, $_POST);
            $response['success'] = ($result)? true : false;
            $response['data'] = $result;
            $response['msg'] = ($result) ? "data has benn Updated" : "Data has not been Updated";
    
            echo json_encode($response);
            break;

        case 'ADMINUSERUPDATE' :
            $result = Adminedituser($conn, $_POST);
            $response['success'] = ($result)? true : false;
            $response['data'] = $result;
            $response['msg'] = ($result) ? "data has benn Updated" : "Data has not been Updated";
    
            echo json_encode($response);
            break;

        case 'UPDATEPASSWORD' :
            $result = editPassword($conn, $_POST);
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


    function adduser($mysqlConn , $data){
        // return $data['txtName'];
        
        $sql = "INSERT INTO users (user_name,user_email,u_name,user_password)
                VALUES ('".$data['txtUserName']."','".$data['txtEmail']."','".$data['txtName']."',MD5('".$data['txtUserPassword']."'))";
    
        $query = mysqli_query($mysqlConn, $sql);
        return $query;
    }

    function edituser($mysqlConn , $data){
        $sql = "UPDATE users AS u
                SET  
                    u.user_name = '".$data['isusername']."',
                    u.user_email ='".$data['isuseremail']."',
                    u.u_name = '".$data['isuserfullname']."',
                    u.user_TEL = '".$data['isusertel']."',
                    u.user_address = '".$data['isuseraddress']."',
                    u.user_city = '".$data['isusercity']."'
                         
                WHERE u.user_id = '".$data['isuserid']."'";
    
        $query = $mysqlConn->query($sql);
        return $query;
    }

    function Adminedituser($mysqlConn , $data){
        $sql = "UPDATE users AS u
                SET  
                    u.user_email ='".$data['isuseremail']."',
                    u.u_name = '".$data['isuserfullname']."',
                    u.user_TEL = '".$data['isusertel']."',
                    u.user_address = '".$data['isuseraddress']."',
                    u.user_city = '".$data['isusercity']."'
                         
                WHERE u.user_id = '".$data['isuserid']."'";
    
        $query = $mysqlConn->query($sql);
        return $query;
    }

    function editPassword($mysqlConn , $data){
        $sql = "UPDATE users AS u
                SET  u.user_password = MD5('".$data['isuserpassword']."')
                WHERE u.user_id = '".$data['isPuserid']."'";
    
        $query = $mysqlConn->query($sql);
        return $query;
    }

    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
      
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[2];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
?>