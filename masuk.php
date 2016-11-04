<?php
session_start();

require 'koneksi.php';

$email = $_GET['email'];
$password = $_GET['password'];

$login_user = $conn->query("SELECT * FROM data_user WHERE email='$email' AND password='$password'");
//$result = $login_user->fetch_object();
//var_dump($login_user);die();
$rows = mysqli_num_rows($login_user);
if ($rows == 1) {
  $fetch = $login_user->fetch_object();
  $_SESSION['login_user'] = $fetch->email;
  header('location:configuration.php');
  } else {
  $message = 'Email dan password anda salah';
  echo "<script type='text/javascript'>alert('$message');</script>" ;
}

?>
