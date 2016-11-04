<?php
session_start();
//session_destroy();
$quantity = $_GET['quantity'];
$id = $_GET['id'];

function find_key_value($array, $key, $val)
{
    foreach ($array as $item)
    {
        if (is_array($item) && find_key_value($item, $key, $val)) return true;

        if (isset($item[$key]) && $item[$key] == $val) return true;
    }

    return false;
}



if(isset($_SESSION['cart'])){
  $cek = find_key_value($_SESSION['cart'], 'id', $id);
  if($cek){
    //cek udah ada ato blom
    foreach ($_SESSION["cart"] as $key => $arr) {
           if ($arr['id'] == $id) {
                unset($_SESSION["cart"][$key]);
           }
     }

     //insert
     $data = array('quantity'=>$quantity, 'id'=>$id);
     array_push($_SESSION['cart'], $data);
  }else{
    //insert
    $data = array('quantity'=>$quantity, 'id'=>$id);
    array_push($_SESSION['cart'], $data);

    // $cart = array();
    // $cart = $_SESSION['cart'];
    // foreach($cart as $c){
    //   echo $c['quantity'];
    //   echo $c['id'];
    // }
  }
}else{
  $_SESSION['cart'] = [];
  $data = array('quantity'=>$quantity, 'id'=>$id);
  array_push($_SESSION['cart'], $data);
}

header("location:".$_SERVER['HTTP_REFERER']);
?>
