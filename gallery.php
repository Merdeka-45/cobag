
<?php
require "koneksi.php";
include("header.php");
$limit = 12;
if(isset($_GET['page'])){
  $page = $_GET['page'];
  if($page==1){
    $start = 0;
  }else{
    $start = $page * 6;
  }
}else{
  $page = 1;
  $start = 0;
}
$query_produk = $conn->query("SELECT * FROM barang ORDER BY id DESC LIMIT $start, $limit");

//cek total
$query_all = $conn->query("SELECT * FROM barang ORDER BY id DESC");
$total_data = $query_all->num_rows;
$max_page = ceil($total_data/$limit);
?>

<h1 id="judul_gallery">COBAG GALLERY</h1>
<div class="row product1">
    <?php $no=1;while($result = $query_produk->fetch_object()){ ?>
    <div class="col-md-3">
          <div class="galeritas">
                <a href="preview.php?id=<?php echo $result->id; ?>"><img src="images/Gallery/<?php echo $result->gambar; ?>" alt="images" /></a>
                <hr>
                <div class="ketgaleritas">
                    <p id="namaproduct"><?php echo $result->nama_barang; ?></p>
                    <div class="beli">
                        <a href="preview.php?id=<?php echo $result->id; ?>">BUY NOW</a>
                        <p>IDR <?php echo number_format($result->harga); ?>,-</p>
                    </div>
                </div>
          </div>
    </div>
    <?php
    if($no%4==0){
      echo '<div class="col-md-12"></div>';
    }
    $no++; } ?>
</div>

<br/>
<div align="center">
  <?php if($page!=1){ ?>
    <a class="btn btn-warning" style="" href="gallery.php?page=<?php echo $page-1; ?>">Previous</a>
  <?php } ?>
</div>
<div align="center">
  <?php if($page!=$max_page){ ?>
    <a class="btn btn-warning" style="" href="gallery.php?page=<?php echo $page+1; ?>">Next</a> <br> <br>
  <?php } ?>
</div>

<div class="page">

</div>
<?php include("footer.php"); ?>
