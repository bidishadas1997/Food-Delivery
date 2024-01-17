<?php 
     include('myConnection.php');
     unset($_SESSION['client_name']);
     unset($_SESSION['contact_no']);
     unset($_SESSION['address']);
     header("location:login.php");
?>