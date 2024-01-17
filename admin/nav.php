<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <script src="../bootstrap/dist/js/jquery.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.bundle.js"></script>
    <style>
        .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        .bread{
            text-decoration:none;
        }
        .botam{
            background-color: grey;
            right: 0px;
        }
        .row1{
            padding: 10px;
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="bread.php">Breads</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cookie.php">Cookies</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="dessert.php">Desserts</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="beverage.php">Beverages</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="snack.php">Snacks</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cafe.php">cafē</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
        </li>
        <li>
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Cakes</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="celebration.php">Celebration</a>
                    <a class="dropdown-item" href="pastry.php">Pastry</a>
                    <a class="dropdown-item" href="muffin.php">Muffins</a> 
                </div>
            </div>
        </li>
    </ul>
    <div class="container row1">
        <div class="col-md-11 text-right">
            <a href="bread2.php" class="btn btn-secondary">Add</a>
        </div>
        <div class="lo btn">
            <a href="logout.php"><img height=40 width=40 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT03p5mqWsFP23TtBNCxW9QdTYr2RQzbmg7EA&usqp=CAU" alt=""></a>
        </div>
    </div>
    </nav>
</body>
    </html>