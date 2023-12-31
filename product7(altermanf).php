<?php

$con=new mysqli("localhost","root","","stock");
$c="select * from product";
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
           <th>action</th>
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
	<?php  if($p['manufacturer'])
	       { ?>
		  <td><?php echo $p['manufacturer']; ?> </td>  <?php
	       }
	       else
	       {   ?>
		  <td> <a href="product8(addmanf).php ? id= <?php echo $p['id']; ?>"> <input type="button" value="add"></a>
		  </td>
		<?php } ?>
	<td> <a href="delete.php ? id= <?php echo $p['id']; ?>"> <input type="button" value="add"></a>
	</td>
		  
	</tr>

<?php  }  ?>
	</table>
   </center>
   </body>
</html>