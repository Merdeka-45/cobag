<?php
require "koneksi.php";

$userukm = $_POST['nama_ukm'];
$email = $_POST['email_ukm'];
$phone = $_POST['phone'];
$website = $_POST['web_ukm'];
$alamat = $_POST['alamat'];

$insert_ukm = $conn->query("INSERT INTO data_produsen(nama_ukm,email_ukm,phone,web_ukm,alamat) VALUES ('$userukm', '$email', '$phone', '$website','$alamat')");

if($insert_ukm){
  header('location:home.php');
}else {
  echo "Gagal daftar";
}



?>
