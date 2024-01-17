<?php
    include ("myConnection.php");
    $index = $_GET['index'];
    // echo $product_id;
    echo "<br>".$index;
    $data=$_SESSION['cart_info'];
    echo "<pre>";
    print_r($data);
    unset ($data[$index]);
    // $data=array_values ($data); echo "<h2>after remove</h2>";
    echo "<pre>";
    print_r($data);

    $data=array_values ($data);
    echo "<pre>";
    print_r($data);
    // die;
    $_SESSION['cart_info'] = $data;
    // info = $data;
    header ('location:show_cart.php');
?>