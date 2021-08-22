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

$name= $_POST['fname'];
$mail= $_POST['gmail2'];
$mobile= $_POST['mobno'];
$pass= $_POST['pwd1'];

$s = " select * from login where Email='$mail' or MOB='$mobile'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	
	echo '<script>alert("Username already taken, return to home page?"); window.location = "home.php";</script>';

	;
}
else
{
	// $register= "insert into login(Name,MOB,Email,Password) values ('$name', '$mobile','$mail','$pass')";
	
    $register= "call signupdata('$name', '$mobile','$mail','$pass')";
	mysqli_query($con, $register);
	echo '<script>alert("Registration Successful"); window.location = "grid.php";</script>;';
	
}

?>