<?php
    include('myConnection.php');
    if(!empty($_SESSION['uName']))
    {
        include('nav.php');
        // code
    }
        
    else{
        header('location:index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="https://exceltable.com/en/templates/images/template12-1.gif" alt="error" width ="100%">
</body>
</html>

