<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .signup-form{
            /* height: 240px;
            /* width: 400px; 
            width: 80%;
            margin-bottom: 60px; */
            display: flex;
            justify-content: center;
            background-color: white;
            color: black;
            padding-left: 2px;
            box-shadow: -2px -3px 3px 0 black,2px 3px 3px 0 black; 

        }
        .form-group{
            margin-top: 10px;
        }
        .form-button{
            display: flex;
            justify-content: center;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">signup</button> -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="signupModalLabel"><b>Signup webpage </b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- form start  -->
                            <div class="signup-form">
                                <form method="POST" class="register-form">
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" name="name" id="name" class="my-1 mx-3" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email_id</label>
                                        <input type="email" name="email" class="mx-4" id="email" placeholder="Your Email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Password </label>
                                        <input type="password" name="pass" class="mx-3" id="pass" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="re-pass">Confirm Pass</label>
                                        <input type="password" name="re_pass" class="mx-0" id="re_pass" placeholder="Repeat your password" />
                                    </div>
                                    <div class="form-group mx-3">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                                    </div>
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit my-1 " value="Register" />
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="signup-image">
                                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                                <a href="#" class="signup-image-link">I am already member</a>
                            </div> -->
                  

                    <!-- form end  -->

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