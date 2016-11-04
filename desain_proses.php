<?php
require 'koneksi.php';

session_start();
$query_akun = $conn->query("SELECT * FROM data_user WHERE email = '".$_SESSION['login_user']."'");

$result = $query_akun->fetch_object();
  $id = $result->id;
  $nama = $result->nama;

$badantas = $_POST['badan-tas'];
$atastas = $_POST['atas-tas'];
$kantongbawahtas = $_POST['kantong-bawah'];
// $pegangan = $_POST['pegangan'];
$zipper = $_POST['zipper'];

$desaindb = $conn->query("INSERT INTO desaintas(atasTas,kantongTas,badantas,zipper,id_user) VALUES ('$atastas','$kantongbawahtas','$badantas','$zipper','$id')");
if($desaindb){
  header('location:design.php?balasan=1');
} else {
  header('location:design.php?balasan=2');
}
  // if(isset($atastas)){
  //   echo '<div class="row" style="height: 350px; margin: 10% 0% 0% 10%;">';
  //   echo '<img style="width: 150px; position:absolute;" src="images/preview_desain/badan-tas-'.$badantas.'.png">';
  //         // echo '<div>';
  //         //       echo '<img style=" width: 150px; position: absolute;" src="images/preview_desain/preview-pegangan-'.$pegangan.'.png">';
  //         // echo '</div>';
  //         echo '<div>';
  //               echo '<img style=" width: 150px; position: absolute;" src="images/preview_desain/preview-kantong-bawah-'.$kantongbawahtas.'.png">';
  //         echo '</div>';
  //         echo '<div>';
  //             echo '<img style=" width: 150px; position: absolute;" src="images/preview_desain/preview-zipper-'.$zipper.'.png">';
  //         echo '</div>';
  //         echo '<div>';
  //               echo '<img style=" width: 150px; position: absolute;" src="images/preview_desain/preview-atas-'.$atastas.'.png">';
  //         echo '</div>';
  //   echo '</div>';
  //
  //   echo $nama;
  // }
?>
