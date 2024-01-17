<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>  
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <script src="../bootstrap/dist/js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.js"></script>
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Rubik+Distressed&display=swap');        
         .btn-grad {
            background-image: linear-gradient(to right, #ef9012 0%, #945e28  51%, #c86b1b  100%);
            padding: 15px;
            text-align: center;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            display: block;
            height: 20px;
            width: 300px;
            border: none;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
          body
          {
            background-image:url(https://c0.wallpaperflare.com/preview/167/509/265/bread-korea-bakery-baguette-bread.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
          }
          .rum
          {
            padding: 100px;
          }
          .s1
          {
            margin-top: -15px;
          }
          .a2
          {
            color: black;
            text-align: center;
            margin-left: 30px;
          }
         .a1
         {
            color: rgb(179, 179, 179);
            /* margin-left: 30px; */
         }
         .c1
         {
            font-size: 20px;
            background-image: linear-gradient(to right, #ef9012 0%, #945e28  51%, #9d6715  100%);
            color:white;
            font-family: 'Rubik Distressed', cursive;
         }
        </style>
    </head>

    <body>
         <div class="row b1">
            <div class="col-sm-4"></div>
                <div class="card align-middle">
                  <div class="card-header c1" style="box-shadow: 0px 8px 20px -10px rgb(201, 201, 201);"> <center><b>A D M I N</b> </center> </div>  
                    <div class="card-body c2">
                      <form action="page2.php">
                        <input type="text" name="un" class="form-control" placeholder="Username">
                        <br>
                        <input type="password" name="ps" class="form-control" placeholder="Password">
                        <br><br>
                        <button type="submit" class="btn-grad"><p class="s1"> Login</p></button>                        
                      </form>
                    </div>
                </div>
            <div class="col-sm-4"></div>
        </div>
    </body>
</html>