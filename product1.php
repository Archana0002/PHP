<html>
  <head>
    <title>Product</title>
  </head>
     <body>
       <center>
	<h1>PRODUCTS</h1>
	<form method="POST">
	<table cellpadding="10px" border="1">
        <?php
           for($i=0;$i<4;$i++)
           {
		$name="name".$i;
		$quantity="quantity".$i;
		$price="price".$i;
		$mdate="mdate".$i;
		$edate="edate".$i;
	   ?>
	 <tr>
	  <td>item name</td>
	  <td><input type="text" name="name"></td>
	 
	  <td>quantity</td>
	  <td><input type="number" name="quantity"></td>
	 
	  <td>price</td>
	  <td><input type="number" name="price"></td>
	 
	  <td>manufacturer date</td>
	  <td><input type="date" name="mdate"></td>
	 
	  <td>expiry date</td>
	  <td><input type="date" name="edate"></td>
	 </tr>
	<?php   }  ?>
	</table><br>
	<input type="submit" value="submit" name="btn1">
	</form>
       </center>
     </body>
</html>
	
