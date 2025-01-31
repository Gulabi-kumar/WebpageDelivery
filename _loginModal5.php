<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
            display: flex;
            justify-content: center;
            background-color: white;
            color: black;
            padding-left: 2px;
            margin-top: 5px;
            box-shadow: -2px -3px 3px 0 black,2px 3px 3px 0 black;

        }
        .submitbtn{
            margin-left: 50%;
        }
        .register{
            margin-left: 10%;
        }

      
    </style>
</head>

<body>

    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">login</button> -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="loginModalLabel"><b>Login webpage </b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- form box -->

                    <div class="container">
                        <form action="#">
                            <div class="input-field my-3">
                                <label id="email" class="mx-3">Enter your email</label>
                                <input type="text" required id="email">

                            </div>
                            <div class="input-field my-2">
                                <label>Enter your password</label>
                                <input type="password" required>

                            </div>
                            <div class="forget">
                                <label for="remember mx-3">
                                    <p class="mx-2">Remember me</p>
                                </label>
                                <input type="checkbox" id="remember">
                                <a href="http://localhost/learnphp/WaterDelivery/partialsWebp/forgetPass.php">Forgot password?</a>
                            </div>
                            <button type="submit" class="submitbtn my-1">Log In</button>
                            <div class="register">
                                <p>Don't have an account? <a href="http://localhost/learnphp/WaterDelivery/partialsWebp/_signupModal5.php">Register</a></p>
                            </div>
                        </form>
                    </div>

                    <!-- form End -->
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>


</body>

</html>