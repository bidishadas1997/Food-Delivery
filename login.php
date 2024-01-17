<!DOCTYPE html>
<?php include('nav.php');  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <script src="../bootstrap/dist/js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <br><br><br><br><br><br><br><br><br>
    <div class="row r1"></div>
    <div class="row b1">
    <div class="col-sm-5"></div>
            <div class="card align-middle">
                <div class="card-header c1" style="box-shadow: 0px 8px 20px -10px rgb(201, 201, 201);"> <center><b>L O G I N</b> </center> </div>  
                <div class="card-body c2">
                    <form action="login2.php" method="post">
                    <input type="text" name="un" class="form-control" placeholder="Username">
                    <br>
                    <input type="password" name="ps" class="form-control" placeholder="Password">
                    <br><br>
                    <center><button type="submit" class="btn btn-success" >LOGIN</button></center>
                    </form>
                </div>
            </div>
        <div class="col-sm-4"></div>
    </div>
</body>
</html>