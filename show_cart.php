<?php
    include('nav.php');
    // session_destroy($_SESSION['cart_info']);
    // include('myConnection.php');
    ?>
    <div style="height:30px"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                $len=sizeof($_SESSION['cart_info']);
                $sum=0;
                if($len>0)
                {

                
                ?>
                    <table class="table table-responsive table-hover">
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>

                        </tr>
                        <?php
                        // echo "<pre>";
                        // print_r($_SESSION['cart_info']);
                        // echo $_SESSION['cart_info'][0]['parent_name'];die;
                        for($i=0;$i<$len;$i++)
                        {
                            $sum+=$_SESSION['cart_info'][$i]['total'];
                        
                        ?>
                        <tr>
                            <td><img src="<?php echo $_SESSION['cart_info'][$i]['image'];?>" height="80" width="80"></td>
                            <td><?php echo $_SESSION['cart_info'][$i]['name']; ?></td>
                            <td><i class ="fas fa-rupee-sign"></i><?php echo $_SESSION['cart_info'][$i]['price'];?> /-</td>
                            <td><?php  echo $_SESSION['cart_info'][$i]['qty']; ?></td></td>
                            <td><i class ="fas fa-rupee-sign"></i><?php echo $_SESSION['cart_info'][$i]['total'];?> /-</td>
                            <td><a href="remove.php?index=<?php echo $i;?>" class="btn btn-danger">X</a></td>
                        </tr>
                        <?php
                            }
                            ?>
                            <tr>
                                <th></th>
                                <th></th>

                                <th colspan="2">
                                    <p class="btn btn-danger">Gross Total :</p>
                            </th>
                            <?php $_SESSION['total_amt']=$sum;?>
                            <th><i class="fas fa-rupee-sign"></i><?php echo $sum?> /-</th>
                            <th></th>
                            <th></th>
                            </tr>
                    </table>
            </div>
            <div class="col-lg-4"></div>

        </div>
        <center><a href="checkout.php" class ="btn btn-success">Check Out</a></center>
<?php }
    else{
        ?>
        <center><h2>Cart Is Empty</h2></center>
        <?php
    } ?>
    </div>
    