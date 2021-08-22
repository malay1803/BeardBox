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

$item = $_POST['n'];

$s= "select * from beardproducts where product_ID= '$item'";
$result = mysqli_query($con, $s);

$query = mysqli_fetch_assoc($result);

$name=$query['Name'];
$price= $query['Price'];

$register="insert into cart(name,price,quantity) values('$name', '$price',1)";
mysqli_query($con, $register);
header('location: Grid.php');

?>