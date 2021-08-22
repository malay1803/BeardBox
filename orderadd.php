<?php 

  session_start();

$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'beardbox';

$con = mysqli_connect($database_host, $database_user, $database_pass, $database_name);

if(mysqli_connect_errno())
{
	exit("failed to connect,error: ". mysqli_connect_error());
}


$s= "select * from cart";
$result = mysqli_query($con, $s);

$query = mysqli_fetch_assoc($result);

$name=$query['name'];
$price= $query['price'];


$n2= $_SESSION['user'];

$s2= "select * from login where Name= '$n2'";

$result2= mysqli_query($con, $s2);

$query2= mysqli_fetch_assoc($result2);

$id= $query2['Customer_ID'];

$register="insert into orders(Cust_ID,Product_name,price,quantity) values('$id',$name', '$price',1)";
mysqli_query($con, $register);


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About Us</title>
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
            <li ><a href="homeLoggedIn.php">Home</a></li>
            <!-- <li><a href="grid.html" target="_blank">Products</a></li> -->

            <li>
             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Grid.php">Beard</a>
              <a class="dropdown-item" href="hair.php">Hairs</a>
             </div>
            </li>

            <li class="active"><a href="aboutus.html">About</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a class="yelloww" href="logout.php">LogOut</a></li>
            
        </ul>
    </nav>

    

   <section id="contactSection">




         	
       <h1>Thank you</h1>

	
   </section>


</body>
</html>