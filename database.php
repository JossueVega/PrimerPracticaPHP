<?php
$conex = mysqli_connect("localhost","root","","prueba");

if(mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>