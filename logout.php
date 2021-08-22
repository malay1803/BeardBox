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

$s= "delete from cart";
$result = mysqli_query($con, $s);

  session_destroy();

  header('location:home.php');



?>