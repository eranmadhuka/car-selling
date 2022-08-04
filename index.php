<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHEELSPOT| Car Dealer Website Template</title>

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
                        <a class="nav-link text-light" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="cars.php">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Contact Us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link text-light" href="register.php">Post Your Ad</a>
                    </li> 
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-warning btn-sm" style="color: #123652; font-weight: 600;">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header id="home"
        style="background: url('assets/img/main_banner.png');background-size: cover; background-repeat: no-repeat; background-position: center; height : 70vh;">
        <div class="container">
            <div class="row align-items-left"> 
                <div class="col-lg-8 col-xl-7 align-middle">
                    <div class="text-start" style="margin-top: 40%;">
                        <h5 class="w-bolder text-dark">Plan your trip now</h5>
                        <h1 class="mb-4" style="font-size: 60px;">Save <em style="color: #ffc107;"> big</em> with our car Sell & Rental</h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <button type="button" class="btn btn-warning border-3"><a href="#cars">Get Started</a> </button>
                            <button type="button" class="btn btn-outline-warning text-dark border-3"><a href="cars.php">Buy Car</a> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="cars">
        <div class="container">
            <div class="row">
                <div class="text-center align-items-center">
                    <div>
                        <span>Featured Cars</span>
                        <h2>New and Used Vehicles for<em style="color: #ffc107;"> Sale</em> in Sri Lanka.</h2>
                        <div class="py-2">
                            <p style="padding: 0 20%">Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore etdolore magna aliqua enim adinim ullamco laborisn nisi ut aliquip exea commodo eniam quis nostrud exercitation consequat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <span class="text-secondary"><i class="fa-solid fa-calendar-days fs-6"></i> 2022-07-30</span>
                                <button type="button" class="btn btn-info text-light btn-sm">Rent</button>
                            </div>
                            <h5 class="card-title">Mercedes-Benz (2019)</h5>
                            <img src="uploads/vehicles/fitted (3).jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-2 py-1">
                                <div class="col text-secondary"><i class="fa-solid fa-gauge fs-6"></i><span class="fw-bold"> 10000 km</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-location-dot fs-6"></i><span class="fw-bold"> Colombo</span></div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col text-secondary"><i class="fa fa-cog" aria-hidden="true"></i><span class="fw-bold"> 1300cc</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-gas-pump fs-6"></i><span class="fw-bold"> Petrol</span></div>
                            </div>
                            <hr>
                            <div class="row py-2 d-flex justify-content-between">
                                <div class="col-7"><h5><i class="fa-solid fa-rupee-sign fs-6"></i> 10000</h5></div>
                                <div class="col-5"><a href="cars.php" class="btn btn-danger btn-sm">More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <span class="text-secondary"><i class="fa-solid fa-calendar-days fs-6"></i> 2022-07-30</span>
                                <button type="button" class="btn btn-success text-light btn-sm">Sell</button>
                            </div>
                            <h5 class="card-title">Land-Rover Discovery (2010)</h5>
                            <img src="uploads/vehicles/fitted (7).jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-2 py-1">
                                <div class="col text-secondary"><i class="fa-solid fa-gauge fs-6"></i><span class="fw-bold"> 95000 km</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-location-dot fs-6"></i><span class="fw-bold"> Colombo</span></div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col text-secondary"><i class="fa fa-cog" aria-hidden="true"></i><span class="fw-bold"> 3000cc</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-gas-pump fs-6"></i><span class="fw-bold"> Diesel</span></div>
                            </div>
                            <hr>
                            <div class="row py-2 d-flex justify-content-between">
                                <div class="col-7"><h5><i class="fa-solid fa-rupee-sign fs-6"></i> 24000000</h5></div>
                                <div class="col-5"><a href="cars.php" class="btn btn-danger btn-sm">More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <span class="text-secondary"><i class="fa-solid fa-calendar-days fs-6"></i> 2022-07-30</span>
                                <button type="button" class="btn btn-success text-light btn-sm">Sell</button>
                            </div>
                            <h5 class="card-title">Toyota Prius X grade (2013)</h5>
                            <img src="uploads/vehicles/fitted (13).jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-2 py-1">
                                <div class="col text-secondary"><i class="fa-solid fa-gauge fs-6"></i><span class="fw-bold"> 90000 km</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-location-dot fs-6"></i><span class="fw-bold"> Ampara</span></div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col text-secondary"><i class="fa fa-cog" aria-hidden="true"></i><span class="fw-bold"> 1800cc</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-gas-pump fs-6"></i><span class="fw-bold"> Hybrid</span></div>
                            </div>
                            <hr>
                            <div class="row py-2 d-flex justify-content-between">
                                <div class="col-7"><h5><i class="fa-solid fa-rupee-sign fs-6"></i> 7850000</h5></div>
                                <div class="col-5"><a href="cars.php" class="btn btn-danger btn-sm">More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <span class="text-secondary"><i class="fa-solid fa-calendar-days fs-6"></i> 2022-07-30</span>
                                <button type="button" class="btn btn-success text-light btn-sm">Sell</button>
                            </div>
                            <h5 class="card-title">DFSK Glory 580 (2022)</h5>
                            <img src="uploads/vehicles/fitted (21).jpg" class="card-img-top" alt="Fissure in Sandstone" />
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-2 py-1">
                                <div class="col text-secondary"><i class="fa-solid fa-gauge fs-6"></i><span class="fw-bold"> 0 km</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-location-dot fs-6"></i><span class="fw-bold"> Vavuniya</span></div>
                            </div>
                            <div class="row row-cols-2">
                                <div class="col text-secondary"><i class="fa fa-cog" aria-hidden="true"></i><span class="fw-bold"> 1500cc</span></div>
                                <div class="col text-secondary"><i class="fa-solid fa-gas-pump fs-6"></i><span class="fw-bold"> Petrol</span></div>
                            </div>
                            <hr>
                            <div class="row py-2 d-flex justify-content-between">
                                <div class="col-7"><h5><i class="fa-solid fa-rupee-sign fs-6"></i> 10499999</h5></div>
                                <div class="col-5"><a href="cars.php" class="btn btn-danger btn-sm">More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5 d-flex justify-content-center">
                <a href="cars.php" class="btn btn-warning" style="width: 20%">Browse All</a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 text-left p-5">
                <h2><span>Our Only First Focus is to</span> <br> Provide <em style="color: #ffc107;">Best User Experience</em></h2>
                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore aet dolore magna aliqua. Ut enim ad minim veniam, quistai nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute iruretan
                dolor in reprehenderit in voluptate velitesse.</p>
                <div class="row row-cols-4 lh-1">
                    <div class="col-1"><img src="assets/img/icons/img-06.png"></div>
                    <div class="col"><h4>35,125</h4> <span>Happy Clients</span></div>
                    <div class="col-1"><img src="assets/img/icons/img-07.png"></div>
                    <div class="col"><h4>41,856</h4> <span>Vehicles For Sale</span></div>
                </div>
                <div class="row row-cols-4 py-3 lh-1">
                    <div class="col-1"><img src="assets/img/icons/img-08.png"></div>
                    <div class="col"><h4>12,556</h4> <span>Active Members</span></div>
                    <div class="col-1"><img src="assets/img/icons/img-04 (1).png"></div>
                    <div class="col"><h4>14,753</h4> <span>Cup of Coffee</span></div>
                </div>

            </div>
            <div class="col-lg-6">
                <img src="assets/img/icons/img-051.png"> 
            </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-5">
                    <form class="row g-3  ">
                        <h5>Let’s Start Talking on New Project</h5>
                        <div class="col-md-12">
                          <input type="text" class="form-control" id="" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-12">
                          <input type="email" class="form-control" id="" placeholder="Your Email" required>
                        </div>
                        <div class="col-12">
                            <div class="form-outline">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" required>
                                <p>Details I provided above are all real & correct and <a href="#">I agree wtih all the terms</a> </p>
                              </div>
                          </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-warning">Send Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 p-5">
                    <h5>Our Availability Details</h5>
                    <div class="p-3">
                        <div class="row py-4 border-top">
                            <div class="col-2"><img src="assets/img/icons/img-14.jpg" alt=""></div>
                            <div class="col-10">
                                <span>Our Voice Numbers</span>
                                <h4><a href="tel:0800-123-456-789"> 0800-123-456-789</a></h4>
                            </div>
                        </div>
                        <div class="row py-4 border-top">
                            <div class="col-2"><img src="assets/img/icons/img-15.jpg" alt=""></div>
                            <div class="col-10">
                                <span>Place Where We Located</span>
                                <address class="fw-bold">Office 33, 27 Colmore Row, Birmingham, England, B3 2EW</address>
                            </div>
                        </div>
                        <div class="row py-4 border-top">
                            <div class="col-2"><img src="assets/img/icons/img-16.jpg" alt=""></div>
                            <div class="col-10">
                                <span>Email Us If Its Easy For Yous</span>
                                <h4><a href="mailto:info@domainurl.com"> info@domainurl.com</a><a href="mailto:querry@domainurl.com"> querry@domainurl.com</a></h4>
                            </div>
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
                <p>Copyright © 2022 Company Name - Template by: <a href="#">Eran Madhuka</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>