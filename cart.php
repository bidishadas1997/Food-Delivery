<?php
    //include('nav.php');
    include('myConnection.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
</head>
<body> 
<form action="" method='GET'>
<?php
$product_id =$_GET['nam'];
$parent_name =$_GET['pnam'];
$rosho = $_GET['no'];
$rishi = $_GET['btn'];
echo $product_id;
echo "<br>";
echo $rosho;
echo "<br>";
echo $parent_name;
   
$sql="select product_id,price,description,name,image from $parent_name where product_id=$product_id";

echo $sql;
$qry=mysqli_query ($con,$sql);
$row=mysqli_fetch_assoc($qry);
$pp = $row['price']*$rosho;
// echo $row['name'];
$single=array("product_id"=>$product_id, "parent_name"=>$parent_name ,"name"=>$row['name'] ,"price"=>$row['price'],

"image"=>$row['image'],"qty"=>$rosho,"total"=>$pp);
echo "<br>";
if($rishi == "addCart"){
 
//checked
if(empty($_SESSION['cart_info']))
{
    $_SESSION['cart_info']=array($single);
}
else
{
    $flag=0;
    $len=sizeof($_SESSION['cart_info']);
    for($i=0;$i<$len;$i++)
    {
        if($_SESSION['cart_info'][$i]['product_id']==$product_id)
        {
            $_SESSION['cart_info'][$i]['qty']+=$rosho;
            $_SESSION['cart_info'][$i]['total']+=$_SESSION['cart_info'][$i]['price']*
                                                $_SESSION['cart_info'][$i]['qty'];
            $flag=1;
            break;
        }

    }
    if($flag==0)
    {
        array_push($_SESSION['cart_info'],$single);
    }
}
echo "<pre>";
// print_r($_SESSION['cart_info']);die;
// session_destroy($_SESSION['cart_info']);
header("location:show_cart.php");
}
else{
//     echo "<pre>";
// print_r($single);
    $_SESSION['total_amt'] = $single['total'];
    header("location:checkout.php");
}
?>
</form>
</body>
</html>

