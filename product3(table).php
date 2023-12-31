<?php 

$con=new mysqli("localhost","root","","stock");

if($con->connect_error)
{
	die("connection failed");
}

$b="CREATE TABLE product(id INT(2) PRIMARY KEY AUTO_INCREMENT,name VARCHAR(20) NOT NULL,quantity INT(4) NOT NULL,price DECIMAL(7,2) NOT NULL,mdate DATE NOT NULL, edate DATE NOT NULL)";

if($con->query($b)==True)
{
   echo "Table created";
}
else
{
   echo "table creation failed:";
}

?>