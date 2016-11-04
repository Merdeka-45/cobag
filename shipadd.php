<?php include("header.php"); ?>
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
</div>

<?php include("footer.php"); ?>
