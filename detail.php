<?php
    include('nav.php');
    $i=$_GET['id'];
    $pn=$_GET['p_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <script>
        var b
        
        function m()
        {
            b=document.getElementById("rosho").value;
            b--;
            if (b<1) {
                b=1;                
                alert("Min limit reached");
            }
            document.getElementById("rosho").value=b;
        }
        function p()
        {
            b=document.getElementById("rosho").value;
            b++;
            if (b>20) {
                b=20;
                alert("Max limit reached");
            }
            document.getElementById("rosho").value=b;
        }
    </script>
</head>
<body>
    <br><br><br><br>
    <div class="row">
    <?php
            $sql = "select * from $pn where product_id=$i";
            $r = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($r)) { 
                ?>
        <div class="col-4">
           &nbsp; <img height = 350px width = 350px   src="<?php echo $row['image'];?>">
        </div>
        
        <div class="col-6">
            
                    <div class="card">
                        <div class="card-body">
                            <form action="cart.php">
                            <h1 class="card-title"><?php  echo $row['name'];  ?></h1>
                            <p class="card-text"><?php  echo $row['description'];  ?></p>
                            <p class="card-text"> <b>Price ₹</b><?php  echo $row['price'];  ?></p>
                            <input type="hidden" name ='nam' readonly ="readonly" value= "<?php  echo $row['product_id'];?>">
                            <input type="hidden" name ='pnam' readonly ="readonly" value= "<?php  echo $row['parent_name'];?>">
                            <p><b>Quantity
                                <button type = "button" class="btn btn-danger" onclick="m()">-</button>
                                <input type="number" id="rosho" name ="no"  readonly="readonly" value="1">
                                <button type ="button" class="btn btn-success" onclick="p()">+</button>
                            </b></p>
                            <button type="submit" value="addCart" name="btn"  class="btn btn-warning botam2">Add to Cart</button>
                            <button href="buynow.php"  value="BuyNow" name="btn" class="btn btn-primary botam2">Buy Now!</button>
                            </form>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>

</html>