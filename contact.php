<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            margin-top: 10%;
            background-color: #fef3c2;
        }
        #container {
            min-height: 440px;
            min-width: 395px;
            display:flex;
            justify-content: center;
            border: 2px solid black;
            align-content: center;
            height: 440px;
            width: 50%;
            background-color:white;
           
        }

        .contactBox {
            min-height: 210px;
            min-width: 200px;
            
            margin-top:38px;
            height: 345px;
            width: 70%;
            box-shadow: -2px -3px 3px 0 black,2px 3px 3px 0 black; 
            align-content: center;
            padding-bottom: 5px;
            padding-left: 15px;
            border: 2px solid black;
            background-color: white ;

        }

        .border1 {
            display: block;
            border: 2px solid;
            border-style: dotted;
           
        }

        img{
            float: left;
            margin-top: -10px;
        }
        a{
            padding-left: 10px;
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_header.php';
    ?>

    <div id="container">
        <div class="contactBox">
            <h1 style="text-align:center">Contact Us</h1>

            <img src="http://localhost/learnphp/WaterDelivery/ImageLogo/Location.png" height="40px" width="35px">
            <a href="">helo</a><br>
            <hr class="border1">
            <br>
            <img src=" http://localhost/learnphp/WaterDelivery/ImageLogo/Call.png" height="45px" width="40px">
            <a href="">010-3993-848</a><br>
            <hr class="border1">
            <br>
            <img src="http://localhost/learnphp/WaterDelivery/ImageLogo/Email.png" height="45px" width="40px">
            <a href="">hello@gmail.com</a><br>
            <hr class="border1">
            <br>
            <img src="http://localhost/learnphp/WaterDelivery/ImageLogo/Browser.png" height="45px" width="40px">
            <a href="">Browser</a><br>
            <hr class="border1">
        </div>

    </div>

    <style src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>

</html>