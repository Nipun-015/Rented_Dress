<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration 5</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <link rel="icon" href="../assets/images/favicon.png" type="image/gif" sizes="16x16">
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
    


    <div class="d2c_main d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="d2c_wrapper">
                <div class="row">
                    <div class="col-lg-6 d-md-none d-lg-flex align-items-center justify-content-center">
                        <div class="d2c_left">
                            <div>
                                <img src="./assets/img/img.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d2c_right">
                            <h2><span>Registration</span> Form</h2>
                            <form class="needs-validation" method="post" action="./adduser.php"novalidate>
                                <div class="row">
                                    <div class="col-md">
                                        <input type="text" class="d2c_icon form-control mb-2" id="firstname" autocomplete="off" name="firstname" placeholder="Enter your first name" required>
                                    </div>
                                    <div class="col-md">
                                        <input type="text" class="d2c_icon form-control mb-2" name ="lastname" id="lastname" autocomplete="off" placeholder="Enter your last name" required>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="email" class="d2c_icon form-control" name= "email" id="email" autocomplete="off" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="password" class="d2c_icon form-control" name="password"id="password" autocomplete="off" placeholder="Enter your password" required>
                                </div>
                               
                                <div>
                                    <button type="submit" class="btn mb-3">Create an Account</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="d2c_para">Don't Have an account? <a href="./login.php">Login!</a></p>
                                <p class="d2c_para">or Continue with</p>
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
    <script src="../assets/js/main.js"></script>

</body>
</html>