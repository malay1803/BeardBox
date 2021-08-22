<?php

  session_start();

  if(!isset($_SESSION['user']))
  {
    echo "You are logged out";
    header('location: home.php');
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grid</title>
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
        <img href="home.html" class="logo1" src="images/beard-logo.png">
        <ul> 
            <li><a href="homeLoggedIn.php">Home</a></li>
           <!--  <li><a href="#">Products</a></li> -->
            <li class="active">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Grid.php">Beard</a>
          <a class="dropdown-item" href="hair.php">Hairs</a>
       
        </div>
      </li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li id="change"><a href="logout.php">LogOut</a></li>

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

  <section class="products">
    <div class="container justify-content-around">
     <h1 class="productOption">Beard</h1>
    
    <div class="row py-2">

     <div class="col-md-4 col-sm-12 ">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="1" readonly>
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-serum.jpg" class="card-img-top" alt="...">
       
        <div class="card-body">
         <h5 class="card-title">Beard Serum</h5>
         <p class="card-text">Perfect choice for a long, thick and a healthy beard. </p>
         
        </div>
        <div class="card-footer pb-2">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
        </div>
     </div>

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="2" readonly>
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-growth-oil.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Beard Growth Oil</h5>
       <p class="card-text">Get yourself a fuller and softer beard.</p>

      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
      </div>
    </form>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
      <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="3" readonly>
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/beard/beard-serum.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Beard Shine Oil</h5>
       <p class="card-text">Shine your beard. Get a shiny beard.</p>
       
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
    </div>
   </div> 

  </div>


  <div class="row py-2">
        
     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="4" readonly>
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-fragnance.jpg.png" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Beard Fragrance Oil</h5>
         <p class="card-text">Get a slick and sleek look with chocolate fragnance.</p>
         
        </div>
        <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
      </div>
     </div>

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="5" readonly>
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-brush.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Beard Brush</h5>
       <p class="card-text">Get rid of the patchy beard and get a gentlemen's look.</p>
       
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
      <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="6" readonly>
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/beard/beard-softener.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Beard Softner</h5>
       <p class="card-text">Provide the much needed moisture and care to your beard.</p>
       
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
    </div>
   </div>  

   </div>

   <div class="row py-2">

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="7" readonly> 
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-wax.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Beard Wax</h5>
         <p class="card-text">Fret no more from dry, rough, frizzy and scraggly facial hair.</p>
         
        </div>
        <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
        </form>
      </div>
     </div>

     <div class="col-md-4 col-sm-12">
      <div class="card h-100 border-warning" style="width: 18rem;">
        <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="8" readonly>
      <span></span>
       <span></span>
       <span></span>
       <span></span>
       <img src="images/beard/beard-color.jpg" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Beard Colour</h5>
       <p class="card-text">Cover up your grey area with a natural black beard.</p>
       
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
    </div>
   </div>
   
   <div class="col-md-4 col-sm-12">
    <div class="card h-100 border-warning" style="width: 18rem;">
      <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="9" readonly>
    <span></span>
       <span></span>
       <span></span>
       <span></span>
     <img src="images/beard/beard-wash.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Beard Wash</h5>
       <p class="card-text">Nourish and cleanse your bread and feel great all day long.</p>
       
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
    </div>
   </div>  

  </div>

  <div class="row py-2">

    <div class="col-md-4 col-sm-12">
     <div class="card h-100 border-warning" style="width: 18rem;">
      <form action="cartadd.php" method="post">
        <input type="number" class="n" name="n" value="10" readonly>
     <span></span>
       <span></span>
       <span></span>
       <span></span>
      <img src="images/beard/trimmer.jpg" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title">Trimmer</h5>
       <p class="card-text">Give a classic shape to your beard.</p>
    
      </div>
      <div class="card-footer">
            <button type="submit" class="add-cart">Add To Cart</button>
        </div>
      </form>
     </div>
    </div> 

    <div class="col-md-4 col-sm-12"></div>
    <div class="col-md-4 col-sm-12"></div>

  </div>

  </div> <!-- closing tag for container div-->

   

  </section>

    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('click','ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>

    <script src="main.js"></script>
</body>
</html>