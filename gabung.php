<?php include("header.php"); ?>
<div class="gambaratasinfo">
      <img src="images/Informasi/info1.jpg" alt="" />
      <h1>Bersama teknologi kembangkan <br>kreativitas tanpa batas</h1>
      <hr>
</div>
<div class="menuinfo">
      <ul>
        <a href="hubungi.php"><li>Hubungi Kami</li></a>
        <a href="informasi.php" id="mid"><li>Informasi Cobag</li></a>
        <a href="gabung.php"><li>Gabung di Cobag</li></a>
      </ul>
</div>
<h1 id="headgab">Kenapa harus bergabung ?</h1>
<div class="row" id="kenapa">
    <div class="col-md-7">
          <div class="gab1">
                <img src="images/gabung/ico1.png" alt="" />
                <h3>Mempunyai fitur <i>custom</i> desain yang menarik</h3>
                <p>Kami menyediakan fitur yang dapat membuat desain tas secara custom, <br>
                fitur ini dapat anda memanfaatkan untuk membuat produk anda menjadi lebih <br>
                menarik di mata para konsumen.</p>
          </div>
          <hr>
          <div class="gab1">
                <img src="images/gabung/ico2.png" alt="" />
                <h3>Mudah dalam berjualan</h3>
                <p>Dengan bergabung dengan kami anda tidak perlu membuat website sendiri <br>
                  untuk memasarkan produk anda dengan kata lain hal ini dapat menghemat <br>
                  waktu dan anda juga akan mempunyai toko kedua anda secara gratis.</p>
          </div>
          <hr>
          <div class="gab1">
                <img src="images/gabung/ico3.png" alt="" />
                <h3>Display produk menarik</h3>
                <p>Dalam display produk, kami selalu menjaga kualitas produk anda agar terlihat <br>
                baik dan sesuai dengan tema dari produk anda</p>
          </div>
    </div>
</div>
<div class="row" id="section3">
      <h1>Membangun kreativitas lokal <br> melalui teknologi</h1>
      <p>
        Kami percaya kualitas produk lokal bukan penyebab kurangnya minat dengan produk lokal <br>
        melainkan kurangnya akses pelanggan kepada para pengrajin lokal dan inovasi teknologi yang kurang mendukung produk lokal. <br>
        Untuk itu kami hadir memberikan akses dan inovasi untuk mengembangkan produk lokal Indonesia.
      </p>
      <a href="#formgabung">Ayo Bergabung</a>
</div>
<?php
if(isset($_GET['balasan'])){
  if($_GET['balasan']==1){
    echo '<div class="alert alert-success">Selamat Anda berhasil mendaftarkan UMKM anda.</div>';
  }else{
    echo 'gagal mendaftar';
  }
}
?>
<form class="row" id="formgabung" action="gabung_proses.php" method="post">
      <h3>Bergabung dengan Cobag</h3>
      <table>
        <tr>
          <td>Nama Lengkap</td>
          <td id="namalengkap"><input type="text" name="namleng" placeholder="Masukan Nama Lengkap anda"></td>
        </tr>
        <tr>
          <td>Nama UMKM</td>
          <td id="ukm"><input type="text" name="ukm" placeholder="Masukan Nama UMKM anda"></td>
        </tr>
        <tr>
          <td>Alamat Email</td>
          <td id="alamatemail"><input type="email" name="alamatemail" placeholder="contoh:cobag@mail.com"></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td id="nomortelp"><input type="text" name="phonum" placeholder="Contoh: 081234567890"></td>
        </tr>
        <tr>
          <td>Upload Gambar Produk</td>
          <td ><input id="upgambar" type="file" name="gambar" placeholder="" value="Upload Gambar"></td>
        </tr>
        <tr>
          <td colspan="1"></td>
          <td>
            <input id="gabungsubmit" type="submit" name="name" value="Gabung">
          </td>
        </tr>
      </table>
</form>


<?php include("footer.php"); ?>
<script type="text/javascript">
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
</script>
