<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lola{
            background-color:
        }
        .banr{
            background-image : url(https://tse1.mm.bing.net/th?id=OIP.cBQvkxgFQuaDf-AWoO1ojwHaE7&pid=Api&P=0);
            width: 100%;
            height: 200px;
            justify-content: center;
            margin: 0;
            padding: 0;
        }
        .pp1{
            font-family: 'Times New Roman', Times, serif;
            font-size: 150px ;
        } 
        .pop
            {
                /* background-color: red; */
                height: 50px;
                width: 80px;
                justify-content: center;
                padding: 5px;
                margin-left: 1100px;
                color: white;

            }
            .pop:hover
            {
                background-color: red;
            }
            .carousel-inner img 
            {
                width: 100%;
                height: 100%;
            }
            .p1
            {
                /* font-family: "Segoe UI,Arial,sans-serif"; */
                font-weight: 400;
                margin: 10px 0;
                font-size: 30px;
            }
            .p2
            {
              font-style: italic;
              /* font-family: "Lato", sans-serif; */
              font-size: 18px;
              line-height: 1.5;
              color: rgb(173, 173, 173);
            }
          .p3
          {
              /* font-family: "Lato", sans-serif; */
              font-size: 17px;
              line-height: 1.5;
          }
          .d1
          {

            background-color:;
            height: 800px;
            width: 100%;
          }
          .P4
          {
            /* font-family: "Segoe UI,Arial,sans-serif"; */
            color: white;
            font-size: 30px;
            letter-spacing: 4px;
          }
          .p5
          {
            /* font-family: "Lato", sans-serif; */
            color: rgb(163, 163, 163);
            font-style: italic;
            font-size: 15px;
            line-height: 1.5;
            letter-spacing: 2px;
          }
          .w3-text-grey 
          {
            color: #757575;
            box-sizing: inherit;
          }
        .w3-red
          {
          background-color: #f44336;
          color: white;
          margin-left: 16px;
          display: inline-block;
          padding-left: 8px;
          padding-right: 8px;
          text-align: center;
          }
          .c1
          {
            color: #757575;
            font-size: 15px;
          }
          .b1
          {
            background-color: brown;
          }
          .botam2
          {
            background-color: brown;
            color: white;
            border-radius: 0;
          }
          .p6
          {
            /* font-family: "Segoe UI",Arial,sans-serif; */
            font-weight: 400;
            margin: 10px 0;
            font-size: 30px;

          }
          .pp
          {
            /* font-family: "Lato", sans-serif; */
          }
          .t1
          {
            margin-left: 300px;
          }
          .d2
          {
            height: 300px;
            width: 400px;
            display: inline-block;
            background-color: #f44336;
            margin-left: 300px;
          
          }
          .d3
          {
            height: 300px;
            width: 400px;
            display: inline-block;
            background-color: #f44336;
          
          }
    </style>
</head>
<body>
    <?php
        include('nav.php');
        // include('myConnection.php');
        $sql = "select * from muffin";
        $r = mysqli_query($con,$sql);

    ?>

    <!-- Banner -->
          <br><br><br><br>
    <div class="row banr">
        <p class="pp1">M U F F I N</p>
        <!-- <div class="p1"><img src="bearBanr.jpeg" alt="breadBanr_error"></div> -->
    </div>
    <br><br>
    <div class ="d1">
        
        <br><br>
        <div class="row lola">
          <div class="col-sm-2" style="background-color:;"></div>
          <div class="col-sm-8">
            <div class="row">
            <?php
                while($row = mysqli_fetch_assoc($r)) { 
                    ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <img height = 350px   src="<?php echo $row['image'];?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?php  echo $row['name'];  ?></h4>
                                    <p class="card-text">Price ₹<?php  echo $row['price'];  ?></p>
                                    <p class="card-text"></p>
                                    <a href="detail.php?id=<?php echo $row['product_id'];?>&p_name=<?php echo $row['parent_name']; ?>" class="btn botam2">Details</a>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            ?>
          </div>
        </div>
      </div>
      
    </div>
    </div>
    <br><br><br><br><br><br><br>
</body>
</html>


   




