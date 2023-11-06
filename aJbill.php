<html>
<head>


</head>
<body>

    <center> <h3 color:red;>WALLMART</h3></center>
        <form name="bill" method="POST">
          <table cellpadding="20">
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name1"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant1"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price1"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name2"></td>
                  <td>QuantityS:</td>
                  <td><input type="number" placeholder="Quantity" name="quant2"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price2"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name3"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant3"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price3"></td>
              </tr>
              <tr>
                  <td>Item name</td>
                  <td><input type="text" placeholder="item name" name="name4"></td>
                  <td>Quantity:</td>
                  <td><input type="number" placeholder="Quantity" name="quant4"></td>
                  <td>price</td>
                  <td><input type="number" placeholder="price" name="price4"></td>
              </tr>
            
          </table>
         
                   <input type="submit" value="BILLS" style="background:green;color:white;" name="bill">
               
                
                   <input type="submit" value="CLEAR" style="background:red;color:white;" name="clr">
                
         
        <form>
        
 
      
<?php
    if(isset($_POST["bill"]))
    {
    ?>
    <center><h3>BILLS</h3></center>
    <table cellpadding="2">
       <tr>
           <th>SL NO</th>
           <th>Name</th>
           <th>Quantity</th>
           <th>Price</th>
           <th>Total<th>
       <tr>
        <?php
         $i=1;
         $grandtotal=0;
         for($i=1;$i<=4;$i++)
         {
            $name="name".$i;
            $quant="quant".$i;
            $price= "price".$i;
            $total=$_POST[$quant]*$_POST[$price];
            $grandtotal=$grandtotal+$total;
        
            ?>
                
       <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $_POST[$name]; ?></td>
          <td><?php echo $_POST[$quant]; ?></td>
          <td><?php echo $_POST[$price]; ?></td>
          <td><?php echo $total; ?></td>
       </tr>
       <?php } ?>
       <tr>
        <td>GRANDTOTAL</td>
        <td><?php echo $grandtotal."$"; ?></td>
       </tr>
       
    </table>
    
    
    
    
    
    
<?php    
    }
    
?>
 

</main>
</body>
</html>
