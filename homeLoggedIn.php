<?php

  session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>front</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="style.css">

  <script type="text/javascript" src="validation.js"></script>


</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo1" src="images/beard-logo.png">
        <ul> 
            <li class="active"><a href="homeLoggedIn.php">Home</a></li>
            <!-- <li><a href="grid.html" target="_blank">Products</a></li> -->

            <li>
             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Grid.php">Beard</a>
              <a class="dropdown-item" href="hair.html">Hairs</a>
             </div>
            </li>

            <li><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a class="yelloww">Logout</a></li>
            
            
        </ul>
    </nav>
    
	<div class="container-1">
		
			<div class="col-lg-12">
				<div id="content">
                    <h1>BeardBox</h1>
                    <hr align="center"/>
                    <h3>Unlock Your <span id="beard">Beard</span></h3>
                    <!-- <button type="button" class="btn btn-outline-dark" id="btn1" data-toggle="modal" data-target="#myModal">LogIn</button>
                    <button type="button" class="btn btn-outline-dark" id="btn1" data-toggle="modal" 
                    data-target="#signup">Sign Up</button> -->
                    <a class="btn btn-outline-dark" id="btn1" href="logout.php">LogOut</a>

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


