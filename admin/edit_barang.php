<?php
require "../koneksi.php";
include("header_admin.php");
$id_barang = $_GET['id'];
$query = $conn->query("SELECT * FROM barang WHERE id='$id_barang'");
while($result = $query->fetch_object()){
  $gambar = $result->gambar;
  $nama_barang = $result->nama_barang;
  $panjang = $result->panjang;
  $lebar = $result->lebar;
  $tinggi = $result->tinggi;
  $jumlah = $result->jumlah;
  $harga = $result->harga;
}
?>
  <div class="" id="formedit">
    <a style="margin-left:8%;" class="btn btn-primary" href="list_barang.php">Kembali</a><br/><br/>
    <?php
    if(isset($_GET['balasan'])){
      if($_GET['balasan']==1){
        echo '<div class="alert alert-success">berhasil mengupdate</div>';
      }else{
        echo 'gagal mengupdate';
      }
    }
    ?>
    <form class="form-horizontal" action="edit_barang_proses.php?id=<?php echo $id_barang; ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Nama Barang</label>
          <div class="col-md-3">
            <input class="form-control" type="text" name="nama_barang" placeholder="nama produk" value="<?php echo $nama_barang; ?>"><br/>
          </div>
      </div>
      <img src="../images/Gallery/<?php echo $gambar; ?>" style="max-height:200px;max-width:200px;margin-left:15%;"><br/>
      <br>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Gambar</label>
          <div class="col-md-3">
            <input type="file" name="gambar">
          </div>
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label">
          kosongkan apabila tidak ingin mengganti foto<br/>
        </label>
      </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Panjang</label>
          <div class="col-md-3">
            <input class="form-control" type="number" name="panjang" placeholder="panjang" value="<?php echo $panjang; ?>">
          </div>
      </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Lebar</label>
          <div class="col-md-3">
            <input class="form-control" type="number" name="lebar" placeholder="lebar" value="<?php echo $lebar; ?>">
          </div>
      </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Tinggi</label>
          <div class="col-md-3">
            <input class="form-control" type="number" name="tinggi" placeholder="tinggi" value="<?php echo $tinggi; ?>">
          </div>
      </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Jumlah</label>
          <div class="col-md-3">
            <input class="form-control" type="number" name="jumlah" placeholder="jumlah" value="<?php echo $jumlah; ?>">
          </div>
      </div>
      <div class="form-group">
          <label for="" class="col-sm-2 control-label">Harga</label>
          <div class="col-md-3">
            <input class="form-control" type="number" name="harga" placeholder="harga" value="<?php echo $harga; ?>">
          </div>
      </div>
      <button style="margin-left:8%;" type="submit" class="btn btn-success">Simpan</button>
    </form>

  </div>
<?php include("footer_admin.php"); ?>
