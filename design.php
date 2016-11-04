<?php include("header.php");
include 'koneksi.php';

?>
<?php
if(isset($_GET['balasan'])){
  if($_GET['balasan']==1){

    echo '<div class="row" style="margin-top:3%;">';
      echo '<div class="col-md-4"></div>';
      echo '<div class="col-md-4 alert alert-success">Berhasil Memesan</div>';
    echo '</div>';

  }else{
    echo '<div class="row">';
      echo '<div class="col-md-4"></div>';
      echo '<div class="col-md-4 alert alert-danger">GAGAL Memesan</div>';
    echo '</div>';
  }
}
?>
<h3 id="designyourown">DESIGN YOUR OWN</h3>
<div class="row desain-tas">
      <div class="col-md-6" id="sampeltas">
          <div class="tas">

                  <img src="images/preview_desain/badan-tas-1.png" id="badan-tas"/>


                <div>
                      <img id="bagian-kantong-bawah"
                      style="position: absolute; top: 0%;"
                      <!--  -->
                      <!-- src="images/preview_desain/preview-kantong-bawah-1.png" alt="" /> -->
                </div>
                <div >
                      <img id="bagian-zipper"
                      style="position: absolute; top: 0%;"
                      <!--  -->
                      <!-- src="images/preview_desain/preview-zipper-1.png" alt="" /> -->
                </div>
                <div>
                      <img id="bagian-atas-tas"
                      style="position: absolute; top: 0%;"
                      <!--  -->
                      <!-- src="images/preview_desain/preview-atas-1.png" alt="" /> -->
                </div>
          </div>
          <img src="images/Customized/panah.png" alt="" id="tombolpanah" />
          <img src="images/Customized/panah.png" alt="" id="tombolpanah2" />
          <img src="images/Customized/zoom.png" alt="" id="tombolzoom"/>
          <img src="images/Customized/bulat.png" alt="" id="tombolbulat"/>
      </div>
      <div class="col-md-6">
        <!-- tab content yang kiri -->
        <div class="">
              <div class="row">
                  <div class="col-md-5" id="ketdesain1">
                      <h3>CR - Custom</h3>
                  </div>
                  <div class="col-md-5" id="ketdesain2">
                      <h4>Rp 200.000,00</h4>
                  </div>
              </div>
              <div class="">
                    <div class="col-md-6" id="pilihan-konten">
                        <div id="jenis-atasan" class="pilihan-costum active">
                            <h3 id="judulbagian">Badan Tas</h3>
                            <div class="isibagian">
                              <h5>Badan Tas</h5>
                              <button onclick="changeBadanTas('1')">
                                  <img src="images/icon_desain/pegangan-1.png" alt="" id="jenis-badan-1"/>
                              </button>
                            </div>

                        </div>
                        <div id="jenis-atasan2" class="pilihan-costum">
                            <h3 id="judulbagian">Bagian Atas</h3>
                            <div class="isibagian">
                                 <h5>Jenis Atasan</h5>
                                 <button onclick="changeAtasTas('0')">
                                        <img src="images/icon_desain/bagian-atas-0.png" alt="" id="jenis-atasan-1"/>
                                  </button>
                                 <button onclick="changeAtasTas('1')">
                                        <img src="images/icon_desain/bagian-atas-1.png" alt="" id="jenis-atasan-1"/>
                                  </button>
                                  <button onclick="changeAtasTas('2')" id="jenis-atasan-2">
                                        <img src="images/icon_desain/bagian-atas-2.png" alt=""/>
                                  </button>
                                  <button onclick="changeAtasTas('4')">
                                        <img src="images/icon_desain/bagian-atas-4.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeAtasTas('3')">
                                        <img src="images/icon_desain/bagian-atas-3.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('5')">
                                        <img src="images/icon_desain/bagian-atas-5.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('6')">
                                        <img src="images/icon_desain/bagian-atas-6.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('7')">
                                        <img src="images/icon_desain/bagian-atas-7.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('8')">
                                        <img src="images/icon_desain/bagian-atas-8.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('9')">
                                        <img src="images/icon_desain/bagian-atas-9.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('10')">
                                        <img src="images/icon_desain/bagian-atas-10.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                                  <button onclick="changeAtasTas('11')">
                                        <img src="images/icon_desain/bagian-atas-11.png" alt="" id="jenis-atasan-4"/>
                                  </button>
                          </div>
                        </div>
                        <div  id="jenis-kantong" class="pilihan-costum">
                            <h3 id="judulbagian">Kantong Tas</h3>
                            <div class="isibagian">
                                  <h5>Jenis Kantong Tas</h5>
                                  <button onclick=" changeKantongBawahTas('1')">
                                        <img src="images/icon_desain/kantong-1.png" alt="" id="jenis-kantong-atas-1"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('2')" id="jenis-kantong-bawah-2">
                                        <img src="images/icon_desain/kantong-2.png" alt=""/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('3')">
                                        <img src="images/icon_desain/kantong-3.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('4')">
                                        <img src="images/icon_desain/kantong-4.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('5')">
                                        <img src="images/icon_desain/kantong-5.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('6')">
                                        <img src="images/icon_desain/kantong-6.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('7')">
                                        <img src="images/icon_desain/kantong-7.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                                  <button onclick="changeKantongBawahTas('8')">
                                        <img src="images/icon_desain/kantong-8.png" alt="" id="jenis-atasan-3"/>
                                  </button>
                          </div>
                        </div>
                        <div id="jenis-zipper" class="pilihan-costum">
                              <h3 id="judulbagian">Zipper Tas</h3>
                              <div class="isibagian">
                                <h5>Jenis Zipper</h5>
                                  <!-- <button onclick="changeZipper('1')">
                                        <img src="images/icon_desain/zipper-1.png" alt="" id="jenis-sabuk-1"/>
                                  </button> -->
                                    <button onclick="changeZipper('2')">
                                          <img src="images/icon_desain/zipper-2.png" alt="" id="jenis-sabuk-1"/>
                                    </button>
                            </div>
                        </div>
                        <form class="form-desain" action="desain_proses.php" method="post" style="margin-top:15%;">
                            <input type="hidden" class="badan-tas" id="badan-tas" name="badan-tas" value="1">
                            <input type="hidden" class="atas-tas" id="atas-tas" name="atas-tas" value="1">
                            <input type="hidden" class="kantong-bawah" id="kantong-bawah" name="kantong-bawah" value="1">
                            <input type="hidden" class="zipper" id="zipper" name="zipper" value="2">
                            <?php if (isset($_SESSION['login_user'])) {
                                  echo '<input type="submit" value="PROSES KE PEMESANAN" id="tombolcart">';
                            } else{
                              echo '<div class="col-md-12" id="btnwarning">
                              <p id="warning1" >PETUNJUK PENGGUNAAN</p><br>
                              <ol id="warning2" >
                                    <li>Pilih Bagian Tas yang akan di desain</li>
                                    <li>Pilih bentuk desain dari bagian tas pada kolom sebelah kiri.<br><br> catatan: Silahkan masuk ke akun anda untuk melakukan Pemesanan</li>
                              </ol>
                              </div>';
                            }?>
                      </form>
                    </div>
                    <div class="col-md-6 part-tab-menu" style="width:30%;">
                          <h3 id="judulbagian2">Bagian Tas</h3>
                          <div class="list-group">
                                <a class="list-group-item" id="badan-tas" href="#jenis-atasan">Badan Tas</a>
                                <a class="list-group-item" id="bagian-atas" href="#jenis-atasan2"> Bagian Atas</a>
                                <a class="list-group-item" id="kantong" href="#jenis-kantong"> Kantong </a>
                                <a class="list-group-item" id="zipper" href="#jenis-zipper"> Zipper</a>
                          </div>
                          <br>
                          <p style="margin-left:8%;">Bagikan Desainmu</p>
                          <div class="shareicon">
                                <img src="images/Customized/fb.png" alt="" />
                                <img style="width:21%; margin-top:1%;" src="images/Customized/ig.png" alt="" />
                                <img src="images/Customized/gplus.png" alt="" />
                          </div>
                    </div>
                </div>
          </div>
      </div>
</div>
</br></br></br></br></br>
</br></br></br></br></br>
<?php include("footer.php") ?>
<script>
$(document).ready(function(){
  $('#jenis-atasan2').hide();
  $('#jenis-kantong').hide();
  $('#jenis-pegangan').hide();
  $('#jenis-zipper').hide();
  $('.list-group a').on('click', function (e) {
    e.preventDefault();

    $('.list-group-item').parent().addClass('active');
    $('.list-group-item').parent().siblings().removeClass('active');

    var href = $(this).attr('href');

    $('.pilihan-costum').hide();
    $(href).fadeIn(500);
  });
});
function changeBadanTas($id){
  document.getElementById('badan-tas').src='images/preview_desain/badan-tas-'+$id+'.png';
  $('input[name=badan-tas]').val($id);
}
function changeAtasTas($id){
  document.getElementById('bagian-atas-tas').src='images/preview_desain/preview-atas-'+$id+'.png';
  $('input[name=atas-tas]').val($id);
}
function changeKantongBawahTas($id){
  document.getElementById('bagian-kantong-bawah').src='images/preview_desain/preview-kantong-bawah-'+$id+'.png';
  $('input[name=kantong-bawah]').val($id);
}
function changeZipper($id){
  document.getElementById('bagian-zipper').src='images/preview_desain/preview-zipper-'+$id+'.png';
  $('input[name=zipper]').val($id);
}
</script>
