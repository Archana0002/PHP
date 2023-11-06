<?php
$ar=array(array("id"=>1,"name"=>"Anu","physics"=>28,"maths"=>38,"python"=>40),
         array("id"=>2,"name"=>"Abi","physics"=>28,"maths"=>38,"python"=>40),
         array("id"=>3,"name"=>"Archana","physics"=>38,"maths"=>39,"python"=>40),
         array("id"=>4,"name"=>"Amala","physics"=>38,"maths"=>18,"python"=>40));
         $id=4;
?>
<html>
    <head>
        <title>Mace</title>
        
    </head>
    <body>
        <main>
            <center><h3>MACE</h3>
            <form method="post">
                <table width="50%" cellpadding="10">
                    
                    <tr>
                        <td>NAME:</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="number" name="id"></td>
                    </tr>
                </table>
                   <input type="submit" name="btn" class="form-control btn btn-dark" value="check" >
            </form>
            </center>
            
             <?php if (isset($_POST['btn']))
                    { 
                        foreach($ar as $student)
                             {
                              if($student["id"]==$_POST['id'] && $student['name']==$_POST['name'])
                                  { $total=0;
                                    $fail=0;
            ?>                     <CENTER> <h2>FIRST SERIES EXAMINATION RESULT</h2><CENTER>
                                    <table width="40%" cellpadding="10" text-align="center" class="table">
                                    
                                             
                                             <tr>
                                                 <th>Subject</th>
                                                 <th>Mark</th>
                                                 <th>status</th>
                                                 </tr>
                                     
                                    <?php  
                                        foreach($student as $key=>$value)
                                            { 
                                               if($key!="id" and $key!="name")
                                               	  {
                                    ?>
                                                <tr>
                                                     <td><?php echo $key ?></td>
                                                     <td><?php echo $value ?></td>
                                                     <td><?php if($value>=30) {echo "pass";} else {echo "fail" ;$fail=1;}?></td>
                                               </tr>
                                    <?php   $total=$total+$value;
                                                   }
                                            } ?> 
                                               <tr>
                                               	     <td>TOTAL</td>
                                               	     <td><?php echo $total ?></td>
                                               	     <td><?php if($fail==1){echo "fail";} else {echo "pass";} ?> </td>
                                               </tr>
                   
                             <?php break;
                                   }
                             }
                   } ?>        
                                    </table>
            

                
        </main>
    </body>
</html>
