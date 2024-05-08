<!DOCTYPE html>
<html lang="en">
<head>
    <!-- required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rented Dress</title>
    <!-- Bootstrap cdn -->
    <link href="./lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- fancybox  -->
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
    <!-- slick slider cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <!-- external css  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    <!-- header start -->
    <header>
        <!-- navbar start  -->
        <nav class="navbar navbar1 navbar-expand-lg ">
            <div class="container">
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/Rented Dress.png" class="rent" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse js-clone-nav justify-content-center">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 nav_list">
                        <li class="nav-item">
                            <a class="nav-link active" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bride">Bride</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#groom">Groom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#casualwear">Casual Wear </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./form.php">Order</a>
                        </li>
                    </ul>
                    <div class="nav_button">
                        <a class="btn trtr_nav_btn d-none d-lg-block" href="./login.php">Login</a>
                    </div>

        <!-- navbar end -->
    </header>
    <!-- header end -->

        <!-- hero-section start  -->
        <section class="hero_section d-flex align-items-center">
            <div class="container">
                <div class="hero align-items-center">
                    <div class="row  align-items-center">
                        <!-- left column start  -->
                        <div class="col-lg-7 hero_left">
                            <h3 class="hero_title">Discover and Find Your Own Fashion!</h3>
                            <p class="hero_description">Explore our curated collection of stylish clothing and accessories tailored to your unique taste.</p>
                            <button class="btn hero_button" type="button">Explore Now</button>
                        </div>
                        <!-- left column end  -->
        
                        <!-- right column start  -->
                        <div class="col-lg-5 ">
                            <div class="ero_right text-center mt-5 mt-lg-0">
                                <img src="./assets/img/pexels-dima-valkov-6402847 2.png" class="img-fluid" alt="hero_image">
                            </div>
                        </div>
                        <!-- right column end  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-section end -->

<!-- bride section start -->
<section class="blog_section" id="bride">
    <div class="container  text-center">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h3 class="blog_subtitle">Bride</h3>
                <p class="blog_title">Immerse yourself in the world of luxury bride fashion with our meticulously crafted designer clothes!</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/pexels-dima-valkov-6211621 1.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Stylish Sleeveless gown</h6>
                        <p class="card-text">$38.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4  d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/pexels-dima-valkov-6211616 (1) 2.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Black backless gown</h6>
                        <p class="card-text">$62.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/pexels-dima-valkov-6503007 3.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Off shoulder gown</h6>
                        <p class="card-text">$49.99</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <div class="btn bride_button ">
            <a class="btn trtr_nav_btn d-none d-lg-block" href="form.php">Order Now</a>
        </div>
    </div>
</section>
<!-- bride section end -->

<!-- groom section start -->
<section class="blog_section" id="groom">
    <div class="container text-center">
        <div class="row ">
            <div class="col-lg-12 text-center">
                <h3 class="blog_subtitle">groom</h3>
                <p class="blog_title">Immerse yourself in the world of luxury groom fashion with our meticulously crafted designer clothes!</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/elegant-woman-straw-hat-isolated 2.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Designer green suit </h6>
                        <p class="card-text">$68.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4  d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/pexels-dima-valkov-6211617 1.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Designer white suit </h6>
                        <p class="card-text">$58.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto d2c_coloumn">
                <div class="card">
                    <div class="card_img">
                        <img src="./assets/img/vknivfu sdkvbjieurg kjvn 1.png" class="card-img-top img-fluid " alt="card_image">
                    </div>

                    <div class="card-body">
                        <h6 class="card-subtitle">Designer maroon suit </h6>
                        <p class="card-text">$66.99</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <div class="btn bride_button ">
            <a class="btn trtr_nav_btn d-none d-lg-block" href="form.php">Order Now</a>
        </div>
    </div>
</section>
<!-- groom section end -->

<!-- casualwear section start  -->
<section class="partywear_section align-items-center" id="casualwear">
    <div class="container text-center">
        <h3 class="partywear_subtitle">Casual Wear</h3>
        <h2 class="partywear_title">here is our latest products</h2>

        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-NewArrivals-tab" data-bs-toggle="pill" data-bs-target="#pills-NewArrivals" type="button" role="tab" aria-controls="pills-NewArrivals" aria-selected="false">New Arrivals</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-Sale-tab" data-bs-toggle="pill" data-bs-target="#pills-Sale" type="button" role="tab" aria-controls="pills-Sale" aria-selected="false">Sale</button>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">
            <!-- All Content Element Start -->
           <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row ">
                    <div class="col-lg-6" >
                        <a data-fancybox="gallery" href="./assets/img/image01.png">
                            <img src="./assets/img/image01.png" class="img-fluid" alt="picture">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0  text-center">
                        <a data-fancybox="gallery" href="./assets/img/image04.png">
                            <img src="./assets/img/image04.png" class="img-fluid mb-3" alt="picture">
                        </a>
                        <a data-fancybox="gallery" href="./assets/img/image02.png">
                            <img src="./assets/img/image05.png" class="img-fluid mt-2" alt="picture">
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-4 mt-lg-0 text-center">
                        <a data-fancybox="gallery" href="./assets/img/image05.png">
                            <img src="./assets/img/image02.png" class="img-fluid mb-3" alt="picture">
                        </a>
                        <a data-fancybox="gallery" href="./assets/img/image03.png">
                            <img src="./assets/img/image03.png" class="img-fluid mt-2" alt="picture">
                        </a>
                    </div>
                </div>
            </div>
        
            <!-- New Arrivals Content Element Start -->
            <div class="tab-pane fade" id="pills-NewArrivals" role="tabpanel" aria-labelledby="pills-NewArrivals-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-6" >
                          <a data-fancybox="gallery" href="./assets/img/image01.png">
                              <img src="./assets/img/image01.png" class="img-fluid" alt="picture">
                          </a>
                    </div>
                    <div class="col-md-6 col-lg-3  mt-sm-4 mt-lg-0 text-center">
                          <a data-fancybox="gallery" href="./assets/img/image04.png">
                              <img src="./assets/img/image02.png" class="img-fluid mb-3" alt="picture">
                          </a>
                          <a data-fancybox="gallery" href="./assets/img/image02.png">
                              <img src="./assets/img/image03.png" class="img-fluid mt-2" alt="picture">
                          </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-sm-4 mt-lg-0 text-center">
                          <a data-fancybox="gallery" href="./assets/img/image05.png">
                              <img src="./assets/img/image04.png" class="img-fluid mb-3" alt="picture">
                          </a>
                          <a data-fancybox="gallery" href="./assets/img/image03.png">
                              <img src="./assets/img/image05.png" class="img-fluid mt-2" alt="picture">
                          </a>
                    </div>
                </div>
            </div>

            <!-- Sale Content Element Start -->
            <div class="tab-pane fade" id="pills-Sale" role="tabpanel" aria-labelledby="pills-Sale-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-6" >
                          <a data-fancybox="gallery" href="./assets/img/image01.png">
                              <img src="./assets/img/image01.png" class="img-fluid" alt="picture">
                          </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-sm-4 mt-lg-0 text-center">
                          <a data-fancybox="gallery" href="./assets/img/image04.png">
                              <img src="./assets/img/image04.png" class="img-fluid mb-3" alt="picture">
                          </a>
                          <a data-fancybox="gallery" href="./assets/img/image02.png">
                              <img src="./assets/img/image02.png" class="img-fluid mt-2" alt="picture">
                          </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mt-sm-4 mt-lg-0 text-center">
                          <a data-fancybox="gallery" href="./assets/img/image05.png">
                              <img src="./assets/img/image05.png" class="img-fluid mb-3" alt="picture">
                          </a>
                          <a data-fancybox="gallery" href="./assets/img/image03.png">
                              <img src="./assets/img/image03.png" class="img-fluid mt-2" alt="picture">
                          </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="btn bride_button mb-3">
            <a class="btn trtr_nav_btn d-none d-lg-block" href="form.php">Order Now</a>
        </div>
    </div>
</section>
<!-- casualwear section end -->

<!-- feedback section start -->
<div class="feedback d-flex align-items-center" id="testimonial">
    <div class="container">
        <h1 class="text-center fw-medium text-capitalize mb-5">Feedback Corner</h1>
        <div class="row slider_main gx-4">
            <!-- card one start -->
            <div class="col-lg-4"> 
                <div class="card_one h-100 w-100">
                    <img src="assets/img/semicolon.png" class="img-fluid" alt="one">
                    <h2>Emily Wilson</h2>
                    <p>The customer experience was exceptional from start to finish. The website is user-friendly, the checkout process was smooth, and the clothes I ordered fit perfectly.</p>
                </div>
            </div>
            <!-- card one end -->   
            <!-- card two start -->
            <div class="col-lg-4">
                <div class="card_two h-100 w-100">
                    <img src="assets/img/semicolon.png" alt="image one">
                    <h2>Sarah Thompson</h2>
                    <p>I absolutely love the quality and style of the clothing I purchased from this website. customer service was outstanding, and I received my order quickly.</p>
                </div>
            </div>
            <!-- card two end -->
            <!-- card three start -->
            <div class="col-lg-4">
                <div class="card_three h-100 w-100">
                    <img src="assets/img/semicolon.png" alt="image one">
                    <h2>Olivia Martinez</h2>
                    <p>I had a great experience shopping on this website. The clothes I bought are fashionable and comfortable. Highly satisfied!</p>
                </div>
            </div>
            <!-- card three end -->
            <!-- card one start -->
            <div class="col-lg-4"> 
                <div class="card_one h-100 w-100">
                    <img src="assets/img/semicolon.png" class="img-fluid" alt="one">
                    <h2>Emily Wilson</h2>
                    <p>The customer experience was exceptional from start to finish. The website is user-friendly, the checkout process was smooth, and the clothes I ordered fit perfectly.</p>
                </div>
            </div>
            <!-- card one end -->   
            <!-- card two start -->
            <div class="col-lg-4">
                <div class="card_two h-100 w-100">
                    <img src="assets/img/semicolon.png" alt="image one">
                    <h2>Sarah Thompson</h2>
                    <p>I absolutely love the quality and style of the clothing I purchased from this website. customer service was outstanding, and I received my order quickly.</p>
                </div>
            </div>
            <!-- card two end -->
            <!-- card three start -->
            <div class="col-lg-4">
                <div class="card_three h-100 w-100">
                    <img src="assets/img/semicolon.png" alt="image one">
                    <h2>Olivia Martinez</h2>
                    <p>I had a great experience shopping on this website. The clothes I bought are fashionable and comfortable. Highly satisfied!</p>
                </div>
            </div>
            <!-- card three end -->
        </div>
    </div>
</div>
<!-- feedback section end -->

<!-- contact us start  -->
<section class="contact" id="contact">
    <div class="container">
        <h3 class="contact_subtitle text-center">Contact Us</h3>
        <h2 class="contact_title text-center">HAVE ANY QUESTION?</h2>
        <!-- left_contact start  -->
        <div class="row">
            <!-- left_contact start  -->
            <div class="col-lg-6">
                <img src="./assets/img/Rectangle 6.png" class="img-fluid contact_img" alt="image">
            </div>
            <!-- left_contact end  -->
            <div class="col-lg-6">
                <form>
                    <div class="ms-3">
                        <label for="exampleFormControlInput2" class="form-label"></label>
                        <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="Enter your name">
                    </div>
                    <div class="ms-3">
                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
                    </div>
                    <div class="ms-3">
                        <label for="exampleFormControlInput3" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Enter your phone Number">
                    </div>
                    <div class="ms-3">
                        <label for="exampleFormControlInput4" class="form-label"></label>
                        <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="Your query Type">
                    </div>
                    <div class="ms-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn contact_button">Send us a message</button>
                  </form>
            </div>
            <!-- right_contact end  -->
        </div>
    </div>
</section>
<!-- contact us end  -->

<!-- footer start -->
<footer class="footer_section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none"><p class="footer_text ms-4">Copyright by <span>Rented Dress</span></p></a>
            </div>
            <div class="col-lg-2">
                <a href="#" class="text-decoration-none"><p class="footer_subtext"> English</p></a> 
            </div>
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none"><p class="footer_subtext">Terms & Privacy</p></a>
            </div>
            <div class="col-lg-4">
                <div class="social_link">
                    <a href="#"><i class="fas fa-phone-alt"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- footer end -->
    <!-- bootstrap cdn -->
    <script src="./lib/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- Custom JS link -->
    <script src="./assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jquery cdn -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- slick slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- fancybox cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- Custom JS link -->
    <script src="./assets/js/main.js"></script>

</body>
</html>