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
            <li class="active"><a href="home.html">Home</a></li>
            <!-- <li><a href="grid.html" target="_blank">Products</a></li> -->

            <li>
             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="">Beard</a>
              <a class="dropdown-item" href="">Hairs</a>
             </div>
            </li>

            <li><a href="">About</a></li>
            <li><a class="yelloww" data-toggle="modal" data-target="#signup">Sign up</a></li>
            <li><a class="yelloww" data-toggle="modal" data-target="#myModal">LogIn</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
    
	<div class="container-1">
		
			<div class="col-lg-12">
				<div id="content">
                    <h1>BeardBox</h1>
                    <hr align="center"/>
                    <h3>Unlock Your <span id="beard">Beard</span></h3>
                    <button type="button" class="btn btn-outline-dark" id="btn1" data-toggle="modal" data-target="#myModal">LogIn</button>
                    <button type="button" class="btn btn-outline-dark" id="btn1" data-toggle="modal" data-target="#signup">Sign Up</button>
				 </div>
			</div>
	     
    </div>
    <!-- login modal -->
    <div class="container-2">
        <!-- The Modal  -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
               <h4 class="modal-title">LOGIN</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                 
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <img src="images/beard-logo.png" class="logo2"><br>
                
                <form action="login.php" onsubmit="return validateForm()" method="post">
                  <div class="form-group">
                    <label class="lab" for="text">Email address:</label>
                    <input type="text" name="gmail" class="form-control" placeholder="Enter email" id="gmail">
                  </div>
                  <div class="form-group">
                    <label class="lab" for="password">Password:</label>
                    <input type="password" name="pwd" class="form-control" placeholder="Enter password" id="pwd">
                  </div>
                  <input id="a" type="checkbox" onclick="toggle()"><span id="showpass">Show Password </span><br><br>
                  <button class="btn btn-primary login-button" type="submit">login</button>
                  <p><a id="create" href="" >New here? Create an account!</a></p>
                </form>
              </div>


            </div>
          </div>
        </div>
    </div>

    <!-- sign up modal -->
    <div class="container-2">
        <!-- The Modal -->
        <div class="modal fade" id="signup">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
               <h4 class="modal-title">SIGN UP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                 
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                
                <form action="signup.php" onsubmit="return validateSignUp()" method="post">
                  <div class="form-group">
                      <label class="lab">Full Name</label>
                      <input type="text" name="fname" class="form-control" placeholder="Enter your Full Name" id="name" required>
                  </div>
                  <div class="form-group">
                    <label class="lab" for="email">Email Address:</label>
                    <input type="email" name="gmail2" class="form-control" placeholder="Enter email" id="email" required>
                  </div>
                  <div class="form-group">
                    <label class="lab" for="Mnumber">Phone Number</label>
                    <input type="number" name="mobno" class="form-control" placeholder="Enter phone/mobile number" id="Mnumber" required>
                  </div>
                  <div class="form-group">
                    <label class="lab" for="pwd1">Password:</label>
                    <input type="password" name="pwd1" class="form-control" placeholder="Enter password" id="pwd1" required>
                  </div>
                   <div class="form-group">
                    <label class="lab" for="pwd2">Confirm Password:</label>
                    <input type="password" class="form-control" placeholder="Confirm password" id="pwd2" required>
                  </div>
                  <div class="form-group">
                    <input id="chk" type="checkbox" onclick="toggle2()">
                    <label for="chk" id="shw">Show Password</label>
                  </div>
                  <button class="btn btn-primary login-button" type="submit">Sign Up</button>
                  <p><a id="create" href="">Already have an account? Login!</a></p>
                </form>
              </div>


            </div>
          </div>
        </div>
    </div>
    
    
    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('click','ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
</body>
</html>


