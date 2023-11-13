<html>
 <head>
  <title> DEMO </title>
   <body>
     <form name="f1" method="post" >
     
       Name<input type="text" name="name"><br><br>
       Batch<input type="text" name="batch"><br><br>
       mark1<input type="text" name="mark1"><br><br>
       mark2<input type="text" name="mark2"><br><br>
       mark3<input type="text" name="mark3"><br><br>
       <input type="submit" value="Submit" name="btn"><br>
     </form> 
   </body>
 </head>
</html>

<?php
if(isset($_POST["btn"]))
{
  
  ?>
  <table>
  <tr>
  <th>Name</th>
  <th>Batch</th>
  <th>Mark1</th>
  <th>Mark2</th>
  <th>Mark3</th>
  
  </tr>
  <tr>
  <td><?php  echo $_POST["name"]."<br>";?></td>
  <td><?php echo $_POST["batch"]."<br>";?></td>
  <td><?php echo $_POST["mark1"]."<br>";?></td>
  <td><?php echo $_POST["mark2"]."<br>";?></td>
  <td><?php echo $_POST["mark3"]."<br>";?></td>
  
  </tr>
  </table>
  
  <?php
  $avg=($_POST["mark1"]+ $_POST["mark2"] + $_POST["mark3"])/3;
  echo "Average is " .round($avg,2);
  
}
?>

<html>
 <head>
  <body>
   <h1>
    HELLO
   </h1>
  </body>
 </head>
</html>
  
  
