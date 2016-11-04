<?php include("header_admin.php"); ?>

    <div class="row" id="semuainsert">
        <a href="list_barang.php" class="btn btn-primary">Kembali</a> <br> <br>
        <div class="row">
            <div class="col-md-9">
              <form class="form-group" action="insert_barang_proses.php" method="post" enctype="multipart/form-data">
                  <input class="form-control" type="text" name="nama_barang" placeholder="nama produk"><br/>
                  <input type="file" name="gambar"><br/>
                  <input class="form-control" type="number" name="panjang" placeholder="panjang cm"></br>
                  <input class="form-control" type="number" name="lebar" placeholder="lebar cm"></br>
                  <input class="form-control" type="number" name="tinggi" placeholder="tinggi cm"></br>
                  <input class="form-control" type="number" name="jumlah" placeholder="jumlah"></br>
                  <input class="form-control" type="number" name="harga" placeholder="harga"></br>
                  <button class="btn btn-success" type="submit">Simpan</button>
              </form>
            </div>
        </div>
    </div>

<?php include("footer_admin.php"); ?>
