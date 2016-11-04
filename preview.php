<?php
include("header.php");
require_once ("koneksi.php");

$id_barang = $_GET['id'];

$query = $conn->query("SELECT * FROM barang WHERE id='$id_barang'");
function toRupiah($num){
  return "Rp ".number_format($num,0,'','.');
};
while($result = $query->fetch_object()){
  $id = $result->id;
  $gambar = $result->gambar;
  $nama_barang = $result->nama_barang;
  $panjang = $result->panjang;
  $lebar = $result->lebar;
  $tinggi = $result->tinggi;
  $jumlah = $result->jumlah;
  $harga = $result->harga;
}
// $cart = array();
// $cart = $_SESSION['cart'];
// foreach($cart as $c){
//   echo $c['quantity'];
//   echo $c['id'];
// }
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#addcart").click(function(){
      var quantity = $("#quantity").val();
      var id = $("#id").val();
      window.location.href = 'cart.php?id='+id+'&quantity='+quantity;
    })
  })
</script>
  <p id="subcategory">Category1 / Category2 / Category3</p>
  <div class="row">
      <div class="col-md-6">
          <img src="images/Gallery/<?php echo $gambar?>" alt="" id="gambarproduk"/>
          <img src="images/Customized/panah.png" alt="" id="tombolpanah3" />
          <img src="images/Customized/panah.png" alt="" id="tombolpanah4" />
          <img src="images/Customized/zoom.png" alt="" id="tombolzoom2"/>
          <img src="images/Customized/bulat.png" alt="" id="tombolbulat2"/>
      </div>
      <div class="col-md-6 previewproduct">
          <div class="detailpart1">
                <h3><?php echo $nama_barang; ?></h3>
                <h4> <?php echo toRupiah($harga); ?></h4>
                <p id="ketdetail"> Lorem ipsum dolor sit amet, consectetur <br>
                  adipiscing elit.  </p>
                <hr>
                <input type="hidden" id="id" value="<?php echo $id; ?>">
                <div class="quantity">
                      <div class="quan">
                            <label for="kuantitas">Quantity</label>
                            <select class="form-control" id="quantity">
                                  <?php for($i=1;$i<=$jumlah;$i++){ ?>
                                    <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                            </select>
                      </div>
                      <div class="detailquan">
                            <p>Product Inventory </p>
                            <p>Stock Variant remains</p>
                            <p><?php echo $jumlah; ?> Units</p>
                      </div>
                </div>
                <hr>
                <div class="row">
                      <div class="col-md 8">
                          <a class="cart" href="#" id="addcart">ADD TO CART</a>
                      </div>
                      <div class="keranjang" style="float:right;">
                            <a href="pagecart.php"><img style="width:30px;"src="images/Preview/cart.png" alt="" id="gambarcart"/></a>
                            <?php
                                $count = 0;
                                if(isset($_SESSION['cart'])){
                                  $count = count($_SESSION['cart']);
                                }
                                echo '<p id="nilaicart">'.$count.'</p>';
                            ?>
                      </div>
                </div>

          </div>
          <div class="garansi">
              <ul>
                <li>Guarantee transaction 100% safe and easy</li>
                <li>The best price directly from the manufacture</li>
                <li>Costumer service is fast and responsive</li>
              </ul>
          </div>
          <div class="share">
              <p>Share To Your Friends  </p>
              <img src="images/Preview/fb.png" alt="" />
              <img src="images/Preview/insta.png" alt="" />
              <img src="images/Preview/gplus.png" alt="" />
          </div>
      </div>
  </div>
  <div class=" row prodet">
    <p>
      Product Details
    </p>
  </div>
  <hr id="hrpreview">
  <div class="verlineabout"></div>
  <div class="row">
        <div class="col-md-6 about">
              <h3>About Product</h3>
              <p>
                  Sed erat risus, blandit vel metus id, posuere posuere tellus. Duis dapibus nisi tortor, nec pharetra leo pulvinar eu.
                  Duis et pharetra metus, a ornare purus. Suspendisse sapien tellus, dictum ac pellentesque in, auctor at ligula. Duis
                  dapibus ac elit sit amet convallis. Aenean pharetra laoreet turpis eget fringilla. Sed turpis felis, tincidunt a porta eu,                  s id erat. Ut lacus purus, ultricies vitae orci et, fringilla fringilla lorem.
              </p>
        </div>
        <div class="col-md-6 dimension">
              <h3>Product Dimension</h3>
              <table>
                  <tr>
                    <th>Panjang</th>
                    <th>Lebar</th>
                    <th>Tinggi</th>
                  </tr>
                  <tr>
                    <td><?php echo $panjang; ?> cm</td>
                    <td><?php echo $lebar; ?>  cm</td>
                    <td><?php echo $tinggi; ?>  cm</td>
                  </tr>
              </table>
              <hr id="hrdim">
              <h4>About Manufacture</h4>
              <div class="row" >
                    <div class="col-md-6 gambarukm">
                          <a href="#"><img src="images/Preview/men.png" alt="" /></a>
                    </div>
                    <div class="col-md-6 ketukm" style="width:74%;">
                          <h5>Nama UKM</h5>
                          <hr style="margin-top:5px; margin-bottom:5px;">
                          <ul>
                            <li style="float:left;">Alamat Manufaktur</li>
                            <li style="float:right; margin-left:3%; list-style-type:none;">Kontak</li><br>
                            <li style="float:left;">Presentasi Transaksi</li>
                          </ul>
                    </div>

              </div>
        </div>
  </div>
  <div class="row">
      <p class="prorev">Product Review</p>
  </div>
  <hr id="hrpreview2">
  <div class="row userreview" style="width:70%;">
        <div class="review1">
            <a href="#"><img src="images/Preview/men3.png" alt="" style="width: 100px;"/></a>
            <div class="namadkk">
                  <h3>Username</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in urna ultricies, facilisis turpis id, tempor ex. <br>
                    Phasellus non turpis eu sapien sagittis posuere eu vel sapien. Nam placerat aliquet massa, <br>
                    ut sollicitudin metus blandit vitae. Morbi aliquet dolor auctor scelerisque pharetra.  </p>
                  <p style="margin-top:3%;">Review Rating : # # # # # # </p>
            </div>
        </div>
        <hr style="margin-bottom: 5%;margin-top: 5%;">
        <div class="review1">
            <a href="#"><img src="images/Preview/woman2.png" alt="" style="width: 100px;"/></a>
            <div class="namadkk">
                  <h3>Username</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in urna ultricies, facilisis turpis id, tempor ex. <br>
                    Phasellus non turpis eu sapien sagittis posuere eu vel sapien. Nam placerat aliquet massa, <br>
                    ut sollicitudin metus blandit vitae. Morbi aliquet dolor auctor scelerisque pharetra.  </p>
                  <p style="margin-top:3%;">Review Rating : # # # # # # </p>
            </div>
        </div>
  </div>
  <div class="row">
      <p class="prorev">Produk Lainnya</p>
  </div>
  <div class="row" id="produklain">
      <div class="col-md-4" style="padding-left:15%;">
            <img src="images/Preview/woman.png" alt="" style="width:200px; margin:0 auto; display:block;"/>
            <hr style="">
            <p id="namprod">Nama Produk </p>
            <a href="#" style="float:left;">BUY NOW</a>
            <p style="text-align:right;">Harga Produk </p>
      </div>
      <div class="col-md-4" style="padding-left:5%;padding-right:5%;">
            <img src="images/Preview/woman.png" alt="" style="width:200px; margin:0 auto; display:block;"/>
            <hr style="">
            <p id="namprod">Nama Produk </p>
            <a href="#" style="float:left;">BUY NOW</a>
            <p style="text-align:right;">Harga Produk </p>
      </div>
      <div class="col-md-4" style="padding-left:0%;padding-right:15%;">
            <img src="images/Preview/woman2.png" alt="" style="width:200px; margin:0 auto; display:block;"/>
            <hr style="">
            <p id="namprod">Nama Produk </p>
            <a href="#" style="float:left;">BUY NOW</a>
            <p style="text-align:right;">Harga Produk </p>
      </div>
  </div>
<?php include("footer.php") ?>
