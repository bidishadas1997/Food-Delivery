<?php
include('myConnection.php');
if(!empty($_SESSION['uName']))
{
    include('nav.php');
    
$sql = "select * from dessert";
$r = mysqli_query($con,$sql);
?> 
<style>
    body{
        background-image:url(https://media.istockphoto.com/id/497959594/photo/fresh-cakes.jpg?s=612x612&w=0&k=20&c=T1vp7QPbg6BY3GE-qwg-i_SqVpstyHBMIwnGakdTTek=);
        background-repeat: no-repeat;
        background-size: 100%;
    }
    th{
        color:black;
    }
</style>
    <center>
        <table border="1" width="500" class="table table-dark table-hover">
            <tr class="table-warning" align="center">
                <th>P_id</th>
                <th>P_name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Name</th>
                <th>Image</th>
                <th colspan="2">OPTIONS</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($r))
            {
                ?>
                <tr align="center">
                    <td><?php echo $row['product_id'];?></td>
                    <td><?php echo $row['parent_name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><img height = 50px  width = 50px src="<?php echo $row['image'];?>" alt="error"></td>
                    <td><a href="delete.php?id=<?php echo $row['product_id'];?>&product_name=dessert"><button class="btn btn-danger">Delete</button></a></td>
                    <td><a href="update.php?id=<?php echo $row['product_id'];?>&product_name=dessert"><button class="btn btn-success">Update</button></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>

        
<?php
}
else{
header('location:index.php');
}





