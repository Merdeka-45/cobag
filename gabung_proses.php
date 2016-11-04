<?php
include 'koneksi.php';

$nama = $_POST['namleng'];
$ukm = $_POST['ukm'];
$email = $_POST['alamatemail'];
$notelp = $_POST['phonum'];

$nama_foto = $_FILES['gambar']['name'];
$type = $_FILES['gambar']['type'];

$nama_foto_baru = gmdate("H-i-s-d-m-Y", time()+3600*7).'.jpg';

//insert ke db
$insert_db = $conn->query("INSERT INTO gabung_ukm(nama,ukm,email,notelp,gambar) VALUES ('$nama', '$ukm', '$email', '$notelp', '$nama_foto_baru')");
if($insert_db){
  //insert_foto
  // $insert_foto_ukm = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/Gallery/'.$nama_foto_baru);
  // if($insert_foto_ukm){
    header('location:gabung.php?&balasan=1');
  // }else{
  //   header('location:gabung.php?&balasan=2');
  // }
}else{
  echo 'gagal insert db';
}
 ?>
