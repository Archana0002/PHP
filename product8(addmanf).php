<?php

$con=new mysqli("localhost","root","","stock");
$id=$_GET['id'];
$c="select * from product where id='$id'";
$d=$con->query($c);
?>


<html>
<head>
<title></title>
</head>
  <body>
  <center>	
	<table border="1" cellpadding="10px">
	 <tr>
	   <th>name</th>
	   <th>quantity</th>
 	   <th>price</th>
 	   <th>manufacturedate</th>
 	   <th>expirydate</th>
	   <th>manufacturer</th>
	 </tr>
	 <?php
	 while($p=$d->fetch_assoc())
	 {
	 ?>
	<tr>
	
	<td><?php echo $p['name'] ?> </td>
	<td><?php echo $p['quantity'] ?> </td>
	<td><?php echo $p['price'] ?> </td>
	<td><?php echo $p['mdate'] ?> </td>
	<td><?php echo $p['edate'] ?> </td>
	<form method="post">
	  <td><input type="text" name="manf">
	  <input type="submit" value="update" name="btn2"> </td>
	</form>
	</tr>

<?php  }  ?>
	</table>
   </center>
   </body>
</html>

<?php
 if(isset($_POST['btn2']))
 {
   $manf=$_POST['manf'];
   $q3="update product set manufacturer='$manf' where id='$id'";
   echo $q3;
   $con->query($q3);
   header("Location:product7(altermanf).php");
}
?>