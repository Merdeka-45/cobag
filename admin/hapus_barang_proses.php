<?php
require "../koneksi.php";
$id_barang = $_GET['id'];
$query = $conn->query("SELECT * FROM barang WHERE id='$id_barang'");
while($result = $query->fetch_object()){
  //hapus foto
  $hapus_foto = unlink('../images/Gallery/'.$result->gambar);
}
if($hapus_foto){
  $hapus = $conn->query("DELETE FROM barang WHERE id='$id_barang'");
  if($hapus){
    header("location:list_barang.php");
  }else{
    echo 'gagal hapus dr db';
  }
}else{
  echo 'gagal hapus foto';
}
?>
