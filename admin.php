<?php
session_start();
include 'sql/sqlcon.php';

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
                            <li class="py-3 border-bottom db-active">
                                <a href="admin.php"><i class="fa-solid fa-gauge"></i> Dashboard </a>
                            </li>
                            <li class="py-3 border-bottom">
                                <a href="admin-vehicles.php"><i class="fa-solid fa-car"></i> Vehicles </a>
                            </li>
                            <li class="py-3 border-bottom">
                                <a href="admin-users.php"><i class="fa-solid fa-user"></i> Users</a>
                            </li>
                            <li class="py-3">
                                <a href="loguot.php" style="color: red;"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-9 border shadow p-4 mb-5 bg-body rounded">
                    <div class="py-2">
                        <h2>Overvew</h2>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <div class="col-lg-4 card bg-primary p-3 text-light">
                            <label> <i class="fa-solid fa-car"></i> Total Vehicles</label>
                            <?php

                                $sql = "SELECT user_id FROM  vehicles ORDER BY vehicle_id";
                                $dash_sql = mysqli_query($conn , $sql);

                                if($total_post = mysqli_num_rows($dash_sql)){
                                    echo '<h4 class="py-2 text-light">'.$total_post.'</h4>';
                                }else{
                                    echo '<h5 class="py-2 text-light">No Ads</h5>';
                                }
                            ?>
                        </div>
                        <div class="col-lg-4 card bg-success p-3 text-light">
                            <label> <i class="fa-solid fa-car"></i> Total Users</label>
                            <?php

                                $sql = "SELECT user_id FROM  users ORDER BY user_id";
                                $dash_sql = mysqli_query($conn , $sql);

                                if($total_post = mysqli_num_rows($dash_sql)){
                                    echo '<h4 class="py-2 text-light">'.$total_post.'</h4>';
                                }else{
                                    echo '<h5 class="py-2 text-light">No Ads</h5>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                                

    <?php
        include 'footer.php';
    ?>

</body>
</html>

<?php

   }
?>

