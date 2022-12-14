<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
          <img  src="assets/img/logo.png" width="90" height="90" alt="logo">
          <h2 class="brand">SHri</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">
                <a href="cart.html"><i class="fas fa-bag-shopping"></i></a>
                <a href="account.html"><i class="fa-solid fa-user"></i></a>
              </li>
            </ul>
            
          </div>
        </div>
    </nav>
    <!-- End NavBar -->


    <!-- Home -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordabale prices</p>
            <button>Shop New</button>
        </div>
    </section>
    <!-- End Home -->

    <!-- Brand -->
    <section id="brand" class="container">
        <div class="row">
            <img src="assets/img/brand1.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/brand2.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/brand3.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/brand4.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
        </div>
    </section>
    <!-- End Brand -->

    <!--  New -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0">
            <!--  One -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/img/2.jpg" alt="" class="img-fluid">
                <div class="details">
                    <h2>Extreamly Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
            <!--  Two -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/img/1.jpg" alt="" class="img-fluid">
                <div class="details">
                    <h2>Your Awesome T-shirt</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!--  Three -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img src="assets/img/3.jpg" alt="" class="img-fluid">
                <div class="details">
                    <h2>Awesome Bags</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

        </div>

    </section>

    <!-- End New -->

    <!--  Featured -->
    <section id="featured" class="mt-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr class="mx-auto">
        <p>Here you can check your featured products</p>
      </div>
      <div class="row mx-auto container-fluid">
      <?php include('server/get_featured_products.php') ?>

      <?php while($row=$featured_products->fetch_assoc()){ ?>
        
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assets/img/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href=<?php echo "single_product.php?product_id=".$row['product_id']; ?>><button class="buy-btn">Buy Now</button></a>
          </div>
        </div>
      
      <?php } ?>
      </div>
    </section>
    <!-- End Featured -->


    <!--  Banner -->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S Sale</h4>
        <h1>Autumn Collection <br> UP to 30% off</h1>
        <button class="text-uppercase">Shop Now</button>
      </div>
    </section>

    <!-- End Banner -->

    <!--  clothes -->
    <section id="featured" class="mt-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Dresses &   Coats</h3>
        <hr class="mx-auto">
        <p>Here you can check out our amazing clothes</p>
      </div>
      <div class="row mx-auto container-fluid">
      <?php include('server/get_coats.php') ?>

      <?php while($row=$coats_products->fetch_assoc()){ ?>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assets/img/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      
      <?php } ?>
      
      </div>
    </section>
    <!-- End clothes -->

    <!--  Shoese -->
      <section id="featured " class="mt-5 pb-5">
          <div class="container text-center mt-5 py-5">
            <h3>Dresses &   Coats</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing Shoes</p>
          </div>
          <div class="row mx-auto container-fluid">
    
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assets/img/shoses.jpg" alt="" class="img-fluid mb-3">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div>
                <h5 class="p-name">Sport Shoes</h5>
                <h4 class="p-price">199.9$</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
            </div>
    
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assets/img/shoses.jpg" alt="" class="img-fluid mb-3">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div>
                <h5 class="p-name">Sport Shoes</h5>
                <h4 class="p-price">199.9$</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
            </div>
    
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assets/img/shoses.jpg" alt="" class="img-fluid mb-3">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div>
                <h5 class="p-name">Sport Shoes</h5>
                <h4 class="p-price">199.9$</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
            </div>
    
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img src="assets/img/shoses.jpg" alt="" class="img-fluid mb-3">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div>
                <h5 class="p-name">Sport Shoes</h5>
                <h4 class="p-price">199.9$</h4>
                <button class="buy-btn">Buy Now</button>
              </div>
            </div>
    
          </div>
      </section>
    <!-- End Shoese -->


    <!--  Footer -->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto mt-5">
        <div class="footer-one col-lg-3 col-md-6 col-ms-12">
          <img src="assets/img/logo.png" alt="" class="img-fluid w-35 h-50">
          <p class="pt-3">we prouved the best products for the most affordabale prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-ms-12">
          <h5 class="pb-2">Featured</h5>
          <ul class="text-uppercase">
            <li><a href="">Men</a></li>
            <li><a href="">Women</a></li>
            <li><a href="">Boys</a></li>
            <li><a href="">Girls</a></li>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Clothes</a></li>
          </ul>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-ms-12">
          <h5 class="pb-2">Contact US</h5> 
          <div>
            <h6 class="text-uppercase">Adresse</h6>
            <p>1234 Rue El widad Midelt</p>
          </div>

          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>+2126 87 85 16 84</p>
          </div>
           

          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>Abderrahi.akarid@gmail.com</p>
          </div>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-ms-12">
          <h5 class="pb-2">Instagrame</h5>
          <div class="row">
            <img src="assets/img/brand1.png" alt="" class="img-fluid w-25 h-100 m-2">
            <img src="assets/img/brand1.png"" alt="" class="img-fluid w-25 h-100 m-2">
            <img src="assets/img/brand1.png"" alt="" class="img-fluid w-25 h-100 m-2">
            <img src="assets/img/brand1.png"" alt="" class="img-fluid w-25 h-100 m-2">
            <img src="assets/img/brand1.png"" alt="" class="img-fluid w-25 h-100 m-2">
          </div>

        </div>

      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <img src="assets/img/payment.jpg" alt="">
          </div>

          <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
            <p>eCommerce @ 2025 All Right Reserved </p>
          </div>

          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>

        </div>
      </div>

    </footer>
    <!--  End Footer -->



    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>