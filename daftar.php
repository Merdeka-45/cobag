<?php
require "koneksi.php";

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$gender = $_POST['gender'];

$insert_user = $conn->query("INSERT INTO data_user(username,nama,email,password,tanggal,bulan,tahun,gender) VALUES ('$username','$nama', '$email', '$password', '$tanggal','$bulan','$tahun', '$gender')");

if($insert_user){
  header('location:configuration.php');
}else {
  echo "Gagal daftar";
}



?>
