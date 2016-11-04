<?php include("header.php") ?>
<div class="row" id="acccon">
    <h1>Account Configuration</h1>
</div>
<div class="row" id="userpersonal">
    <div class="col-md-3" id="leftside">
        <ul>
          <a href="purchasing.php"><li>PURCHASING</li></a>
          <a href="userreview.php"><li>USER REVIEW</li></a>
          <a href="configuration.php" class="active"><li>INFORMATION</li></a>
          <a href="shipadd.php"><li>SHIPPING ADDRESS</li></a>
        </ul>
    </div>
    <div class="col-md-8" id="rightside">
          <h3>PRODUCT USER REVIEW</h3>
          <p id="ketkanan">Form ini menampilkan tentang riwayat review produk dari pengguna</p>
          <hr>
          <div class="row" id="reviewnya">
              <div class="col-md-3">
                    <img src="images/Customized/woman2.png" alt="" />
              </div>
              <div class="col-md-9">
                    <h5><b>NAMA BARANG</b></h5>
                    <p>Manufacture: Date:</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pellentesque ligula libero, aliquam et facilisis vel, interdum at justo.
                      Donec sit amet commodo odio. Phasellus congue, ante quis sagittis mattis, urna sem rhoncus eros,
                      eu convallis magna nibh quis dolor. Fusce eget nulla nec dui iaculis varius.</p>
                    <hr>
              </div>
          </div>
    </div>
</div>

<?php include("footer.php") ?>
