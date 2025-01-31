<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color:white;
            margin-top:90px;
        }
        .container_about{
            margin: auto;
            height: 550px;
            max-width: 400px;
            width: 60%;
            border: 2px solid bl;
            background-color: white;
            
            
        }
         .imgBox{
            position: relative;
            border-radius: 50%;
            top: -17px;
            left:-25%;
            height:200px;
            border: 1px solid black;
            width: 200px;
            background-image: url("https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&cs=tinysrgb&w=400");
            background-repeat: no-repeat;
            /* background-color: rgb(161, 247, 184); */
         }
         .textBox{
            margin-top: 40px;
            margin-left: 60px;
            padding: scroll;
            border: 2px dotted black;
            height: 110px;
            width: 12rem;
            position: relative;
            overflow-y: hidden;
            background-image: url("https://img.freepik.com/free-photo/abstract-purple-smooth-wave-lines_1017-24865.jpg");
            
         }
        .imgText{
            padding: 1%;
            display: inline-flex;
        }
        .descBox{
            position: relative;
            overflow-y: hidden;
            top: 80px;
            left: -115px;
            height: 250px;
            max-width: 210px;
            width: 30vw;
            border: 2px solid;
            padding: 5px;
            gap: 5px;
            /* background-color: #ffe6e6; */
            background-image: url("https://img.freepik.com/free-photo/abstract-purple-smooth-wave-lines_1017-24865.jpg");
        }
        .box2{
            display: inline-flex;
         }
        #descBox3{
            margin-left: 8px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_header.php';
    ?>
    
    <div class="container_about">
        <div class="imgText">
            <div class="imgBox"></div>
            <div class="textBox">Lorem ipsum dolor sit amet consectetur adipisicing elit. </div>
        </div>
        <div class="box2">
            <div class="descBox"id="descBox1"><p><b>Mr. Ajay</b></p>Lore est placeat ptates sunt, illo earum magni, exercitationem possimus harum praesentium dolorem eaque aut neque eveniet amet ex atque.Lorem ipsum dolor sit amet consectetur, elit .</div>
            <div class="descBox "id="descBox3"><p><b>Mr.Rahu </b></p>Loreiis accusamus magnam dolorum necessitatibus quae. Quas aut laboriosam explicabo debitis ipsa magni maiores alias molestiae iste, odio id, laborum ea esse. sit amet consectetur adipisicing elit.</div>
            <div class="descBox"id="descBox3"><p><b>Mr.Sachin</b></p>Lorem dminus ex perspiciatis vero, odit odio in labore eveniet! Ipsum molestiae consequatur nulla, modi est amet itaque sequi corporis reprehenderit.dolor sit amet consectetur adipisicing elit.</div>
        </div>
    </div>

    <style src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>