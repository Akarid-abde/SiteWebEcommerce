<?php 

include('server/connection.php');

if(isset($_GET['product_id'])){

  $product_id = $_GET['product_id'];

  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
  $stmt->bind_param('i',$product_id);

  $stmt->execute();

  $product = $stmt->get_result();

  // no product id was given
}else{
  header("location: index.php");
}

?>
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
              <a class="nav-link" href="index.html">Home</a>
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

        <!-- Single Product -->
        <section class="container single-product mt-5 pt-5">
            <div class="row mt-5">
            <?php while($row = $product->fetch_assoc()){?>
                
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img class="img-fluid w-100 pb-1" src="assets/img/<?php echo $row['product_image']; ?>" alt="" id="mainImage">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo $row['product_image']; ?>"  alt="" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo $row['product_image1']; ?>"  alt="" width="100%"  class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo $row['product_image2']; ?>"  alt="" width="100%"  class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="assets/img/<?php echo $row['product_image3']; ?>"  alt="" width="100%"  class="small-img">
                        </div>
                        <div class="small-img-col">
                          <img src="assets/img/<?php echo $row['product_image4']; ?>"  alt="" width="100%"  class="small-img">
                      </div>
                    </div>
                </div>

            
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <h6><?php echo $row['product_category']; ?></h6>
                  <h3 class="py-4"><?php echo $row['product_name']; ?></h3>
                  <h2><?php echo $row['product_price']; ?></h2>
                  <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
                    <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
                    <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
                    <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>"/>
                    <input type="number" name="product_quantity" value="1" />

                    <button class="buy-btn" typ="submit" name="add to cart">Add to Cart</button>
                  </form>
                  <h4 class="mt-5 mb-5">Product Details</h4>
                  <span><?php echo $row['product_description']; ?>
                  </span>
                </div>
              
              
            <?php } ?>
              
              </div>
        </section>

        <!-- End Single Product -->

        <!--  Featured -->
        <section id="related-products" class="mt-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Related Product</h3>
        <hr class="mx-auto">
     
      </div>
      <div class="row mx-auto container-fluid">

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img src="assets/img/shoes.jpg" alt="" class="img-fluid mb-3">
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
          <img src="assets/img/shoes.jpg" alt="" class="img-fluid mb-3">
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
          <img src="assets/img/shoes.jpg" alt="" class="img-fluid mb-3">
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
          <img src="assets/img/shoes.jpg" alt="" class="img-fluid mb-3">
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
        <!-- End Featured -->



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
    <script>

      var mainImage = document.getElementById("mainImage");
      var smallImage = document.getElementsByClassName("small-img");

      for(let i=0;i<4;i++){
        smallImage[i].onclick = function(){
        mainImage.src = smallImage[i].src;
      }
      }

      
    </script>

  </body>
</html>