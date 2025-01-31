<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 120px;
        }

        .container_forget {
            background-color: pink;
            width: 70%;
            margin: auto;
            display:flex;
            justify-content: center;
            flex-direction: auto;
            flex-wrap: wrap;
            gap: 40px;
            
        }

        .modal-footer {
            padding-right: 30%;
        }

        .input_box {
            height: 35vh;
            box-shadow: -2px -3px 3px 0 black, 2px 3px 3px 0 black;
            padding-left: 10px;
            margin-top:50px;
            padding-top: 10px;
            
        }
        .img_for{
           
            box-shadow: -2px -3px 3px 0 black, 2px 3px 3px 0 black;
        }
        

        @media only screen and (max-width :415px ){
            body {
            margin-top: 5px;
            }

            .container_forget {
                background-color: yellow;
                min-width: 300px;
                min-height: 500px;
                margin: auto;
                display:flex;
                justify-content: center;
                flex-direction: auto;
                flex-wrap: wrap;
                gap: 5px;
                
            }

            /* .modal-footer {
                padding-right: 30%;
            } */

            .input_box {
                
                max-width: 200px;
                max-height:200px;

                box-shadow: -1px -1px 2px 0 black, 1px 1px 2px 0 black;
                padding-left: 10px;
                margin-top:5px;
                padding-top: 0px;
                
            }
            .img_for{
                max-width: 200px;
                max-height: 200px;
                box-shadow: -1px -1px 2px 0 black, 1px 1px 2px 0 black;
            }

        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    include 'C:\xampp\htdocs\LearnPHP\WaterDelivery\partialsWebp\_header.php';
    ?>

    <section class="vh-20">
        <div class="container_forget py-5">
            <div class="col-md-8 col-lg-7 col-xl-6 img_for">
                <img src="http://localhost/learnphp/WaterDelivery/img2.jpg"
                    class="img-fluid" alt="Phone image">
            </div>
            <form>
                <!-- Email input -->
                <div class="input_box">
                    <div class="form-group pass_show">
                        <label for="form-control1">Current Password</label>
                        <input type="password" value="" class="form-control1 my-1" placeholder="Current Password">
                    </div>
                    <div class="form-group pass_show">
                        <label for="form-control2">New Password</label>
                        <input type="password" value="" class="form-control2 my-1 mx-3" placeholder="New Password">
                    </div>
                    <div class="form-group pass_show">
                        <label for="form-control3">Confirm Password</label>
                        <input type="password" value="" class="form-control3 my-1" placeholder="Confirm Password">
                    </div>
                    <br>
                    <br>


                    <div class="modal-footer ">
                        <button type="button" class="btn btn-primary ">Submit</button>
                        <button type="button" class="btn btn-secondary mx-3" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>

            </form>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>