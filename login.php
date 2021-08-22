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

$name= $_POST['gmail'];
$pass= $_POST['pwd'];

$s = " select * from login where Email = '$name' and Password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);



if($num == 1)
{   
	$query = mysqli_fetch_assoc($result);

	$_SESSION['user'] = $query['Name'];
	header('location: grid.php');
}
else
{
	header('location: home.html');
}


?>
