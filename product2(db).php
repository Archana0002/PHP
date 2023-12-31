<?php 

$con=new mysqli("localhost","root","");

if($con->connect_error)
{
	die("Connection failed:");
}

$a="CREATE DATABASE stock";

if($con->query($a)==True)
{
	echo "Database created";
}
else
{
	echo "Failed".$con->connect_error;
}

$con->close();

?>