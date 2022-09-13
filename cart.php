<?php 

session_start();

if(isset($_POST['add_to_cart'])){

  // if users has already added a product to cart
  if(isset($_SESSION['cart'])){

    $product_array_ids = array_column($_SESSION['cart'],"product_id");//[2,5,9,3]
    // if product has already added to cart or not
    if(!in_array($_POST['product_id'],$product_array_ids)){

      $product_array = array(
        'product_id' => $_POST['product_id'],
        'product_name' => $_POST['product_name'],
        'product_image' => $_POST['product_image'],
        'product_price' => $_POST['product_price'],
        'product_quantity' => $_POST['product_quantity'],
      );
  
      $_SESSION['cart'][$product_id] = $product_array;

    // product has already been added
    }else{
      echo '<script>alert("product was already added to the cart")</script>';
      //echo '<script>windows.location="index.php"</script>';
    }


  // if this is the first product 
  }else{
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_image = $_POST['product_image'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
      'product_id' => $product_id,
      'product_name' => $product_name,
      'product_image' => $product_image,
      'product_price' => $product_price,
      'product_quantity' => $product_quantity,
    );

    $_SESSION['cart'][$product_id] = $product_array;

  }

}else{
  header('location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

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

    <!--  Cart -->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bolde">Your Cart</h2>
            <hr>
        </div>
        <table class="mt-5 py-5">
            <tr>
                <th>Product</th>
                <th>Quintity</th>
                <th>Subtotal</th>
            </tr>

            <?php foreach($_SESSION['cart'] as $kay => $value) {?>
              <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/img/<?php echo $value['product_image']; ?>" alt="">
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <a class="remove-btn" href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td>
                    <input type="number" value="<?php echo $value['product_quantity']; ?>">
                    <a class="edit-btn" href="#">Edit</a>
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price">155</span>
                </td>
            </tr>

            <?php } ?>
            

        </table>
        <div class="cart-total">
            <table>        
                <tr>
                    <td>Subtotal</td>
                    <td>$155</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$155</td>
                </tr>
            </table>
        </div>
        <div class="checkout-container">
            <button class="btn checkout-btn">CHECKOUT</button>
        </div>

    </section>
    <!--  End Cart -->

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