<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COBAG</title>

    <link rel="icon" type="images/ico" href="images/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=HelveticaNeue:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/own.js"></script>

  </head>
  <body>
  <div class="gambarheader">
        <div class="row collapse navbar-collapse" id="menutarget1">
              <a href="home.php"><img class="col-md-3 logo" src="images/home/logo.png" alt="" /></a>
              <div class="garistegak"> </div>
              <ul class="col-md-6 nav navbar-nav" style="margin-right:-6%;">
                  <li><a href="design.php">DESIGN YOUR OWN</a></li>
                  <li><a href="gallery.php">GALLERY</a></li>
                  <li><a href="bantuan_pengguna.php">BANTUAN PENGGUNA</a></li>

              </ul>
              <form class="col-md-4 navbar-form" role="search" id="navkanan1">
                      <input type="text" class="form-control" id="searchnya1" placeholder="Search Product">
                      <?php if (isset($_SESSION['login_user'])) { ?>
                      <a type="button" href="logout.php" id="daftar1">KELUAR</a>
                      <a href="configuration.php" id="daftar1">PROFILE</a>
                      <?php }else{ ?>
                      <button type="button" data-toggle="modal" data-target="#modalsignin" id="daftar1">MASUK</button>
                      <?php } ?>
              </form>
        </div>
        <div class="modal fade" id="modalsignin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="forms">
                      <ul class="tab-group">
                            <li class="tab"><a href="#signin">MASUK</a></li>
                            <li class="tab"><a href="#signup">DAFTAR</a></li>
                      </ul>
                      <form action="masuk.php" id="signin">
                            <div class="row form-group" style="margin-top: 2%;">
                                  <div class="col-md-2"></div>
                                  <div class="col-md-7">
                                      <label for="email">Alamat Email</label>
                                      <input class="form-control" id="formsignin" type="email" name="email" required="email">
                                      <label for="password">Kata Sandi</label>
                                      <input class="form-control" type="password" name="password" id="password">
                                      <a href="#">Lupa Kata Sandi?</a> <br>
                                      <button class="btn btn-success" type="submit">Masuk</button>
                                  </div>
                            </div>
                      </form>
                      <form class="row form-group" action="daftar.php" id="signup" method="post" enctype="multipart/form-data">
                              <div class="col-md-2"></div>
                              <div class="col-md-7">
                                    <label for="name">Nama Akun</label>
                                    <input class="form-control" type=text name=username required autofocus> <br>
                                    <label for=text>Nama Lengkap</label>
                                    <input class="form-control" type=text name=nama required> <br>
                                    <label for=email>Email</label>
                                    <input class="form-control" type=email name=email required=email> <br>
                                    <label for=password>Kata Sandi</label>
                                    <input class="form-control" type=password name=password required id="pass"> <br>
                                    <label for = date>Tanggal Lahir</label>
                                    <div class="form-group">
                                        <select name="tanggal" placeholder="Date" id="date1">
                                        				<option value="01">01</option>
                                        				<option value="02">02</option>
                                        				<option value="03">03</option>
                                        				<option value="04">04</option>
                                        				<option value="05">05</option>
                                        				<option value="06">06</option>
                                        				<option value="07">07</option>
                                        				<option value="08">08</option>
                                        				<option value="09">09</option>
                                        				<option value="10">10</option>
                                        				<option value="11">11</option>
                                        				<option value="12">12</option>
                                        				<option value="13">13</option>
                                        				<option value="14">14</option>
                                        				<option value="15">15</option>
                                        				<option value="16">16</option>
                                        				<option value="17">17</option>
                                        				<option value="18">18</option>
                                        				<option value="19">19</option>
                                        				<option value="20">20</option>
                                        				<option value="21">21</option>
                                        				<option value="22">22</option>
                                        				<option value="23">23</option>
                                        				<option value="24">24</option>
                                        				<option value="25">25</option>
                                        				<option value="26">26</option>
                                        				<option value="27">27</option>
                                        				<option value="28">28</option>
                                        				<option value="29">29</option>
                                        				<option value="30">30</option>
                                        				<option value="31">31</option>
                                  			</select>
                                  			<select name="bulan" placeholder="Month" id="date1">
                                        				<option value="01">January</option>
                                        				<option value="02">February</option>
                                        				<option value="03">March</option>
                                        				<option value="04">April</option>
                                        				<option value="05">May</option>
                                        				<option value="06">June</option>
                                        				<option value="07">July</option>
                                        				<option value="08">August</option>
                                        				<option value="09">September</option>
                                        				<option value="10">Oktober</option>
                                        				<option value="11">November</option>
                                        				<option value="12">Desember</option>
                                  			</select>
                                        <input class="form-control" type="text" name="tahun" placeholder="Year" id="date2">
                                     </div>
                                    <div class="gender">
                                          <label for="gender">Gender</label>
                                          <input type="radio" name="gender" value="1" checked>Laki-Laki
                                          <input type="radio" name="gender" value="0">Perempuan
                                    </div>
                              <button class="btn btn-primary" type="submit">Daftar</button>
                          </div>
                      </form>

                </div>
            </div>
          </div>
        </div>
        <div class="awesome">
            <h1 id="h11">Be</h1><h1 id="h12">Awesome</h1>
        </div>
        <p id="quote1">
                Anda dapat mendesain tas sesuai keinginanmu <br> dengan fitur Design Your Own.
        </p>
        <a id="strdes" href="#bagcat">MULAI DESAIN</a>
  </div>
  <div class="row bagcat" id="bagcat">
        <div class="col-md-6 menbag">
              <img src="images/home/men.png" alt="" />
              <h4>Kategori Tas</h4>
              <h2>Tas<br>Pria</h2>
              <p>Buat Desain Tas Kamu <br>Sekarang </p>
              <a href="design.php" id="link_design">MULAI</a>
        </div>
        <div class="col-md-6 womenbag">
              <img src="images/home/woman.png" alt="" />
              <h4>Kategori Tas</h4>
              <h2>Tas<br>Wanita</h2>
              <p>Desain Tas Favoritmu kini<br>Lebih Mudah</p>
              <a href="design.php" id="link_design">MULAI</a>
        </div>
  </div>
  <div class="row minigallery">
        <div class="col-md-6 gallerywords">
            <div class="kata2">
                  <h5>Desain tas favoritmu sekarang !</h5>
                  <h2>Gallery Cobag</h2>
                  <p>Semua kreativitas para pengrajin tas<br>lokal ada di sini</p>
            </div>
        </div>
        <div class="col-md-3" id="gal3"></div>
        <div class="col-md-3" id="gal4"></div>
  </div>
  <div class="row minigallery2">
        <div class="col-md-3" id="gal1">
          <h4></h4>
          <h2></h2>
        </div>
        <div class="col-md-3" id="gal2"></div>
        <div class="col-md-6" id="gal5">
          <h4></h4>
          <h2></h2>
        </div>
  </div>
  <div class="row" id="service">
        <div class="col-md-6" id="part1">
              <img src="images/Home/manufacture.png" alt="" />
              <div class="verline1"> </div>
              <p>Saatnya memberikan sentuhan teknologi<br>kesetiap produkmu</p>
              <a href="gabung.php">GABUNG DI COBAG</a>
        </div>
        <div class="col-md-6" id="part2">
              <img src="images/Home/repair.png" alt="" />
              <div class="verline2"> </div>
              <p>Kami ingin memberikan pelayanan<br>terbaik bagi pelanggan</p>
              <a href="comingsoon.php">PERBAIKAN TAS</a>
        </div>
  </div>
<?php include("footer.php"); ?>
<script>
$(document).ready(function(){
// Add smooth scrolling to all links
$("a").on('click', function(event) {

// Make sure this.hash has a value before overriding default behavior
if (this.hash !== "") {
  // Prevent default anchor click behavior
  event.preventDefault();

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 800, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
  });
} // End if
});
});

$("#gal1").mouseover(function(){
        $("#gal1").css("background-color", "#f02441");
        $("#gal1").css("background-blend-mode", "multiply");
        $("#gal1").css("transition", "background-color 0.4s");
        $("#gal1 h4").text('Kode Tas');
        $("#gal1 h2").text('CR-136');
    });
$("#gal1").mouseout(function(){
        $("#gal1").css("transition", "background-color 0.4s");
        $("#gal1").css("background-color","transparent");
        $("#gal1 h4").text('');
        $("#gal1 h2").text('');
    });
$("#gal5").mouseover(function(){
        $("#gal5").css("background-color", "#f02441");
        $("#gal5").css("background-blend-mode", "multiply");
        $("#gal5").css("transition", "background-color 0.4s");
        $("#gal5 h4").text('Kode Tas');
        $("#gal5 h2").text('CR-114');
    });
$("#gal5").mouseout(function(){
        $("#gal5").css("transition", "background-color 0.4s");
        $("#gal5").css("background-color","transparent");
        $("#gal5 h4").text('');
        $("#gal5 h2").text('');
    });
</script>
