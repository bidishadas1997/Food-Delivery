<?php
    $pId = $_POST['PID'];
    $pN = $_POST['PN'];
    $pr = $_POST['p'];
    $des = $_POST['d'];
    $nm = $_POST['n'];
    $img = $_FILES['i'];

    include('myConnection.php');
    echo "<pre>";
    print_r($img); 
    $err = $img['error'];
    $iname = $img['name'];
    $tloc = $img['tmp_name'];
    if($err == 0)
    {
        $cloc = "product_img/".$iname;
        $r = move_uploaded_file($tloc,$cloc);
       
        if($r>0)
        {
            $sql = "insert into ".$pN." values($pId , '$pN' , $pr , '$des' , '$nm' ,'$cloc')";
            echo $sql;
            $r = mysqli_query($con , $sql);
            if($r>0){
                header('location:'.$pN.'.php');
            }
            else{
                header('location:bread2.php');
            }

        }
    }
?>


