<?php
$conn=mysqli_connect("localhost","root","","seacameldb");

if($conn -> connect_errno > 0)
{
	die("unabel to connect");
}
?>