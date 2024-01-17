<?php
    $var1 = $_POST['pID'];
    $var2 = $_POST['pN'];
    $var3 = $_POST['P'];
    $var4 = $_POST['D'];
    $var5 = $_POST['N'];
    $var6 = $_POST['I'];
    $var7 = $_FILES['I2'];
    
    include('myConnection.php');
        
    echo "<pre>";
    print_r($var7); 
    $err = $var7['error'];
    $iname = $var7['name'];
    $tloc = $var7['tmp_name'];
     if($err == 0)
    {
        $cloc = "product_img/".$iname;
        $r = move_uploaded_file($tloc,$cloc);
    
        if($r>0){
            $sql = "update  bread set parent_name='$var2' , price=$var3 , description='$var4' , name='$var5', image='$cloc' where product_id=$var1 ";
        }
        else{
            $sql = "update  bread set parent_name='$var2' , price=$var3 , description='$var4' , name='$var5', image='$var6' where product_id=$var1 ";
        }
    }
    else{
        $sql = "update  bread set parent_name='$var2' , price=$var3 , description='$var4' , name='$var5', image='$var6' where product_id=$var1 ";
    }

echo $sql;
    $r = mysqli_query($con , $sql);
    if($r>0){
        header('location:'.$var2.'.php');
    }
    else{
    header('location:update.php?id='.$var1);
    }

?>