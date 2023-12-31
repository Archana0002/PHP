<?php
$con=new mysqli("localhost","root","","stock");

$f="alter table product add(manufacturer varchar(30))";

if($con->query($f)==True)
{
  echo "Altered";
}
else
{
  echo "failed";
}

$con->close();

?>