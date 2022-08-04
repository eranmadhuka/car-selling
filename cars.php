<?php

include('sql/sqlcon.php');

?>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <form class="form-inline p-1">
                        <input class="form-control mr-sm-2" id="filter" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
                    </form>
                    <div id="car_card" style="display:flex; flex-wrap: wrap; justify-content: between; "></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container rounded" style="background: #eef5ff">
            <div class="row">
                <div class="col-lg-5 p-2"><img src="assets/img/icons/bg-img-1.png" class="img-fluid"></div>
                <div class="col-lg-6 text-center align-middle p-3 py-4">
                    <img src="assets/img/icons/car.jpg"  class="img-fluid">
                    <h5 class="p-2">I Want To Sale My Vehicle</h5>
                    <p>Consectetur adipisicing elit sedatam eiusmod tempor incididunt ut labore etnalok dolore magna aliqua enim minim sed do eiusmod</p>
                    <a href="register.php" class="btn btn-warning fw-bold">Let's Do This</a>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="row">
                <h5>Purchasing Vehicles Safety</h5>
                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ut perspiciatis unde.</p>
            </div>
            <div class="row py-4">
                <div class="col-lg-8">
                    <h5>Checking Security Precautions</h5>
                    <p>
                    Domnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaqueipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enimnation ipsam voluptatem quia voluptas sit aspernatur.
                    </p>
                    <ul>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Aut odit aut fugit sed quia consequuntur magni</li>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Dolores eos quistan miki ratione voluptatem sequi nesciuntiu</li>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</li>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Consectetur adipisci velite sed quia none numquam</li>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Aut odit aut fugit sed quia consequuntur magni</li>
                        <li><i class="fa-solid fa-check" style="color:#3cd594"></i> Deius modi tempora incidunt utnalo labore</li>
                    </ul>
                </div>
                <div class="col-lg-4"><img src="assets/img/tram.jpg" class="img-fluid"></div>
            </div>
            <div class="row">
                <h5>Professional Advice</h5>
                <p>
                Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
      <div class="d-flex justify-content-end">
          <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

      <section>
        <div class="container border p-3 bg-light">
            <div class="row">
                <div class="col-lg-8">
                    <address class="fst-italic" style="font-size: 14px; color: #777;"><i class="fa fa-map-marker" aria-hidden="true"></i> <span id="user_city"></span></address>
                    <h2><span id="Brand"></span> <span id="Model"></span> <span id="year1"></span></h2>
                
                    <ul class="list-inline py-1" style="font-size: 14px; color: #777;">
                        <li class="list-inline-item">
                            <span><i class="fa fa-eye" aria-hidden="true"></i> 15,063 Viewed</span>
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-bookmark-o" aria-hidden="true"></i> ID: <span id="vehicle_id"></span></span>
                        </li>
                        <li class="list-inline-item">
                            <span><i class="fa fa-refresh" aria-hidden="true"></i> Add To Compare</span>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="wo-reportvehicle"><i class="fa fa-exclamation" aria-hidden="true"></i> Report now</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> Share Post</a>
                        </li>
                    </ul>
                    
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                          <div class="carousel-item active">
                                <div id="car_img_1" class="img-thumbnail"></div>
                          </div>
                          <div class="carousel-item">
                                <div id="car_img_2" class="img-thumbnail"></div>                          
                          </div>
                          <div class="carousel-item">
                                <div id="car_img_3" class="img-thumbnail"></div> 
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
    
                    <ul class="list-inline d-flex justify-content-center py-3 car-details">
                        <li class="list-inline-item text-center px-3 border-end">
                            <img src="assets/img/icons/img-01.png" style="width: 25px;">
                            <h5 id="year2"></h5>
                            <span>Model Year</span>
                        </li>
                        <li class="list-inline-item text-center px-3 border-end">
                            <img src="assets/img/icons/img-02.png" style="width: 25px;">
                            <h5 id="Mileage"></h5>
                            <span>Total Drived(km)</span>
                        </li>
                        <li class="list-inline-item text-center px-3 border-end">
                            <img src="assets/img/icons/img-03.png" style="width: 25px;">
                            <h5 id="Fuel_type"></h5>
                            <span>Fuel Type</span>
                        </li>
                        <li class="list-inline-item text-center px-3 border-end">
                            <img src="assets/img/icons/img-04.png" style="width: 25px;">
                            <h5 id="Transmission"></h5>
                            <span>Transmission</span>
                        </li>
                        <li class="list-inline-item text-center px-3">
                            <img src="assets/img/icons/img-05.png" style="width: 25px;">
                            <h5 id="Engine_capacity"> </h5>
                            <span>Engine Capacity(cc)</span>
                        </li>
                    </ul>
    
                    <hr>
    
                    <div class="py-4">
                        <h4>Vehicle Main Features</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6"><table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Condition</th>
                                    <td id="condition"></td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td id="Brand_1"></td>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <td id="Model_1"></td>
                                </tr>
                                <tr>
                                <th>Engine Capacity(cc)</th>
                                    <td id="Engine_capacity_1"></td>
                                </tr>
                            </tbody>
                        </table></div>
                            <div class="col-lg-6 col-sm-6"><table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Mileage(km)</th>
                                    <td id="Mileage_1"></td>
                                </tr>
                                <tr>
                                    <th>Fuel Type</th>
                                    <td id="Fuel_type_1"></td>
                                </tr>
                                <tr>
                                    <th>Gearbox</th>
                                    <td id="Transmission_1"></td>
                                </tr>
                                <tr>
                                    <th>Manufactured Year</th>
                                    <td id="year3"></td>
                                </tr>
                            </tbody>
                        </table></div>
                        </div>
                    </div>
    
                    <div class="py-4">
                        <h4>Vehicle Description</h4>
                        <p id="Description"></p>

                    </div>
    
                    <div class="p-4 border rounded">
                        <div class="py-2">
                            <img src="assets/img/icons/img-01.jpg">
                        </div>
                        <div class="wo-sinstruction__content">
                            <h4>Safty Instruction:</h4>
                            <p>Deserunt mollit anim “<em>aperspiciatis unde omnis natusta error auptatem</em> ” acaentium enim ad minimiums</p>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Doque etiame enim ipsam voluptatem</li>
                                <li><i class="fa-solid fa-check"></i> Quia quasi explicabo voluptas spernatur sit amet consectetur adipisicing</li>
                                <li><i class="fa-solid fa-check"></i> Eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="border rounded">
                        <div class="col-md-12 align-middle rounded p-1 text-center" style="background-color: #3cd594;">
                            <h5 style="color: #fff; margin-top: 10px;">Vehicle Asking Price</h5>
                        </div>
                        <div class="p-3 text-center">
                            <strong class="fs-2"><sup><i class="fa-solid fa-rupee-sign"></i></sup><span id="Price"></span></strong><br>
                            <span class="fs-6 fst-italic" id="Negotiable"></span>
                        </div>
                        <div class="py-4">
                            <div class="mx-auto rounded p-3" style="width: 300px; background-color: #eef5ff; line-height: 10px;">
                                <label>Phone: </label>
                                <a href="tel:+4733378901" class="fw-bold">  <span id="user_TEL"></span></a>
                            </div>
                            <div class="mx-auto rounded p-3" style="width: 300px; background-color: #ebfbf4; line-height: 10px; margin-top: 20px;">
                                <label>Email: </label>
                                <a href="tel:+4733378901" class="fw-bold"><span id="user_email"></span></a>
                            </div>
                        </div>
                        <ul> 
                            <li class="border-top p-3">
                                <strong>Type :</strong>
                                <button class="btn btn-outline-primary btn-sm" id="type"></button>
                            </li>
                            <li class="border-top p-3">
                                <strong>Name :</strong>
                                <span id="Name"></span>
                            </li>
                            <li class="border-top p-3">
                                <strong>Address :</strong>
                                <span id="user_address"></span>
                            </li>
                            <li class="border-top p-2 ms-auto text-center">
                                <div class="row" style="font-size: 13px;">
                                    <div class="col">
                                        <img src="assets/img/icons/img-02.jpg">
                                        <h6>Phone No.</h6>
                                        <span>verified</span>
                                    </div>
                                    <div class="col">
                                        <img src="assets/img/icons/img-03.jpg">
                                        <h6>Email ID</h6>
                                        <span>verified</span>
                                    </div>
                                    <div class="col">
                                        <img src="assets/img/icons/img-04.jpg">
                                        <h6>Social ID</h6>
                                        <span>not linked</span>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
        </div>
    </section>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about">
                            <div class="logo">
                                <img src="assets/img/logo/logo.png">
                            </div>
                            <p>
                                Adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitationdolor sit amet cectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.
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
                            <p><i class="fa fa-map-marker"></i>  212 Barrington Court New York, ABC</p>
                            <ul>
                                <li><span>Phone:</span><a href="#" class="fw-bold">+1 333 4040 5566</a></li>
                                <li><span>Email:</span><a href="#" class="fw-bold">contact@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row sub-footer">
                    <hr>
                    <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                </div>
            </div>
        </footer>
 

    <script src="assets/js/jquery-3.3.1.js" type="text/javascript" ></script>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script type="text/javascript">

    
    $(document).ready(function (){
        getAllData();
    });

 function getAllData(){
        $.ajax({
        type : "GET",
        url : "sql/vehicle_details.php",
        data : {functionName : 'ALLDATA'},
        dataType : 'Json',
        success : function(res){
            console.log(res);
            var data = res.data;

            if(res.success){
                var cData = res.data;
                var stHtml = "";
                for(var x = 0; x < cData.length ; x++ ){

                stHtml += "<div class='col-lg-3 col-sm-7 col-xs-6'>";
                    stHtml += "<div class='v_card' style='padding: 10px;'>";
                        stHtml += "<div class='p-1'>";
                            stHtml += "<div class='d-flex justify-content-between'>";
                                stHtml += "<span class='text-secondary'><i class='fa-solid fa-calendar-days fs-6 px-1'></i>"+cData[x].entry_on+"</span>";
                                if(cData[x].type == 'Sell'){
                                    stHtml += "<button type='button' class='btn btn-sm fw-bold text-light' style='background:#3cd594;'>"+cData[x].type+"</button>";
                                }else{
                                    stHtml += "<button type='button' class='btn btn-primary btn-sm fw-bold' style='background:#3498db;'>"+cData[x].type+"</button>";
                                }
                            stHtml += "</div>";
                            stHtml += "<h5 class='card-title'>"+cData[x].brand+" "+cData[x].vehicle_model+" ("+cData[x].year_manufactured+")</h5>";
                            stHtml += "<img src='uploads/vehicles/"+cData[x].v_imege_1+"' class='card-img-top'>";
                        stHtml += "</div>";
                        stHtml += "<div class='card-body'>";
                            stHtml += "<div class='row row-cols-2 py-1'>";   
                                stHtml += "<div class='col text-secondary'><i class='fa-solid fa-gauge fs-6'></i><span class='fw-bold'> "+cData[x].mileage+"</span></div>";
                                stHtml += "<div class='col text-secondary'><i class='fa-solid fa-location-dot fs-6'></i><span class='fw-bold'> "+cData[x].user_city+"</span></div>";
                            stHtml += "</div>";
                            stHtml += "<div class='row row-cols-2'>";   
                                stHtml += "<div class='col text-secondary'><span class='fw-bold'><i class='fa fa-cog' aria-hidden='true'></i>" +cData[x].engine_capacity+" cc</span></div>";
                                stHtml += "<div class='col text-secondary'><i class='fa-solid fa-gas-pump fs-6'></i><span class='fw-bold'> "+cData[x].transmission+"</span></div>";
                            stHtml += "</div>";
                            stHtml += "<hr>";
                            stHtml += "<div class='row d-flex justify-content-between'>";
                                stHtml += "<div class='col-6'><h5><i class='fa-solid fa-rupee-sign fs-6'></i> "+cData[x].price+"</h5></div>";
                                stHtml += "<div class='col-6'><button type='button' class='btn btn-outline-danger btn-sm' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='loadModalData("+x+")'>View More</button></div>";
                            stHtml += "</div>";
                        stHtml += "</div>"
                    stHtml += "</div>"
                stHtml += "</div>"
    
                }
                $("#car_card").html(stHtml);
            }
         
        }
    });
}

function loadModalData(y){
    $.ajax({
        type : "GET",
        url : "sql/vehicle_details.php",
        data : {functionName : 'ALLDATA'},
        dataType : 'Json',
        success : function(resalt){
             console.log(resalt.data);
            var car = resalt.data[y];
            console.log(car);

            // Vehicle Details
            $("#vehicle_id ").html(car.vehicle_id );
            $("#condition ").html(car.condition );
            $("#Brand").html(car.brand);
            $("#Brand_1").html(car.brand);
            $("#Model").html(car.vehicle_model);
            $("#Model_1").html(car.vehicle_model);
            $("#year1").html(car.year_manufactured);
            $("#year2").html(car.year_manufactured);
            $("#year3").html(car.year_manufactured);
            $("#Transmission").html(car.transmission);
            $("#Transmission_1").html(car.transmission);
            $("#Fuel_type").html(car.fuel_type);
            $("#Fuel_type_1").html(car.fuel_type);
            $("#Engine_capacity").html(car.	engine_capacity);
            $("#Engine_capacity_1").html(car.	engine_capacity);
            $("#Mileage").html(car.mileage);
            $("#Mileage_1").html(car.mileage);
            $("#Description").html(car.description);
            $("#Price").html(car.price);
            $("#Negotiable").html(car.negotiable);
            $("#Date").html(car.entry_on);
            $("#type").html(car.type);

            // User Details
            $("#user_email").html(car.user_email);
            $("#Name").html(car.u_name);
            $("#user_TEL").html(car.user_TEL);
            $("#user_address").html(car.user_address);
            $("#user_city").html(car.user_city)             
            
            var carimg_1 = "<img src='uploads/vehicles/"+car.v_imege_1+"' style='float: center; width: 100%; height: 60vh; object-fit: cover;'>";
            $("#car_img_1").html(carimg_1);

            var carimg_2 = "<img src='uploads/vehicles/"+car.v_imege_2+"' style='float: center; width: 100%; height: 60vh; object-fit: cover;'>";
            $("#car_img_2").html(carimg_2);

            var carimg_3 = "<img src='uploads/vehicles/"+car.v_imege_3+"' style='float: center; width: 100%; height: 60vh; object-fit: cover;'>";
            $("#car_img_3").html(carimg_3);

            
           
        }
      });
}

$("#filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#car_card > div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

 


</script>
</body>
</html>