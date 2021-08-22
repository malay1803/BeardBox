<!DOCTYPE html>
<html>
<head>
 
  <meta charset="UTF-8">
    <title>Hairs</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style1.css">

    <script type="text/javascript" src="validation.js"></script>

</head>
<body>

   <nav class="fixed-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo1" src="images/beard-logo.png">
        <ul> 
            <li><a href="homeLoggedIn.php">Home</a></li>
           <!--  <li><a href="#">Products</a></li> -->
            <li>
        <a class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="Grid.php">Beard</a>
          <a class="dropdown-item" href="hair.php">Hairs</a>
          
        </div>
      </li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a class="yelloww" href="logout.php">LogOut</a></li>
            <button class="cart" onclick="document.location='cart.html'"><span>0</span> Cart <i class="fa fa-shopping-cart"></i></button>
        </ul>
    </nav>

   
    
    <div class="text-center">
    	
        <div id="carouselExampleCaptions" class="carousel slide jumbotron" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic1.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="images/pic2.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="images/pic3.jpg" class="d-block w-100" alt="...">
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>

    </div> 

<!-- Hair grid -->

 <div class="container justify-content-around">
     <h1 class="productOption">Hairs</h1>
    
    <div class="row py-2">

     <div class="col-md-4 col-sm-12 ">
      <div class="card h-100 border-warning" style="width: 18rem;">
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/hair/hair-serum.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Hair Serum</h5>
         <p class="card-text">Get rid of frizz and split ends. </p>
        </div>
        <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
      </div>
     </div>

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-growth-oil.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Hair Growth Oil</h5>
       <p class="card-text">Better to have long hairs than no hairs.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/hair/onion-oil.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Onion Oil</h5>
       <p class="card-text">Prevents breakage, split ends and thinning of hair.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div> 

  </div>


  <div class="row py-2">
        
     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/hair/hair-gel.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Hair Gel</h5>
         <p class="card-text">Add a texture and shine to your hairs.</p>
        </div>
        <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
      </div>
     </div>
     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/hair/hair-thickening-spray.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Hair Thickening Spray</h5>
       <p class="card-text">A perfect blend of vitamins for thick and strong hairs..</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/hair/hair-shampoo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Shampoo</h5>
       <p class="card-text">Wash your hairs, its important.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div>  

   </div>

   <div class="row py-2">

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/hair/hair-wax.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Hair Wax</h5>
         <p class="card-text">Style your hairs to perfection.</p>
        </div>
        <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
      </div>
     </div>

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/hair/hair-color.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Hair Colour</h5>
       <p class="card-text">Cover up your grey area.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/hair/hair-spray.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Hair Spray</h5>
       <p class="card-text">Hold your hairs.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
    </div>
   </div>  

  </div>

  <div class="row py-2">

    <div class="col-md-4 col-sm-12">
     <div class="card h-100 border-warning" style="width: 18rem;">
     <span></span>
       <span></span>
       <span></span>
       <span></span>
      <img src="images/hair/hair-comb.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Comb</h5>
       <p class="card-text">A tool to untangle and clean your hairs.</p>
      </div>
      <div class="card-footer">
            <a href="#" class="add-cart-1">Add To Cart</a>
      </div>
     </div>
    </div> 

    <div class="col-md-4 col-sm-12"></div>
    <div class="col-md-4 col-sm-12"></div>

  </div>

  </div>
  
  <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('click','ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>

        <script src="main.js"></script>
</body>
</html>