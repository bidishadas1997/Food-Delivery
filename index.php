<?php
    include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
        .carousel-inner img 
            {
                width: 1500px;
                height: 550px;
                
            }
            .megaDiv{
            background-image: url(https://i.postimg.cc/W3y0XJQ2/bakery1.jpg);
            width:100%;
            height: 1000px;
            }
        </style>
</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1" class="active"></li>
              <li data-target="#demo" data-slide-to="2" class="active"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="cake.php"><img src="https://imgcc-a.akamaihd.net/offers/451137/636886937732091990.jpg?width=1024&height=614&anchor=middlecenter&cropxunits=100&cropyunits=100&mode=crop&crop=(0.0,29.39189,100.0,86.58301)" alt="error"></a>
                <div class="carousel-caption">
                  <h1>Cakes&Cookies</h1>
                  <h3>Celebrate your special day with us!</h3>
                </div>   
              </div>
              <div class="carousel-item">
                <a href="snack.php"><img src="https://wallpapercave.com/wp/wp1929444.jpg" alt="error"></a>
                <div class="carousel-caption">
                  <h1>Snacks</h1>
                  <h3>Sink your teeth into deliciousness.</h3>
                </div>   
              </div>
              <div class="carousel-item">
                <a href="cafe.php"><img src="https://images5.alphacoders.com/461/461634.jpg" alt="error"></a>
                <div class="carousel-caption">
                  <h1>Cafe</h1>
                  <h3>Start your day with a hot coffee</h3>
                </div>   
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <br>
          <div class="megaDiv">
          <center>
          <h1>Welcome!!</h1>
          <h3>GOOD <BR>FOOD</BR>MOOD</h3>
          <br> <br>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="card">
                       <img src="http://3.bp.blogspot.com/-K2pjm9EsMsE/UB4zkPLgzII/AAAAAAAABLQ/UXveugclvrI/s1600/Snacks-11.jpg" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">Snacks</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                       <img src="https://tse1.mm.bing.net/th?id=OIP.JcqhS1AjFBUEe6Y2-nsPPAHaHa&pid=Api&P=0" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">Cake & cookies</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                       <img src="https://tse1.mm.bing.net/th?id=OIP.BWhVP6RcASuwRyXctNjIzAHaFI&pid=Api&P=0" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">Breverages</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                       <img src="https://tse4.mm.bing.net/th?id=OIP.PGflPWglidy4zgLdOsHiDAHaEo&pid=Api&P=0" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">cafē</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                       <img src="https://tse3.mm.bing.net/th?id=OIP.IKrpwqPbEpdm7FZIUKnsgQHaE3&pid=Api&P=0" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">Desserts</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                     <img src="https://tse2.mm.bing.net/th?id=OIP.FAbAlYXqs2I4GMYRF_s61QHaIh&pid=Api&P=0" alt="error">
                      <div class="card-body">
                        <h4 class="card-title">Breads</h4>
                      </div>
                    </div>
                  </div>
        </center> 
        </div>
</body>
</html>

