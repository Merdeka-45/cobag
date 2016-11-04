<?php
require "../koneksi.php";
$id = $_GET['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$tinggi = $_POST['tinggi'];

$nama_foto = $_FILES['gambar']['name'];
$type = $_FILES['gambar']['type'];

//cek gambar
if($nama_foto!=null OR $nama_foto!=''){
  $nama_foto_baru = gmdate("H-i-s-d-m-Y", time()+3600*7).'.jpg';

  $insert_foto = move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/Gallery/'.$nama_foto_baru);
  //query foto
  $query = "UPDATE barang SET nama_barang='$nama_barang', panjang='$panjang', lebar='$lebar', tinggi='$tinggi', jumlah='$jumlah',
  harga='$harga', gambar='$nama_foto_baru' WHERE id='$id'";
}else{
  //query tanpa foto
  $query = "UPDATE barang SET nama_barang='$nama_barang', panjang='$panjang', lebar='$lebar', tinggi='$tinggi', jumlah='$jumlah',
  harga='$harga' WHERE id='$id'";
}

//UPDATE
$update = $conn->query($query);
if($update){
  header('location:edit_barang.php?id='.$id.'&balasan=1');
}else{
  header('location:edit_barang.php?id='.$id.'&balasan=2');
}
?>
