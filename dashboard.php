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
    
    <?php
        include 'menu.php';
    ?>

<section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="border shadow p-3 mb-5 bg-body rounded">
                        <h4 class="border-bottom py-2">Dashboard</h4>
                        <div>
                            <ul class="py-3 fw-bold list-unstyled ">
                                <li class="py-3 border-bottom db-active">
                                    <a href="dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard </a>
                                </li>
                                <li class="py-3 border-bottom">
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
                </div>
                <div class="col-lg-9 border shadow p-4 mb-5 bg-body rounded">
                    <div class="py-2">
                        <h2>Overvew</h2>
                        <input type="hidden" class="form-control" id="txtUerId" name="txtUerId" value="<?php echo "".$_SESSION['user']['user_id']; ?>" >
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 card bg-primary p-3 text-light">
                            <label> <i class="fa-solid fa-car"></i> Total Vehicles</label>
                            <?php

                                $sql = "SELECT user_id FROM  vehicles WHERE user_id = ".$_SESSION['user']['user_id'];" ORDER BY user_id";
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

