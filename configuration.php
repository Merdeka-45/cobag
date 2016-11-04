<?php

include("header.php");
require ("koneksi.php");

// include ("session.php");

// $id_nama = $_GET['username'];
//
if (!isset($_SESSION['login_user'])) {
  die(header('Location:home.php'));
}
// echo $_SESSION['login_user'];
$query_akun = $conn->query("SELECT * FROM data_user WHERE email = '".$_SESSION['login_user']."'");

$result = $query_akun->fetch_object();
  $id = $result->id;
  $nama = $result->nama;
  $password = $result->password;
  $email = $result->email;
  $tanggal = $result->tanggal;
  $bulan = $result->bulan;
  $tahun = $result->tahun;
  $gender = $result->gender;
?>
<div class="row" id="acccon">
    <h1>PENGATURAN AKUN</h1>
</div>
<div class="row" id="tabconfig">
      <div class="col-md-3" id="leftside">
          <ul class="menuconfig">
            <a href="#datapembayaran"><li>PEMBAYARAN</li></a>
            <a href="#reviewuser"><li>ULASAN PENGGUNA</li></a>
            <a href="#personaldata"><li>DATA PELANGGAN</li></a>
            <a href="#datashipping"><li>ALAMAT KIRIM</li></a>
          </ul>
      </div>
      <div class="col-md-8 isimenuconfig">
            <div class="rightside" id="personaldata">
                  <h3>USER PERSONAL DATA</h3>
                  <p id="ketkanan">Form ini menampilkan tentang data personal dari pengguna</p>
                  <hr>
                  <div class="row" id="bagianatas">
                       <div class="col-md-3" id="labelkiri">
                           <p>NAMA</p>
                           <p>GENDER</p>
                           <p>DATE OF BIRTH</p>
                       </div>
                   <form class="" action="updateconfig.php" method="post" >
                     <div class="col-md-6" id="sebelahkanan">
                            <input type="text" name="name" value=" <?php echo $nama ?> " id="kolomaja1" required>
                            <input type="radio" id="radiobutton1" <?php if($gender == 1) echo "checked"; ?>><label for="male">Male</label>
                            <input type="radio" id="radiobutton2" <?php if($gender == 0) echo "checked"; ?>><label for="female">Female</label>
                            <div class="tanggallahirnya">
                                      <select class="tanggalpersonal" name="" id="kolomaja" required>
                                                 <option value="01" <?php if($tanggal == 1 ) echo "selected"; ?>  >01</option>
                                                 <option value="02" <?php if($tanggal == 2 ) echo "selected"; ?> >02</option>
                                                 <option value="03" <?php if($tanggal == 3 ) echo "selected"; ?> >03</option>
                                                 <option value="04" <?php if($tanggal == 4 ) echo "selected"; ?> >04</option>
                                                 <option value="05" <?php if($tanggal == 5 ) echo "selected"; ?> >05</option>
                                                 <option value="06" <?php if($tanggal == 6 ) echo "selected"; ?> >06</option>
                                                 <option value="07" <?php if($tanggal == 7 ) echo "selected"; ?> >07</option>
                                                 <option value="08" <?php if($tanggal == 8 ) echo "selected"; ?> >08</option>
                                                 <option value="09" <?php if($tanggal == 9 ) echo "selected"; ?> >09</option>
                                                 <option value="10" <?php if($tanggal == 10 ) echo "selected"; ?> >10</option>
                                                 <option value="11" <?php if($tanggal == 11 ) echo "selected"; ?> >11</option>
                                                 <option value="12" <?php if($tanggal == 12 ) echo "selected"; ?> >12</option>
                                                 <option value="13" <?php if($tanggal == 13 ) echo "selected"; ?> >13</option>
                                                 <option value="14" <?php if($tanggal == 14 ) echo "selected"; ?> >14</option>
                                                 <option value="15" <?php if($tanggal == 15 ) echo "selected"; ?> >15</option>
                                                 <option value="16" <?php if($tanggal == 16 ) echo "selected"; ?> >16</option>
                                                 <option value="17" <?php if($tanggal == 17 ) echo "selected"; ?> >17</option>
                                                 <option value="18" <?php if($tanggal == 18 ) echo "selected"; ?>>18</option>
                                                 <option value="19" <?php if($tanggal == 19 ) echo "selected"; ?>>19</option>
                                                 <option value="20" <?php if($tanggal == 20 ) echo "selected"; ?>>20</option>
                                                 <option value="21" <?php if($tanggal == 21 ) echo "selected"; ?>>21</option>
                                                 <option value="22" <?php if($tanggal == 22 ) echo "selected"; ?>>22</option>
                                                 <option value="23" <?php if($tanggal == 23 ) echo "selected"; ?>>23</option>
                                                 <option value="24" <?php if($tanggal == 24 ) echo "selected"; ?>>24</option>
                                                 <option value="25" <?php if($tanggal == 25 ) echo "selected"; ?>>25</option>
                                                 <option value="26" <?php if($tanggal == 26 ) echo "selected"; ?>>26</option>
                                                 <option value="27" <?php if($tanggal == 27 ) echo "selected"; ?>>27</option>
                                                 <option value="28" <?php if($tanggal == 28 ) echo "selected"; ?>>28</option>
                                                 <option value="29" <?php if($tanggal == 29 ) echo "selected"; ?>>29</option>
                                                 <option value="30" <?php if($tanggal == 30 ) echo "selected"; ?>>30</option>
                                                 <option value="31" <?php if($tanggal == 31 ) echo "selected"; ?>>31</option>
                                     </select>
                                     <select class="bulanpersonal" name="" id="kolomaja" required>
                                                 <option value="01" <?php if($bulan == 1 ) echo "selected"; ?>>January</option>
                                                 <option value="02" <?php if($bulan == 2 ) echo "selected"; ?>>February</option>
                                                 <option value="03" <?php if($bulan == 3 ) echo "selected"; ?>>March</option>
                                                 <option value="04" <?php if($bulan == 4 ) echo "selected"; ?>>April</option>
                                                 <option value="05" <?php if($bulan == 5 ) echo "selected"; ?>>May</option>
                                                 <option value="06" <?php if($bulan == 6 ) echo "selected"; ?>>June</option>
                                                 <option value="07" <?php if($bulan == 7 ) echo "selected"; ?>>July</option>
                                                 <option value="08" <?php if($bulan == 8 ) echo "selected"; ?>>August</option>
                                                 <option value="09" <?php if($bulan == 9 ) echo "selected"; ?>>September</option>
                                                 <option value="10" <?php if($bulan == 10 ) echo "selected"; ?>>Oktober</option>
                                                 <option value="11" <?php if($bulan == 11 ) echo "selected"; ?>>November</option>
                                                 <option value="12" <?php if($bulan == 12 ) echo "selected"; ?>>Desember</option>
                                     </select>
                                     <input type="text" name="tahunpersonal" required value=" <?php echo $tahun ?> " id="kolomtahun">
                                  </div>
                          </div>
                  </div>
                  <hr>
                  <div class="row">
                        <div class="col-md-3" id="labelnyaupdateemail">
                              <p>EMAIL</p>
                              <p>PHONE NUMBER</p>
                              <p>PASSWORD</p>
                              <p>NEW PASSWORD</p>
                        </div>
                          <div class="col-md-9" id="emaildkkpersonal">
                            <input type="text" name="email" value="<?php echo $email ?>" required> </br>
                                <input type="text" name="notelp" id="sec2" value=""> </br>
                                <input type="password" name="password" id="sec2" value="<?php echo $password ?>" required> </br>
                                <input type="password" name="newpasswordl" id="sec2" value=""> </br>
                                <button type="submit" name="updatepersonal" id="updatepersonal">UPDATE</button>
                         </div>
                      </form>
                      <?php
                      if(isset($_GET['balasan'])){
                        if($_GET['balasan']==1){
                          echo '<div class="alert alert-success">berhasil mengupdate</div>';
                        }else{
                          echo 'gagal mengupdate';
                        }
                      }
                      ?>
                  </div>

            </div>
            <div class="rightside" id="datapembayaran">
                  <h3>PURCHASING DATA</h3>
                  <p id="ketkanan">Form ini menampilkan tentang riwayat pembelian produk dari pengguna</p>
                  <hr>

                      <?php
                      function toRupiah($num){
                        return "Rp ".number_format($num,0,'','.');
                      }
                        $arrKurir = array(0,15000,20000,17500);
                        $queryInvoice = $conn->query("SELECT * FROM pembelian WHERE id_user = ".$id);
                        if($queryInvoice->num_rows!=0)
                        {
                          echo "<table class='table'>

                          <thead>

                            <tr>
                              <th><center>Invoice</center></th>
                              <th><center>Kurir</center></th>
                              <th><center>Total</center></th>
                              <th><center>Detail</center></th>
                            </tr>

                          </thead><tbody>";
                          $no = 1;
                          while($fetchInvoice = $queryInvoice->fetch_object())
                          {

                            $total = 0;
                            $queryDetail = $conn->query("SELECT b.harga,a.quantity FROM pembelian_detail AS a INNER JOIN barang AS b ON a.id_barang = b.id WHERE a.id_pembelian = '".$fetchInvoice->id_checkout."'");

                            while($fetchDetail = $queryDetail->fetch_object())
                            {
                              $total += $fetchDetail->harga;
                            }

                            $total += $arrKurir[$fetchInvoice->kurir];

                            echo "<tr>
                              <td>Invoice-".$no."</td>
                              <td>Kurir".$fetchInvoice->kurir."</td>
                              <td>".toRupiah($total)."</td>
                              <td><a href='detail_pembelian.php?id=".$fetchInvoice->id_checkout."'>Lihat</a></td>
                            </tr>";
                            $no++;
                          }
                          echo "</tbody></table>";
                        }
                      ?>
            </div>
            <div class="rightside" id="datashipping">
                  <h3>SHIPPING ADDRESS</h3>
                  <p id="ketkanan">Form ini menampilkan tentang alamat pengiriman barang yang anda pesan</p>
                  <hr>
                  <form class="" action="update_shipadd.php" method="post" id="shipadd">
                        <table>
                           <tbody>
                              <tr>
                                  <td>NAMA</td>
                                  <td><input type="text" name="name" value="" id="namaadd"></td>
                              </tr>
                              <tr>
                                  <td style="vertical-align:baseline;">ALAMAT</td>
                                  <td><textarea name="alamatnya" rows="8" cols="40" placeholder="Tuliskan alamat anda di sini..."></textarea> </td>
                              </tr>
                              <tr>
                                  <td colspan="1"></td>
                                  <td><input type="text" name="kecamatan" value="" placeholder="Kecamatan" id="suppadd"></td>
                              </tr>
                              <tr>
                                  <td colspan="1"></td>
                                  <td><input type="text" name="kabupaten" value="" placeholder="Kabupaten" id="suppadd"></td>
                              </tr>
                              <tr>
                                  <td colspan="1"></td>
                                  <td><input type="text" name="provinsi" value="" placeholder="Provinsi" id="suppadd"></td>
                              </tr>
                              <tr>
                                  <td>KODE POST</td>
                                  <td><input type="text" name="kodepos" value="" placeholder="Kode Post" id="zipcode"></td>
                              </tr>
                              <td colspan="1"></td>
                              <td><button type="submit" name="updateadd"  id="subbut">UPDATE</button></td>
                           </tbody>
                        </table>
                  </form>
            </div>
            <div class="rightside" id="reviewuser">
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
</div>

<?php include("footer.php") ?>
<script>
$(document).ready(function(){
  $('#datapembayaran').hide();
  $('#datashipping').hide();
  $('#reviewuser').hide();
  $('.menuconfig a').on('click', function (e) {
    e.preventDefault();

    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');

    var href = $(this).attr('href');

    $('.rightside').hide();
    $(href).fadeIn(500);
  });
});
</script>
