<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dragonbakery";

$koneksi = mysqli_connect($servername, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Dragon Bakery</title>
    <link href="style2.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JScodeBakery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>

</head>
<body>

    <!-- Section 1 -->
<div class="sectionone min-vh-100 d-flex flex-column">
      <nav class="navbar navbar-expand-lg custom-navbar" style="border-bottom: 5px solid rgba(104, 90, 90, 0.7);">
        <div class="container-fluid container">
          <div class="navbar-brand" href="#">
            <img class="imglogo" src="gambar/perusahaan.png">
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item me-md-5">
                <a class="nav-link hover" style="font-family: Lato; font-weight: 600;" onclick="scrollToSection('lembar1')" >Home</a>
              </li>
              <li class="nav-item me-md-5">
                <a class="nav-link hover" onclick="scrollToSection('sectiontwo')" style="font-family: Lato; font-weight: 600;">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hover" onclick="scrollToSection('section7')" style="font-family: Lato; font-weight: 600;">Order</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="d-flex align-items-center flex-fill modal-overlay" id="lembar1">
        <div class="container fade-in">
          <div class="justify-content-center">
            <h1 class="text-center text-white mb-3 pt-3" style="font-family: Bakery; font-size: 80px;">Dragon Bakery Delicious Treats</h1>
            <div class="mb-5">
              <p class="text-light text-center" style="font-family: Perpetua; font-weight: 500; margin: 0 auto; font-size: 25px;">
                Delicious Delights Bakery in Yogyakarta is the perfect place to find freshly baked pastries, cakes and breads. Our products are made with the highest quality ingredients and we take pride in creating unique and flavorful treats for our customers. Come and enjoy the delicious aromas and flavors of Yogyakarta's finest bakery!
              </p>
            </div>
            <div class="container mt-1 fade-in">
              <div class="row">
                <div class="col text-center">
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <button class="btn pe-5 ps-5 pt-2 pb-2" style="background-color: rgba(255, 220, 186, 0.5); font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: 900; color: white; " onclick="scrollToSection('section7')">Order Now!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    
    <!--Section 2-->
<div class="sectiontwo pt-12 lg:pt-14 xl:pt-20 pb-12 lg:pb-14 xl:pb-20" id="sectiontwo" style="background-color: rgba(255, 220, 186, 0.5);">
  <div class="flex h-full my-auto">
    <div class="flex flex-col gap-4 text-center fade-in" style="padding: 80px;">
      <h3 class="heading-medium" style="color: #111827; font-family: Oswald, sans-serif; font-weight: 400">
        I'm so glad I found Delicious Delights Bakery in Yogyakarta! They have the most amazing cakes and pastries. I'm always so impressed with their quality and taste. Highly recommend!
      </h3>
      <p class="body-large" style="color: #111827">- Dragan, Yogyakarta</p>
    </div>
  </div>
</div>


<!-- Section 3 -->
<div class="container pt-12 lg:pt-14 xl:pt-20 fade-in">
  <div class="row" style="padding: 30px;">
    <div class="col-lg-6 order-lg-1" style="padding: 80px;">
      <h2 class="mt-lg-1">Custom Cake Design</h2>
      <p>A service for customers to create their own custom cake with a variety of flavors, decorations, and sizes.</p>
    </div>
    <div class="col-lg-6 order-lg-2">
      <div class="mt-lg-0 Gsec3" style="padding: 150px;"></div>
    </div>
  </div>
</div>

<!-- Section 4 -->
<div class="container pt-12 lg:pt-14 xl:pt-20 fade-in">
  <div class="row" style="padding: 30px;">
    <div class="col-lg-6 ">
      <div class="mt-lg-0 Gsec4" style="padding: 150px;"></div>
    </div>
    <div class="col-lg-6 " style="padding: 80px;">
      <h2 class="mt-lg-1">Baked Goods Delivery</h2>
      <p>A service for customers to have their freshly baked goods delivered to their doorstep.</p>
    </div>
  </div>
</div>

<!-- Section 5 -->
<div class="container pt-12 lg:pt-14 xl:pt-20 fade-in">
  <div class="row" style="padding: 30px;">
    <div class="col-lg-6 order-lg-1" style="padding: 80px;">
      <h2 class="mt-lg-1">Special Occasion Cakes</h2>
      <p>A service that specializes in creating cakes for special occasions such as birthdays and anniversaries.</p>
    </div>
    <div class="col-lg-6 order-lg-2">
      <div class="mt-lg-0 Gsec5" style="padding: 150px;"></div>
    </div>
  </div>
</div>

<!--Section6-->
<div class="Gsec6">
  <div class="container pt-12 lg:pt-14 xl:pt-20">
    <div class="row">
      <div class="col-lg-6 order-lg-1 text-center mb-3 mt-3 fade-in">
        <img src="gambar/bakery sketch,  0.png" alt="Gambar" class="img-fluid" style="margin-bottom: 20px;">
      </div>
      <div class="alamat col-lg-6 order-lg-2 text-left mb-4 mt-4 ml-2 fade-in">
        <h2 style="margin-top: 0%;">Dragon Bakery</h2>
        <p>Gedung SV UGM</p>
        <p>Sekip Unit 1, Jl. Persatuan, Blimbing Sari, Caturtunggal, Kec. Depok, Kabupaten Sleman</p>
        <p>Daerah Istimewa Yogyakarta 55281</p>
        <div id="map" class="mt-4 map1">
          <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sekolah vokasi UGM&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="height: 100%; width: 100%;"  allowfullscreen></iframe>
        </div>
        <button class="btn btn-primary mt-3" style="font-family: 'dinbold' !important; background-color: rgba(255, 220, 186, 0.5); color: black;" onclick="redirectToGoogleMaps()">Get Directions</button>
      </div>
    </div>
  </div>
</div>

<!--Section7-->
<div class="Gsec7 container pt-12 lg:pt-14 xl:pt-20 mt-3" id="section7">
  <div class="row">
    <div class="kata col-lg-6 text-left fade-in">
      <h3>Contact Delicious Delights Dragon Bakery</h3>
      <p>Please fill out the contact form to place your order for delightful treats from Dragon Bakery. We will promptly get in touch with you via WhatsApp to finalize your order.</p>
    </div>
    <div class="col-lg-6">
      <form class="fade-in" method="post">
        <!-- action="proses.php" -->
        <div class="flex flex-col lg:flex-row">
          <div class="form-group row">
            <div class="col mb-1">
              <label for="name">Name</label>
              <input type="text" class="form-control border-0 !shadow-none" name="name" id="NameInput" style="border-radius:0;background-color:rgba(0,0,0,0.07);color:#111827" placeholder="just a nickname, e.x, 'ucup'">
            </div>
            <div class="col">
              <label for="phone">Phone</label>
              <input type="text" class="form-control border-0 !shadow-none" name="phone" id="PhoneInput" style="border-radius:0;background-color:rgba(0,0,0,0.07);color:#111827" placeholder="Enter your phone number">
            </div>
          </div>
        </div>
        <div class="form-group mb-1 body-small">
          <label for="email">Email</label>
          <input type="email" class="form-control border-0 !shadow-none" id="EmailInput" name="email" style="border-radius:0;background-color:rgba(0,0,0,0.07);color:#111827" placeholder="Enter your email">
        </div>
        <div class="form-group mb-1 body-small" style="color:#111827">
          <label for="message">Message</label>
          <textarea class="form-control border-0 !shadow-none" id="MessageInput" name="message" style="border-radius:0;background-color:rgba(0,0,0,0.07);color:#111827" rows="5" placeholder="I want to order some cake with a unique shape ..."></textarea>
        </div>
        <div class="text-right">
        <input type="submit" class="btn btn-primary mb-2 mt-2 pe-5 ps-5 float-end" onclick="submitForm(event)" name="submit" value="Submit">
          <!-- <button type="submit" class="btn btn-primary mb-2 mt-2 pe-5 ps-5 float-end" name="submit" value="Submit" onclick="submitForm(event)">Send</button> -->
        </div>
      </form>
    </div>
    <div class="result" id="resultForm"></div>
  </div>
</div>

<!--Section8-->

<div class="Gsec8 container mb-4 mt-2">
  <div class="p-3" style="border-radius: 10px;">
    <div class="row mb-0 title fade-in">
      <div class="col-12">
        <h2>Who Just Filled the Order.</h2>
        <p>If you have recently completed the form above, please wait patiently until you receive a WhatsApp message, as we will reach out to you.</p>
      </div>
    </div>
    <hr class="mt-0 mb-2">
    <div class="col-sm-12 justify-content-center">
      <div class="row justify-content-center">
        <div class="col-sm-12 fade-in">
          <div class="row align-content-center">
            <div class="col-sm-12 card-title mt-2 mb-1 px-0 text-center">
              <p>latest update: Serveral second ago <?php  ?></p>
            </div>
            <div class="latestOrders" style="padding: 0px 10px 0px 10px;">
              <div class="col-sm-12 px-0">
                <div class="card-indonesia mt-0">
                  <div class="row justify-content-center">
                    <?php
                    $query = "SELECT * FROM pesananpelanggan ORDER BY order_id DESC LIMIT 5";
                    $result = mysqli_query($koneksi, $query);
                    $order_count = mysqli_num_rows($result);
                    if ($order_count > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $order_id = $row['order_id'];
                        $name = $row['name'];
                        ?>
                        <div class="col-sm-4 text-center">
                          <div class="card-internal">
                          <h3><?php echo $name; ?></h3>
                          <p>order id: <?php echo $order_id; ?></p>
                          </div>
                        </div>
                        <?php
                      }
                    } else {
                      echo '<div class="col-sm-12 text-center">';
                      echo '<p>No orders found.</p>';
                      echo '</div>';
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Section9-->
<footer style="border-top: 5px solid rgba(104, 90, 90, 0.075)">
  <div class="container" style="color: white; font-weight: 600; ">
    <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
    
    <div class="row text-center">
      <div class="justify-content-center">
        <img class="imglogo" src="gambar/perusahaan.png" >
        <span class="copyright quick-links" style="color: #6c3100;">Copyright © Dragon Bakery 2023
        </span>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
