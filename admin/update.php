<?Php 
    $row1 = $_GET['id'];
    $Pn = $_GET['product_name'];

    include('myConnection.php');
    $sql = "select * from ".$Pn." where product_id=$row1";
    echo $sql;
    $r = mysqli_query($con,$sql);

    if($row = mysqli_fetch_assoc($r))
        {
            ?>
            <form action="updateVal.php" method='POST' enctype='multipart/form-data'>

            <input type="text" name="pID" value= "<?php echo $row['product_id']; ?>" readonly="readonly"> <br>
            <input type="text" name="pN" value= "<?php echo $row['parent_name']; ?>"> <br>
            <input type="text" name="P" value= <?php echo $row['price']; ?>> <br>
            <input type="text" name="D" value= "<?php echo $row['description']; ?>"> <br>
            <input type="text" name="N" value= "<?php echo $row['name']; ?>"> <br>
            <img height = 50px  width = 50px src="<?php echo $row['image'];?>" alt="error">  <br>
            <input type="hidden" name="I" value="<?php echo $row['image'];?>">
            <input type="file" name="I2">
            <button type="submit">Submit</button>

            </form>
            <?php
        }
?>
