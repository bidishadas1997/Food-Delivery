<?php
    include ("myConnection.php");
    $userName = $_POST['un'];
    $password = $_POST['ps'];
    // echo $userName;
    // echo $password;die;

    $sql = "select * from signup where uName = '$userName' and password = '$password'";
    // echo $sql;die;
    $r = mysqli_query($con,$sql);
    if($row = mysqli_fetch_assoc($r))
    {
        // echo "hello";
        $_SESSION['client_name'] = $row['fName'];
        $_SESSION['contact_no'] = $row['cn'];
        $_SESSION['address'] = $row['address'];
        header("location:index.php");
    }
    else
        // echo "world";die;
        header("location:login.php");
    
?>