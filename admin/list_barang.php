<?php
include("header_admin.php");
require "../koneksi.php";
$query_produk = $conn->query("SELECT * FROM barang ORDER BY id DESC");
function toRupiah($num){
  return "Rp ".number_format($num,0,'','.');
}
?>
    <a href="insert_barang.php" class="btn btn-success" id="tombolinsert">Tambah barang</a>
    
    <table class="table table-striped" id="listtable">
      <thead>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Panjang</th>
          <th>Lebar</th>
          <th>Tinggi</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1;while($result = $query_produk->fetch_object()){ ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><img src="../images/Gallery/<?php echo $result->gambar; ?>" alt="images" style="max-height:70px"/></td>
          <td><?php echo $result->nama_barang; ?></td>
          <td><?php echo $result->panjang; ?>cm</td>
          <td><?php echo $result->lebar; ?>cm</td>
          <td><?php echo $result->tinggi; ?>cm</td>
          <td><?php echo $result->jumlah; ?></td>
          <td><?php echo toRupiah($result->harga); ?></td>
          <td>
            <a href="hapus_barang_proses.php?id=<?php echo $result->id; ?>" onclick="return confirm('Hapus <?php echo $result->nama_produk; ?>?')">
              <button type="button" class="btn btn-danger">Hapus</button></a>
            <a href="edit_barang.php?id=<?php echo $result->id; ?>">
              <button type="button" class="btn btn-warning">Edit</button></a>
          </td>
        </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
<?php include("footer_admin.php"); ?>
