<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Water Delivery </title>
    <style>
        .selector-for-some-widget {
            box-sizing: content-box;
        }

        #container-size {
            display: grid;
            height: 400px;
            width: 99%;
            margin-top: 30px;
        }

        /* #box-format{
            display: flex;
            margin-left: 200px;
        } */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, 16rem);
            grid-gap: 30px;
            justify-content: center;
        }

        #image_size {
            height: 410px;
            width: 99%;
            
        }
    </style>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_header.php';
    ?>
    <div class="container-fluid my-4" id="container-size">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://localhost/learnphp/WaterDelivery/img2.jpg" id="image_size" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/learnphp/WaterDelivery/img1.jpg" id="image_size" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://localhost/learnphp/WaterDelivery/img2.jpg" id="image_size" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <hr style="border:2px solid black ">
    <h4 style="margin-left: 7vh;">Showing 1-12 of 21 results </h4>

    <!-- Card body -->

    <div class="container-fluid grid-container my-3">
        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Two bottle of mineral water</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card">
            <img src="http://localhost/learnphp/WaterDelivery/bottle.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


    </div>

    
    <?php
    include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\footer.php';
    ?>
    <style src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>