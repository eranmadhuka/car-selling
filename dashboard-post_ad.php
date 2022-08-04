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
                            <li class="py-3 border-bottom">
                                <a href="dashboard-accountsetting.php"><i class="fa-solid fa-user"></i> Account Settings </a>
                            </li>
                            <li class="py-3 border-bottom db-active">
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
                        <h2>Add Your Vehicle</h2>
                        <span>Items marked with * are required.</span>
                    </div>
                    <div class="">

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

                        <form action="sql/add_vehicle.php" method="post" enctype="multipart/form-data">
                            <h5>Contact Info</h5>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" id="txtUerId" name="txtUerId" value="<?php echo "".$_SESSION['user']['user_id']; ?>" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Name :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id=" " placeholder="Enter Name" value="<?php echo "".$_SESSION['user']['u_name']; ?>" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email :</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id=" " placeholder="Email Address" value="<?php echo "".$_SESSION['user']['user_email']; ?>" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Phone Number :</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" id=" " placeholder="+94 769643114" value="<?php echo "".$_SESSION['user']['user_TEL']; ?>" disabled>
                                </div>
                            </div>

                            <hr>

                            <h5>Vehicle Info</h5>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Type :</label>
                                <div class="col-sm-8">
                                <select class="intext" style="width:100%;height:35px;" name="txtType" id="txtType" required>
                                        <option selected>Select Type</option>
                                        <option value="Sell">Sell</option>
                                        <option value="Rent">Rent</option>
                                    </select>
                                </div>
     
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Condition :</label>
                                <div class="col-sm-8">
                                    <select class="intext" style="width:100%;height:35px;" name="txtCondition" id="txtCondition" required>
                                        <option selected>Select Condition</option>
                                        <option value="New">New</option>
                                        <option value="Used">Used</option>
                                        <option value="Reconditioned">Reconditioned</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Brand :</label>
                                <div class="col-sm-8">
                                    <select class="intext" style="width:100%;height:35px;" name="txtBrand" id="txtBrand" required>
                                        <option selected>Select Make</option>
                                        <option value="Acura">Acura</option>
                                        <option value="Alfa-Romeo">Alfa-Romeo</option>
                                        <option value="Aprilia">Aprilia</option>
                                        <option value="Ashok-Leyland">Ashok-Leyland</option>
                                        <option value="Aston">Aston</option>
                                        <option value="Atco">Atco</option>
                                        <option value="Audi">Audi</option>
                                        <option value="Austin">Austin</option>
                                        <option value="Bajaj">Bajaj</option>
                                        <option value="Bentley">Bentley</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Cal">Cal</option>
                                        <option value="CAT">CAT</option>
                                        <option value="Ceygra">Ceygra</option>
                                        <option value="Changan">Changan</option>
                                        <option value="Chery">Chery</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Chrysler">Chrysler</option>
                                        <option value="Citroen">Citroen</option>
                                        <option value="Corvette">Corvette</option>
                                        <option value="Daewoo">Daewoo</option>
                                        <option value="Daido">Daido</option>
                                        <option value="Daihatsu">Daihatsu</option>
                                        <option value="Datsun">Datsun</option>
                                        <option value="Demak">Demak</option>
                                        <option value="Dfac">Dfac</option>
                                        <option value="DFSK">DFSK</option>
                                        <option value="Ducati">Ducati</option>
                                        <option value="Eicher">Eicher</option>
                                        <option value="FAW">FAW</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="Force">Force</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Foton">Foton</option>
                                        <option value="Hero">Hero</option>
                                        <option value="Hero-Honda">Hero-Honda</option>
                                        <option value="Higer">Higer</option>
                                        <option value="Hillman">Hillman</option>
                                        <option value="HINO">HINO</option>
                                        <option value="Hitachi">Hitachi</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Hummer">Hummer</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="IHI">IHI</option>
                                        <option value="Isuzu">Isuzu</option>
                                        <option value="Iveco">Iveco</option>
                                        <option value="JAC">JAC</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="JCB">JCB</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="JiaLing">JiaLing</option>
                                        <option value="JMC">JMC</option>
                                        <option value="John-Deere">John-Deere</option>
                                        <option value="Jonway">Jonway</option>
                                        <option value="KAPLA">KAPLA</option>
                                        <option value="Kawasaki">Kawasaki</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Kinetic">Kinetic</option>
                                        <option value="KMC">KMC</option>
                                        <option value="Kobelco">Kobelco</option>
                                        <option value="Komatsu">Komatsu</option>
                                        <option value="KTM">KTM</option>
                                        <option value="Kubota">Kubota</option>
                                        <option value="Lamborghini">Lamborghini</option>
                                        <option value="Land-Rover">Land-Rover</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Loncin">Loncin</option>
                                        <option value="Longjia">Longjia</option>
                                        <option value="Lotus">Lotus</option>
                                        <option value="Lti">Lti</option>
                                        <option value="Mahindra">Mahindra</option>
                                        <option value="Maserati">Maserati</option>
                                        <option value="Massey-Ferguson">Massey-Ferguson</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Metrocab">Metrocab</option>
                                        <option value="MG">MG</option>
                                        <option value="Mg-Rover">Mg-Rover</option>
                                        <option value="Micro">Micro</option>
                                        <option value="Mini">Mini</option>
                                        <option value="Minnelli">Minnelli</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Morgan">Morgan</option>
                                        <option value="Morris">Morris</option>
                                        <option value="New-Holland">New-Holland</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Opel">Opel</option>
                                        <option value="Other">Other</option>
                                        <option value="Perodua">Perodua</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Piaggio">Piaggio</option>
                                        <option value="Porsche">Porsche</option>
                                        <option value="Powertrac">Powertrac</option>
                                        <option value="Proton">Proton</option>
                                        <option value="Range-Rover">Range-Rover</option>
                                        <option value="Ranomoto">Ranomoto</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Reva">Reva</option>
                                        <option value="Rolls-Royce">Rolls-Royce</option>
                                        <option value="Saab">Saab</option>
                                        <option value="Sakai">Sakai</option>
                                        <option value="Seat">Seat</option>
                                        <option value="Singer">Singer</option>
                                        <option value="Skoda">Skoda</option>
                                        <option value="Smart">Smart</option>
                                        <option value="Sonalika">Sonalika</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Swaraj">Swaraj</option>
                                        <option value="Syuk">Syuk</option>
                                        <option value="TAFE">TAFE</option>
                                        <option value="Tata">Tata</option>
                                        <option value="Tesla">Tesla</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Triumph">Triumph</option>
                                        <option value="TVS">TVS</option>
                                        <option value="Vauxhall">Vauxhall</option>
                                        <option value="Vespa">Vespa</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Wave">Wave</option>
                                        <option value="Willys">Willys</option>
                                        <option value="Yamaha">Yamaha</option>
                                        <option value="Yanmar">Yanmar</option>
                                        <option value="Yuejin">Yuejin</option>
                                        <option value="Zongshen">Zongshen</option>
                                        <option value="Zotye">Zotye</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Model :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="txtModel" name="txtModel" placeholder="Vitz" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Manufactured Year :</label>
                                <div class="col-sm-8">
                                    <select class="intext" style="width:100%;height:35px;" name="txtManuYear" id="txtManuYear" required>
                                        <option selected>Manufactured Year</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1900">Before 1948</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Transmission :</label>
                                <div class="col-sm-8">
                                    <select class="intext" style="width:100%;height:35px;" name="txtTransmission" id="txtTransmission" required>
                                        <option selected>Select Transmission</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Fuel Type :</label>
                                <div class="col-sm-8">
                                    <select class="intext" style="width:100%;height:35px;" name="txtFuelType" id="txtFuelType" required>
                                        <option selected>Select Fuel Type</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Electric">Electric</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="Gas">Gas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Engine Capacity (CC) :</label>
                                <div class="col-sm-8">
                                    <div class="form-outline">
                                        <input type="number" class="form-control"  placeholder="What is the engine capacity of your car?" id="txtEngineCapacity" name="txtEngineCapacity" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Mileage (km) :</label>
                                <div class="col-sm-8">
                                    <div class="form-outline">
                                        <input type="number" class="form-control" placeholder="What is the mileage of ypur car?" id="txtMileage" name="txtMileage"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Message :</label>
                                <div class="col-sm-8">
                                    <div class="form-outline">
                                        <textarea class="form-control" id="txtMessage" name="txtMessage" rows="4"></textarea>
                                      </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"> Price (Rs) :</label>
                                <div class="col-sm-8">
                                    <div class="form-outline">
                                        <input type="number" class="form-control"  placeholder="How much do you want to Sell / Rent your car for?" id="txtPrice" name="txtPrice" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-8">
                                    <div class="form-outline">
                                        <input type="checkbox" value="Negotiable" id="txtNegotiable" name="txtNegotiable"> <span>Negotiable</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Add up to 3 photos</h5>
                            <div class="row mb-3">
                                <div class="col-sm-5">
                                    <div class="form-outline">
                                        <label for="formFileSm" class="form-label">Main Image</label>
                                        <input class="form-control form-control-sm" type="file" id="vphoto1" name="vphoto1">
                                    </div>
                                    <div class="form-outline">
                                        <label for="formFileSm" class="form-label">Image 2</label>
                                        <input class="form-control form-control-sm" type="file" id="vPhoto2" name="vPhoto2">
                                    </div>
                                    <div class="form-outline">
                                        <label for="formFileSm" class="form-label">Image 3</label>
                                        <input class="form-control form-control-sm" type="file" id="vPhoto3" name="vPhoto3">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="SUBMIT"/>
                            <!-- <input type="submit" class="btn btn-warning" name="submit" id="" value="Post ad"> -->
                        </form>
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