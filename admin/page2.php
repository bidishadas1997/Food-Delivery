<?php
include('myConnection.php');
    $u = $_GET['un'];
    $p = $_GET['ps'];

    $sql = "select * from admin where Uname='$u' and Password='$p'";
    $r = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($r)){
        $_SESSION['error_msg'] = "";
        $_SESSION['uName']=$u;
        $_SESSION['naam']=$row['Name'];
        header('location:dashboard.php');
    }
    else{
        $_SESSION['error_msg'] = "please enter proper id or password";
        header('location:index.php?');
    }
?>
