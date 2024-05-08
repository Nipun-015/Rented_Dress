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
    <link rel="stylesheet" href="./asset/css/style.css">
    
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
                            <h2><span>Place Your</span> Order</h2>
                            <form class="needs-validation" method="post" action="./order.php"novalidate>
                                <div class="row">
                                    <div class="col-md mb-2">
                                        <label for="category"></label>
                                        <select name="bus_name" class="form-control" required>
                                            <option value="">Category</option>
                                            <option value="Bus 1">Bride</option>
                                            <option value="Bus 2">Groom</option>
                                            <option value="Bus 1">Casual Wear</option>
                                        </select>
                                    </div>
                                    <div class="col-md mt-4">
                                        <select name="bus_name" class="form-control" required>
                                            <option value="">Days</option>
                                            <option value="Bus 1">1</option>
                                            <option value="Bus 2">2</option>
                                            <option value="Bus 1">3</option>
                                            <option value="Bus 1">More</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="d2c_icon form-control" name= "name" id="name" autocomplete="off" placeholder="Dress Name" required>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="d2c_icon form-control" name="contact"id="contact" autocomplete="off" placeholder="Contact" required>
                                </div>
                               
                                <div>
                                    <button type="submit" class="btn mb-3">Submit</button>
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