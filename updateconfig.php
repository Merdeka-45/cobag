<?php
require 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$password = $_POST['newpassword'];
$notelp = $_POST['notelp'];

$updateconfig = "UPDATE data_user SET nama='$nama_barang', email='$email', tanggal='$tanggal', bulan='$bulan', tahun='$tahun',
password='$password' WHERE id='$id'";

if ($updateconfig) {
  header('location:configuration.php?id='.$id.'&balasan=1');
  }else{
  header('location:configuration.php?id='.$id.'&balasan=2');
  }

 ?>
