<?php
$con=new mysqli("localhost","root","","stock");
$id=$_GET['id'];
$q1="DELETE FROM product where id='$id'";
$con->query($q1);
header("Location:product7(altermanf).php");
$con->close()
?>