<?php

if (isset($_GET['item_id'])){

$stmt  = $conn->prepare("SELECT*FROM products limit 4");


$stmt   ->execute();

$featured_products= $stmt->get_result();

   //no product id was given
}else{

  header('location: index.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

 <!--Navbar-->

 <nav class="navbar navbar-expand-lg navbar-white bg-body-tertiary py-3 fixed-top">
    <div class="container">
      <img class="logo" src="assets/img/4.2.jpg" alt="">
      <h2 class="brand">AniHub</h2>
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

            <a class="nav-link" href="contact.html">Contacts</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="account.html">Account</a>
          </li>
        


        </ul>
       
      </div>
    </div>
  </nav>

<!--single product-->
  <section class="container single_product my-5 pd-5">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img class="img-fluid w-100 mt-5 pd-1" src="assets/img/cc65fb006cd67d65600175d084e5be25.jpg" id="mainImg"/>
            <diV class="small-img-group">
              <div class="small-img-col">
                <img src="assets/img/access3.jpg"  width="100%" class="small-img">
              </div>
              <div class="small-img-col">
                <img src="assets/img/access4.jpg"  width="100%" class="small-img">
              </div>
              <div class="small-img-col">
                <img src="assets/img/tshirrt4.jpg"  width="100%" class="small-img">
              </div>
              <div class="small-img-col">
                <img src="assets/img/tshirt2.jpg"  width="100%" class="small-img">
              </div>
            </diV>
        </div>

        <div class="mt-5 col-lg-6 col-md-12 col-12">
          <h6>Anime Axccessories</h6>
          <h3 class="py-4">My Hero Academia</h3>
          <h2>Php100.00</h2>
          <input type="number" value="1">
          <button class="buy-btn">Add to Cart</button>
          <h4 class="mt-5 mb-5">Product DetailS</h4>
          <span>The description of this product will be display soon. 
            The description of this product will be display soon. The description of this product will be display soon. The description of this product will be display soon. 
            The description of this product will be display soon. The description of this product will be display soon. The description of this product will be display soon. 
          </span>

        </div>
    </div>
  </section>


<!--related products-->
  <section id="frelated products" class="my-5 pb-5"> 
    <div class="container text-center mt-5 py-5">
     <h3>Related Products</h3>
     <hr>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/cc65fb006cd67d65600175d084e5be25.jpg">
        
        <h5 class="p-name">Jujutsu kaisen Figurines</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/75d36924b2ad2c1b6c6147f46f2d3655.jpg">
        
        <h5 class="p-name">Jujutsu kaisen Figurines</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/171c8799227cd90540c6b26f1951f7df.jpg">
        
        <h5 class="p-name">Jujutsu kaisen Figurines</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>

      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/b9b0ff99dce4b662745444ef5bd16a38.jpg">
        
        <h5 class="p-name">Jujutsu kaisen Figurines</h5>
        <h4 class="p-price">Php 500.00</h4>
        <button class="buy-btn">Buy Now</button>
      </div>
    </div>
  </section>





<!--footer-->

<footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src="assets/img/4.2.jpg">
        <h2 class="brand">AniHub</h2>
        <p class="pt-3">BEST QUALITY FOR MOST AFFORDABLE PRICE</p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5  class="pb-2">Featured:</h5>
        <ul class="text-uppercase">
          <li><a href="#">figurines</a></li>
          <li><a href="#">apparels</a></li>
          <li><a href="#">accessories</a></li>
          <li><a href="#">new</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us:</h5>
        <div>
          <h6 class="text-uppercase">email address</h6>
          <p>Anihub@gmail.com</p>
        </div>
        <div>
          <h6 class="text-uppercase">contact number</h6>
          <p>+63 912 3456 789</p>
        </div>
        <div>
          <h6 class="text-uppercase">facebook</h6>
          <p>AniHub-BUP</p>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">EME:</h5>
        <div class="row">
          <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/img/" class="img-fluid w-25 h-100 m-2"/>
        </div>
      </div>
  
    </div>
  </footer>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha3t84-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
      var  mainImg = document.getElementById("mainImg")
      var smallImg = document.getElementsByClassName("small-img");

      smallImg[0].onclick = function(){
        mainImg.src = smallImg[0].src;
      }

      smallImg[1].onclick = function(){
        mainImg.src = smallImg[1].src;
      }

      smallImg[2].onclick = function(){
        mainImg.src = smallImg[2].src;
      }

      smallImg[3].onclick = function(){
        mainImg.src = smallImg[3].src;
      }




    </script>

</body>
</html>