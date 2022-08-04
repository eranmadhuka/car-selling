<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPJabbers.com | Free Car Dealer Website Template</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top" style="background-color : #123652;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-warning btn-sm"
                            style="color: #123652; font-weight: 600;">sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-xl-auto px-lg-4 text-center text-primary"><img class="img-fluid" width="500" src="assets/img/signup-img.jpg">
        </div>

        <div class="col-lg-7">
          <div class="card">
            <div class="card-header px-lg-5">
              <div class="card-heading">Signup Free Today</div>
            </div>
            <div class="card-body p-lg-5">
              <h3 class="mb-4">Register With <a href="index.html"><span class="fs-3" style="color: #ffc107;">WheelSpot</span></a> To Advertise Your Vehicle Free!</h3>
              <p class="text-muted text-sm mb-5">Items marked with * are required.</p>
              
              <form class="form" action="" method="post" id="fromregister">
              <input type="hidden" name="functionName" value="CREATE">
                <div class="form-floating mb-3">
                  <input class="form-control" type="text" name="txtUserName" id="txtUserName" placeholder="Enter Username" required>
                  <label>Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" type="text" name="txtName" id="txtName" placeholder="Enter Name" required>
                  <label>Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" type="email" name="txtEmail" id="txtEmail" placeholder="Enter Email" required>
                  <label>Email address</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" type="text" name="txtTel" id="txtTel" placeholder="Enter Contact Number" required>
                  <label>Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" type="password" name="txtUserPassword" id="txtUserPassword" placeholder="Password" required>
                  <label>Password</label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" name="agree" id="agree">
                  <label class="form-check-label" for="agree">I agree with the <a href="#">Terms & Conditions</a>.</label>
                </div>
                <div class="form-group">
                    <input type="reset" class="btn btn-primary" value="reset">
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
              </form>
            </div>
            <div class="card-footer px-lg-5 py-lg-4">
              <div class="text-sm text-muted">Already have an account? <a href="login.php">Login</a>.</div>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/img/logo/logo.png">
                        </div>
                        <p>
                            Adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad
                            minim veniam quis nostrud exercitationdolor sit amet cectetur adipisicing elit sed do
                            eiusmod tempor incididunt ut labore.
                        </p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Terms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                        <ul>
                            <li><span>Phone:</span><a href="#" class="fw-bold">+1 333 4040 5566</a></li>
                            <li><span>Email:</span><a href="#" class="fw-bold">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row sub-footer">
                <hr>
                <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                </p>
            </div>
        </div>
    </footer>


    <script src="assets/js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <script type="text/javascript">

 

$("#fromregister").submit(function(e){
    e.preventDefault();
    $.ajax({
        type : "POST",
        url : 'sql/sql_register.php',
        data : $("#fromregister").serialize(), 
        dataType : 'Json',
        success : function(res){
            console.log(res);
            if(res.success){
                alert(res.msg);
                $("#txtUserName").val('');
                $("#txtName").val('');
                $("#txtEmail").val('');
                $("#txtTel").val('');
                $("#txtUserPassword").val('');

                
            }else{
                alert(res.msg);
            }

        }
    });  

});

</script>
</body>

</html>
    
 
 
