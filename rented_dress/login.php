<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login 5</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <link rel="icon" href="./assets/images/favicon.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <!-- Font Awesome CDN -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- free google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- css file link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    
    <?php
        if(isset($_COOKIE["login_error"])){
            setcookie("login_error","Username and
                password doesnt match", time()- 600 );
        echo "<p style='color:red'>".$_COOKIE["login_error"]."</p>";
        }
    ?>

    <div class="d2c_main d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="d2c_wrapper">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="d2c_left">
                            <div>
                                <img src="./assets/img/login_img.png" alt="login image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d2c_right">
                            <h2>Account <span>Login</span></h2>
                            <form class="needs-validation" method="Get" action="./checklogin.php"novalidate>
                                <div class="form-group mb-0">
                                    <input type="email" class="d2c_icon form-control mb-2" id="email" name="email" autocomplete="off" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="password" class="d2c_icon form-control mb-2" id="pass" name="password" autocomplete="off" placeholder="Enter your password" required>
                                </div>
                                
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <input type="checkbox" id="validationFormCheck" required>
                                        <span class="d2c_remember">Remember Me</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p><a href="./forgot.php" class="d2c_forgot">Forgot Password?</a></p>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn mb-3">Login</button>
                                </div>
                            </form>
                            
                            <div class="text-center">
                                <p class="d2c_sign_up_link">Don't Have an account? <a href="./registration.php">Sign up!</a></p>
                                <p class="d2c_para">or login with</p>
                                <div class="d2c_social_icon">
                                    <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- optional javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- main js file link -->
    <script src="./assets/js/main.js"></script>



</body>
</html>