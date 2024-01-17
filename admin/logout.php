<?php
    include('myConnection.php');
    unset($_SESSION['uName']);
    unset($_SESSION['naam']);
    header('location:index.php');
?>