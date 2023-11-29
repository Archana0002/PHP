<?php

$x=1;
$y="archana";

$conn=new mysqli("localhost","root","","S3MCA");
if($conn->connect_error)
{
  die("connection failed" .$conn->connect_error);
}

$sl="CREATE TABLE mace(id INT(2) PRIMARY KEY,Name VARCHAR(30) NOT NULL )";

if($conn->query($sl)==TRUE)
{
  echo "Table Student created successfully";
}
else
{
  echo "Error creating table:".$conn->error;
}

$sql="INSERT INTO mace(id,name)values('$x','$y')";

if($conn->query($sql)==TRUE)
{
  echo "New record created successfully";
}
else
{
  echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>
