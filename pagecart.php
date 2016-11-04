<?php include("header.php");
include_once('koneksi.php');
// session_start();
$cart = $_SESSION['cart'];

?>
<div class="row">
      <table class="table table-stripped" id="tablepagecart">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total = 0;
          $no = 1;
          function toRupiah($num){
            return "Rp ".number_format($num,0,'','.');
          }
          foreach($cart as $c){
            $query = $conn->query("SELECT * FROM barang WHERE id = ".$c['id']);
            if($query->num_rows!=0)
            {
              $fetch = $query->fetch_object();
              echo "<tr>
                <td>".$no."</td>
                <td><img style='width:150px;' src='images/Gallery/".$fetch->gambar."' alt='images'/></td>
                <td>".$fetch->nama_barang."</td>
                <td>".$c['quantity']."</td>
                <td>".toRupiah($c['quantity']*$fetch->harga)."</td>
              </tr>";
              $no++;
              $total += $c['quantity']*$fetch->harga;
            }
          }
          ?>
        </tbody>
      </table>
</div>
  <?php if (isset($_SESSION['login_user'])) { ?>
    <div class='container'>
      <div class='row' style="margin-bottom:5%;margin-top:5%;">
          <form method='POST' action='proses_pembelian.php'>
                <div class='col-md-2'>
                  <a class="btn btn-warning" href='clear_cart.php'>Clear Cart</a>
                </div>
                <div class='col-sm-3'>
                      <div class=''>
                        <select name='kurir' id='pilihKurir'>
                          <option value=''>Pilih Kurir</option>
                          <option value='1'>JNE</option>
                          <option value='2'>TIKI</option>
                          <option value='3'>Pos Indonesia</option>
                        </select>
                      </div>
                </div>
                <div class='col-md-4'>
                  <button type='submit' id="tombolproses">Proses Pembelian</button>
                </div>

                <div class='col-sm-3'>
                  <label>Total</label>
                  <div><span id='total-biaya'><?php echo $total; ?></span><span id='biaya-kurir'></span></div>
                </div>
          </form>
      </div>
      <!-- <div class="col-md-2">
        <a href="proses_pembelian.php" id="tombolproses">Proses Ke Pembelian</a>
      </div> -->
    </div>

    <script>
      $("#pilihKurir").change(function(){
        var kurir = $("#pilihKurir").val();
        var biaya = 0;
        var totalAwal = parseInt($("#total-biaya").text());

        if(kurir)
        {
          if(kurir==1)
          {
            biaya = 15000;
          }
          else if(kurir==2)
          {
            biaya = 20000;
          }
          else
          {
            biaya = 17500;
          }
        }

        $("#biaya-kurir").text(" + "+biaya+" = "+(totalAwal+biaya));

      });
    </script>

  <?php }else{ ?>
    You must loggedin first
  <?php } ?>

<?php include("footer.php") ?>
