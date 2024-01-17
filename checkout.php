<?php 
    include ("myConnection.php");
    if(!empty($_SESSION['client_name'])){
        header("location:payment.php");
    }
    else{
        header("location:login.php");
    }
?>