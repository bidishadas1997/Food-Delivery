<?php
include('nav.php');
    $UName = $_POST['un'];
    $FName = $_POST['fn'];
    $SName = $_POST['sn'];
    $Email = $_POST['e'];
    $ContactNo = $_POST['cn'];
    $Address = $_POST['add'];
    $password = $_POST['p'];

    include('myConnection.php');
    $sql = "insert into signup values('$UName' , '$FName', '$SName' , '$Email' ,'$ContactNo' , '$Address' , '$password')";
    echo $sql;
    $r = mysqli_query($con , $sql);
    if($r>0){
        header('location:index.php');
    }
    else{
        header('location:signUp.php');

    }