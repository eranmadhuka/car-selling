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
    
    <?php
        include 'menu.php';
    ?>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-4">
          <div class="card-body text-center">
          <img src="uploads/avatar/<?php echo "".$_SESSION['user']['photo']; ?>" alt="avatar" class="rounded-circle img-thumbnail" style="width: 150px; height: 150px;">
            <h5 class="my-3"><?php echo "".$_SESSION['user']['u_name']; ?></h5>

            <form action="sql/profile_pic.php" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                    <input type="hidden" class="form-control" id="EditUserId" name="EditUserId" value="<?php echo "".$_SESSION['user']['user_id']; ?>">
                    <input class="form-control form-control-sm" type="file" id="photo" name="photo">                
                </div>  
                <div class="col-sm-12 py-3">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save Changess"/>
                </div>                           
            </form>
            
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        
      </div> -->
    </div>
  </div>
</div>



<section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="border shadow p-3 mb-5 bg-body rounded" style="position: sticky; top: 80px;">
                        <h3 class="border-bottom py-2">Dashboard</h3>
                        <ul class="py-3 fw-bold list-unstyled ">
                            <li class="py-3 border-bottom">
                                <a href="dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard </a>
                            </li>
                            <li class="py-3 border-bottom db-active">
                                <a href="dashboard-accountsetting.php"><i class="fa-solid fa-user"></i> Account Settings </a>
                            </li>
                            <li class="py-3 border-bottom">
                                <a href="dashboard-post_ad.php"><i class="fa-solid fa-rectangle-ad"></i> Post Ad</a>
                            </li>
                            <li class="py-3 border-bottom">
                                <a href="dashboard-my_ads.php"><i class="fa-solid fa-book-bookmark"></i> My Ads</a>
                            </li>
                            <li class="py-3">
                                <a href="loguot.php" style="color: red;"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-7 border shadow p-4 mb-5 bg-body rounded">
                    <div class="py-3">

                    <?php
                        if (isset($_GET['error'])){
                            echo '<div class="alert alert-danger">';
                            echo $_GET['error'];
                            echo '</div>';
                        }
                        ?>

                        <?php
                        if (isset($_GET['msg'])){
                            echo '<div class="alert alert-success">';
                            echo $_GET['msg'];
                            echo '</div>';
                        }
                    ?>


                        <h2>Account Settings</h2>
                        <span>Click “Update Now” to update latest changes</span>
                    </div>
                        <form class="form fw-bold" action="sql/sql_user.php" method="post">
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" id="txtEditUserId" name="txtEditUserId" value="<?php echo "".$_SESSION['user']['user_id']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Choose Username :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="txtEditUserName" name="txtEditUserName" value="<?php echo "".$_SESSION['user']['user_name']; ?>">
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
                        <hr>
                        <div class="row mb-3">
                                <label class="col-sm-3 fw-bold fs-5">Change Profile Picture</label>
                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <div class="card-body text-center">
                                            <img src="uploads/avatar/<?php echo "".$_SESSION['user']['photo']; ?>" alt="avatar"
                                            class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
                                            <h5 class="my-3"><?php echo "".$_SESSION['user']['u_name']; ?></h5>
                                            <div class="d-flex justify-content-center mb-2">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Upload Profile Picture
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                        <form class="form fw-bold" action="sql/sql_user.php" method="post">
                        <h5>Change Password</h5>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" id="PassUserEditId" name="PassUserEditId" value="<?php echo "".$_SESSION['user']['user_id']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword5" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" id="txtEditPassword" name="txtEditPassword" aria-describedby="passwordHelpBlock">
                                    <div id="passwordHelpBlock" class="fw-lighter text-danger lh-sm">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain spaces, special characters, or emoji.
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <button type="button" class="btn btn-primary" onclick="isUpdatePass()">Update Password</button>
                                </div>
                            </div>
                        </form>
                        
                </div>
            </div>
        </div>
    </section>

 
 

    <?php
        include 'footer.php';
    ?>

    <script type="text/javascript">
 

 function isUpdate(){
    var userid = document.getElementById('txtEditUserId').value;
    var username = document.getElementById('txtEditUserName').value;
    var userfullname = document.getElementById('txtEditName').value;
    var useremail = document.getElementById('txtEditEmail').value;
    var userpassword = document.getElementById('txtEditPassword').value;
    var usertel = document.getElementById('txtEditTEL').value;
    var useraddress = document.getElementById('txtEditAddress').value;
    var usercity = document.getElementById('txtEditCity').value;
 
    // var userid       = $("#txtEditUserId").val();
    // var username     = $("#txtEditUserName").val();
    // var userfullname = $("#txtEditName").val();
    // var useremail    = $("#txtEditEmail").val();
    // var userpassword = $("#txtEditPassword").val();
    // var usertel      = $("#txtEditTEL").val();
    // var useraddress  = $("#txtEditAddress").val();
    // var usercity     = $("#txtEditCity").val();
 
    var base_url = "http://localhost/Projects/car_selling/";
     
        $.ajax({
            type : "POST",
            url : 'sql/sql_user.php',
            data : {functionName : 'DATAUPDATE' , isuserid : userid, isusername : username , isuserfullname : userfullname , isuseremail : useremail , isuserpassword : userpassword , isusertel : usertel , isuseraddress : useraddress , isusercity : usercity} , 
            dataType : 'Json',
            success : function(res){
                // console.log(res);
                if(res.success){
                    alert(res.msg);
                    location.href = base_url+"dashboard-accountsetting.php";
                }else{
                    alert(res.msg);
                }
            }
        });  
      
 }

 function isUpdatePass(){
    var Puserid = document.getElementById('PassUserEditId').value;
    var userpassword = document.getElementById('txtEditPassword').value;
 
    var base_url = "http://localhost/Projects/car_selling/";
     
        $.ajax({
            type : "POST",
            url : 'sql/sql_user.php',
            data : {functionName : 'UPDATEPASSWORD' , isPuserid : Puserid, isuserpassword : userpassword } , 
            dataType : 'Json',
            success : function(res){
                // console.log(res);
                if(res.success){
                    alert(res.msg);
                    location.href = base_url+"dashboard-accountsetting.php";
                }else{
                    alert(res.msg);
                }
            }
        });  
      
 }

    </script>

</body>
</html>

<?php

   }
?>

