<?Php 
    $row1 = $_GET['id'];
    $Pn = $_GET['product_name'];
    $con = mysqli_connect('localhost', 'root', '','mainproject');
    $sql = "delete from ".$Pn." where product_id= $row1";
    echo $sql;
    $r=mysqli_query($con , $sql);
    header('location:'.$Pn.'.php');

?>