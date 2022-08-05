<?php
session_start();

// var_dump($_SESSION['user']);
    if(!isset($_SESSION['user'])){
        // Not Session
        header('Location:index.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'header.php';
    ?>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top" style="background-color : #123652;">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">  

              <div class="account">
                <a href="#" class=" btn btn-sm" style="color: #fff; font-weight: 600;" data-bs-toggle="dropdown">
                  <?php echo "".$_SESSION['user']['u_name']; ?>
                </a>
                <img src="uploads/avatar/<?php echo "".$_SESSION['user']['photo']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 40px; height: 40px;">
              </div>
            </ul>
          </div>
        </div>
    </nav>


    <section class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="border shadow p-3 mb-5 bg-body rounded" style="position: sticky; top: 80px;">
                        <h3 class="border-bottom py-2">Dashboard</h3>
                        <ul class="py-3 fw-bold list-unstyled ">
                            <li class="py-3 border-bottom">
                                <a href="admin.php"><i class="fa-solid fa-gauge"></i> Dashboard </a>
                            </li>
                            <li class="py-3 border-bottom">
                                <a href="admin-vehicles.php"><i class="fa-solid fa-car"></i> Vehicles </a>
                            </li>
                            <li class="py-3 border-bottom db-active">
                                <a href="admin-users.php"><i class="fa-solid fa-user"></i> Users</a>
                            </li>
                            <li class="py-3">
                                <a href="loguot.php" style="color: red;"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-9 border shadow p-4 mb-5 bg-body rounded">
                <div class="row">
                    <div class="row mb-3">
                        <div class="col-lg-1">
                            <label class="col-form-label">Search: </label>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Search for Names..">
                        </div>
                    </div>
                        <table class="table table-hover table-bordered" id="myTable">
                            <tr>
                                <th>User Id</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                            <tbody id="user_Details">

                            </tbody>
                        </table>
                    </div>

                       
                        
                </div>
            </div>
        </div>
    </section>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form fw-bold" action="sql/sql_user.php" method="post">
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" id="txtEditUserId" name="txtEditUserId" value="<?php echo "".$_SESSION['user']['user_id']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Your Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="txtEditName" name="txtEditName" value="<?php echo "".$_SESSION['user']['u_name']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email :</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="txtEditEmail" name="txtEditEmail" value="<?php echo "".$_SESSION['user']['user_email']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Contact No :</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" id="txtEditTEL" name="txtEditTEL" value="<?php echo "".$_SESSION['user']['user_TEL']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Address :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="txtEditAddress" name="txtEditAddress" value="<?php echo "".$_SESSION['user']['user_address']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">City :</label>
                                <div class="col-sm-8">
                                    <select name="city" class="intext" style="width:264px;height:31px;" id="txtEditCity" name="txtEditCity">
                                        <option selected><?php echo "".$_SESSION['user']['user_city']; ?></option>
                                        <optgroup label="Colombo District">
                                            <option value="Colombo">Colombo</option>
                                            <option value="Dehiwala-Mount-Lavinia">Dehiwala-Mount-Lavinia</option>
                                            <option value="Moratuwa">Moratuwa</option>
                                            <option value="Kotte">Kotte</option>
                                            <option value="Battaramulla">Battaramulla</option>
                                            <option value="Maharagama">Maharagama</option>
                                            <option value="Kotikawatta">Kotikawatta</option>
                                            <option value="Kolonnawa">Kolonnawa</option>
                                            <option value="Keselwatta">Keselwatta</option>
                                            <option value="Homagama">Homagama</option>
                                            <option value="Mulleriyawa">Mulleriyawa</option>
                                            <option value="Kesbewa">Kesbewa</option>
                                            <option value="Avissawella">Avissawella</option>
                                            <option value="Kaduwela">Kaduwela</option>
                                            <option value="Boralesgamuwa">Boralesgamuwa</option>
                                            <option value="Piliyandala">Piliyandala</option>
                                            <option value="Nugegoda">Nugegoda</option>
                                            <option value="Nawala">Nawala</option>
                                            <option value="Padukka">Padukka</option>
                                            <option value="Kottawa">Kottawa</option>
                                            <option value="Pannipitiya">Pannipitiya</option>
                                            <option value="Malabe">Malabe</option>
                                            <option value="Hanwella">Hanwella</option>
                                        </optgroup>
                                        <optgroup label="Gampaha District">
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Negombo">Negombo</option>
                                            <option value="Katunayake">Katunayake</option>
                                            <option value="Hendala">Hendala</option>
                                            <option value="Welisara">Welisara</option>
                                            <option value="Ragama">Ragama</option>
                                            <option value="Kandana">Kandana</option>
                                            <option value="Ja-Ela">Ja-Ela</option>
                                            <option value="Wattala">Wattala</option>
                                            <option value="Kelaniya">Kelaniya</option>
                                            <option value="Peliyagoda">Peliyagoda</option>
                                            <option value="Minuwangoda">Minuwangoda</option>
                                            <option value="Kadawatha">Kadawatha</option>
                                            <option value="Dompe">Dompe</option>
                                            <option value="Divulapitiya">Divulapitiya</option>
                                            <option value="Nittambuwa">Nittambuwa</option>
                                            <option value="Mirigama">Mirigama</option>
                                            <option value="Kiribathgoda">Kiribathgoda</option>
                                            <option value="Veyangoda">Veyangoda</option>
                                            <option value="Ganemulla">Ganemulla</option>
                                        </optgroup>
                                        <optgroup label="Kandy District">
                                            <option value="Kandy">Kandy</option>
                                            <option value="Gampola">Gampola</option>
                                            <option value="Nawalapitiya">Nawalapitiya</option>
                                            <option value="Wattegama">Wattegama</option>
                                            <option value="Harispattuwa">Harispattuwa</option>
                                            <option value="Kadugannawa">Kadugannawa</option>
                                        </optgroup>
                                        <optgroup label="Kurunegala District">
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Kuliyapitiya">Kuliyapitiya</option>
                                            <option value="Polgahawela">Polgahawela</option>
                                            <option value="Pannala">Pannala</option>
                                        </optgroup>
                                        <optgroup label="Ratnapura District">
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Balangoda">Balangoda</option>
                                            <option value="Eheliyagoda">Eheliyagoda</option>
                                            <option value="Kalawana">Kalawana</option>
                                            <option value="Embilipitiya">Embilipitiya</option>
                                        </optgroup>
                                        <optgroup label="Kalutara District">
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Beruwala">Beruwala</option>
                                            <option value="Panadura">Panadura</option>
                                            <option value="Horana">Horana</option>
                                            <option value="Matugama">Matugama</option>
                                            <option value="Bandaragama">Bandaragama</option>
                                        </optgroup>
                                        <optgroup label="Puttalam District">
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Chilaw">Chilaw</option>
                                            <option value="Nattandiya">Nattandiya</option>
                                            <option value="Wennappuwa">Wennappuwa</option>
                                            <option value="Marawila">Marawila</option>
                                            <option value="Dankotuwa">Dankotuwa</option>
                                        </optgroup>
                                        <optgroup label="Kegalle District">
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Mawanella">Mawanella</option>
                                            <option value="Warakapola">Warakapola</option>
                                        </optgroup>
                                        <optgroup label="Matale District">
                                            <option value="Matale">Matale</option>
                                            <option value="Dambulla">Dambulla</option>
                                            <option value="Sigiriya">Sigiriya</option>
                                        </optgroup>
                                        <optgroup label="Badulla District">
                                            <option value="Badulla">Badulla</option>
                                            <option value="Bandarawela">Bandarawela</option>
                                            <option value="Haputale">Haputale</option>
                                            <option value="Welimada">Welimada</option>
                                            <option value="Mahiyanganaya">Mahiyanganaya</option>
                                        </optgroup>
                                        <optgroup label="Nuwara-Eliya District">
                                            <option value="Nuwara-Eliya">Nuwara-Eliya</option>
                                            <option value="Hatton">Hatton</option>
                                            <option value="Talawakele">Talawakele</option>
                                        </optgroup>
                                        <optgroup label="Galle District">
                                            <option value="Galle">Galle</option>
                                            <option value="Ambalangoda">Ambalangoda</option>
                                        </optgroup>
                                        <optgroup label="Matara District">
                                            <option value="Matara">Matara</option>
                                            <option value="Weligama">Weligama</option>
                                        </optgroup>
                                        <optgroup label="Hambantota District">
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Tangalle">Tangalle</option>
                                        </optgroup>
                                        <optgroup label="Batticaloa District">
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Kattankudy">Kattankudy</option>
                                            <option value="Eravur">Eravur</option>
                                        </optgroup>
                                        <optgroup label="Ampara District">
                                            <option value="Ampara">Ampara</option>
                                            <option value="Kalmunai">Kalmunai</option>
                                        </optgroup>
                                        <optgroup label="Jaffna District">
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Chavakacheri">Chavakacheri</option>
                                            <option value="Valvettithurai">Valvettithurai</option>
                                        </optgroup>
                                        <optgroup label="Anuradapura District">
                                            <option value="Anuradapura">Anuradapura</option>
                                        </optgroup>
                                        <optgroup label="Polonnaruwa District">
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                        </optgroup>
                                        <optgroup label="Moneragala District">
                                            <option value="Moneragala">Moneragala</option>
                                        </optgroup>
                                        <optgroup label="Trincomalee District">
                                            <option value="Trincomalee">Trincomalee</option>
                                        </optgroup>
                                        <optgroup label="Mannar District">
                                            <option value="Mannar">Mannar</option>
                                        </optgroup>
                                        <optgroup label="Vavuniya District">
                                            <option value="Vavuniya">Vavuniya</option>
                                        </optgroup>
                                        <optgroup label="Kilinochchi District">
                                            <option value="Kilinochchi">Kilinochchi</option>
                                        </optgroup>
                                        <optgroup label="Mullaitivu District">
                                            <option value="Mullaitivu">Mullaitivu</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="isUpdate()" id="btUpdate" value="Save changes">Save changes</button>
                        </form>
      </div>
      <!-- <div class="modal-footer">
        
      </div> -->
    </div>
  </div>
</div>

    <?php
        include 'footer.php';
    ?>

 

    <script type="text/javascript">
        
    $(document).ready(function(){
        getFulldta();
    });

function getFulldta(){
    
    
        $.ajax({
        type : "GET",
        url : "sql/ajax_detals.php",
        data : {functionName : 'FULLUSERDATA' },
        dataType : 'Json',
        success : function(res){
            console.log(res);
            if(res.success){
                var vData = res.data;
                var stHtml = "";
                for(var x = 0; x < vData.length ; x++ ){
                    stHtml += "<tr>";
                    stHtml += "<td>"+vData[x].user_id+"</td>";
                    stHtml += "<td><img src='uploads/avatar/"+vData[x].photo+"' style='width: 100%; height: 10vh; object-fit: cover;'></td>";
                    stHtml += "<td>"+vData[x].u_name+"</td>";
                    stHtml += "<td>"+vData[x].user_email+"</td>";
                    stHtml += "<td>"+vData[x].user_TEL+"</td>";
                    stHtml += "<td>"+vData[x].user_address+"</td>";
                    stHtml += "<td>"+vData[x].user_city+"</td>";
                    
                    stHtml += "<td>";
                        stHtml += "<button type='button' class='btn btn-primary btn-sm' title ='"+vData[x].user_id+"|"+vData[x].u_name+"|"+vData[x].user_email+"|"+vData[x].user_TEL+"|"+vData[x].user_address+"|"+vData[x].user_city+"' onclick='loadmodalData(title)' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fa-solid fa-pen-to-square'></i></button>";
                        stHtml += " <button type='button' class='btn btn-danger btn-sm' title ='"+vData[x].user_id+"' onclick='DeleteData(title)'><i class='fa fa-trash'></i></button> ";
                    stHtml +="</td>";
                    
                    stHtml += "</tr>";     
                }
                $("#user_Details").html(stHtml);
            }else{
                stHtml += "<h4>You currently have no vehicles saved in your account. Post Your First Add <a href='dashboard-post_ad.php' class='fs-4 text-warning'>Here</a></h4>";
         
                $("#user_Details").html(stHtml);  
            }
        }
    });
    }

    function loadmodalData(title){
        // alert(title);
        var t_array = title.split('|');
        $("#txtEditUserId").val(t_array[0]);
        $("#txtEditName").val(t_array[1]);
        $("#txtEditEmail").val(t_array[2]);
        $("#txtEditTEL").val(t_array[3]);
        $("#txtEditAddress").val(t_array[4]);
        $("#txtEditCity").val(t_array[5]);

}

function isUpdate(){
    var userid = document.getElementById('txtEditUserId').value;
    var userfullname = document.getElementById('txtEditName').value;
    var useremail = document.getElementById('txtEditEmail').value;
    var usertel = document.getElementById('txtEditTEL').value;
    var useraddress = document.getElementById('txtEditAddress').value;
    var usercity = document.getElementById('txtEditCity').value;
 
    var base_url = "http://localhost/Projects/car_selling/";
     
        $.ajax({
            type : "POST",
            url : 'sql/sql_user.php',
            data : {functionName : 'ADMINUSERUPDATE' , isuserid : userid, isuserfullname : userfullname , isuseremail : useremail , isusertel : usertel , isuseraddress : useraddress , isusercity : usercity} , 
            dataType : 'Json',
            success : function(res){
                // console.log(res);
                if(res.success){
                    alert(res.msg);
                    location.href = base_url+"admin-users.php";
                }else{
                    alert(res.msg);
                }
            }
        });  
      
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


    </script>

</body>
</html>

<?php

   }
?>

