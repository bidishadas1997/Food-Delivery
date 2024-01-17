
<?php 
    include ("myConnection.php");
    if(!empty($_SESSION['client_name'])){
        header("location:checkout.php");
    }
    else{
        header("location:login.php");
    }
?>