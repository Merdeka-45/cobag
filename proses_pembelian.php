<?php
  session_start();
  include('koneksi.php');

  if(isset($_SESSION['cart']) && isset($_SESSION['login_user']))
  {

    if(!empty($_POST['kurir']))
    {
      $kurir = $_POST['kurir'];
      $queryUser = $conn->query("SELECT id FROM data_user WHERE email = '".$_SESSION['login_user']."'");
      if($queryUser->num_rows!=0)
      {

        $fetchUser = $queryUser->fetch_object();
        $idUser = $fetchUser->id;

        $id_pembelian = sha1(rand(1,100).rand(1,100).rand(1,100).rand(1,100).date("Y-m-d h:i:s").rand(1,100).rand(1,100).rand(1,100));
        $conn->query("INSERT INTO pembelian (id_user,id_checkout,status,kurir) VALUES($idUser,'$id_pembelian',0,$kurir)");

        foreach ($_SESSION['cart'] as $cart) {
          $idBarang = $cart['id'];
          $quantity = $cart['quantity'];
          $conn->query("INSERT INTO pembelian_detail (id_pembelian,id_barang,quantity) VALUES('$id_pembelian',$idBarang,$quantity)");
        }

      }
    }

  }

  header("Location:configuration.php");
