<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WHEELSPOT | Car Dealer Website Template</title>
        
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="register.php" class="btn btn-warning btn-sm"
                            style="color: #123652; font-weight: 600;">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <section>
    <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="col-lg-4">
          <div class="card">
            <div class="card-header p-3 bg-secondary d-flex justify-content-center">
              <img src="assets/img/logo/logo.png">
            </div>
            <div class="card-body p-lg-5">
              <h1 class="text-decoration-underline py-2">Log In</h1>
              <h5 class="mb-3">Admin Login</h5>

              <form action="" method="post" name="adminfrmlogin" id="adminfrmlogin">
                <div class="form-floating mb-3">
                  <input class="form-control" type="text" name="username" id="username" required>
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" type="password" name="password" id="password" required>
                  <label for="floatingPassword">Password</label>
                    <div class="text-danger">
                      <label id="errormsg"></label>
                    </div>
                </div>
                
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember">
                  <label class="form-check-label" for="remember">Remember me</label>
                  <a href="register.php" class="float-end">Forgot Password</a>
                </div>
                <button class="btn btn-primary" type="submit" style="width:100%;">Login</button>
              </form>

            </div>
            <div class="card-footer px-lg-5 py-lg-4">
              <div class="text-sm text-muted">Don't have an account? <a href="register.php">Register</a>.</div>
              <div class="text-sm text-dark">Cuntomer ? 👉<a href="login.php">Login</a></div>
            </div>
          </div>
         </div>

        

      </div>
    </div>
  </section>  

  <script src="assets/js/jquery-3.3.1.js" type="text/javascript" ></script>
  <script src="assets/js/bootstrap.js" type="text/javascript" ></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript" ></script>

  <script>
        var base_url = "http://localhost/Projects/car_selling/";
        
        $("#adminfrmlogin").submit(function(e){
            e.preventDefault();
            $.ajax({
                type : "POST" ,
                url : "sql/admin_login_sql.php" ,
                data : $("#adminfrmlogin").serialize(),
                dataType : "Json" ,
                success : function(res){
                    // console.log(res);
                    if(res.success == true){
                        location.href = base_url+"admin.php";
                    }else{
                        $("#errormsg").html(res.msg);
                        setTimeout(function(){
                            $("#errormsg").html("");
                        },3000);
                    }
                }
            });
        });
</script>

</body>
</html>