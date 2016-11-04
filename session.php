<?php
require ("koneksi.php");


// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = $conn->query("SELECT nama FROM data_user WHERE username='$user_check'");
$row = $ses_sql->fetch_object();
// $login_session =$row['username'];
  if(!isset($login_session)){
     $_SESSION['nama'] = $row['nama'];
   // Redirecting To Home Page
  }
?>
