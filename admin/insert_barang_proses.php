<?php
require "../koneksi.php";
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$tinggi = $_POST['tinggi'];

$nama_foto = $_FILES['gambar']['name'];
$type = $_FILES['gambar']['type'];

$nama_foto_baru = gmdate("H-i-s-d-m-Y", time()+3600*7).'.jpg';

//insert ke db
$insert_db = $conn->query("INSERT INTO barang(nama_barang,gambar,jumlah,harga,panjang,lebar,tinggi) VALUES ('$nama_barang', '$nama_foto_baru', '$jumlah', '$harga', '$panjang', '$lebar', '$tinggi')");
if($insert_db){
  //insert_foto
  $insert_foto = move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/Gallery/'.$nama_foto_baru);
  if($insert_foto){
    header('location:list_barang.php');
  }else{
    echo 'gagal insert foto';
  }
}else{
  echo 'gagal insert db';
}
?>
