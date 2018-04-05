<?php
                                             
 require('connection.php'); 
 $fname=$_POST['touple'];
  $view=mysqli_query($db,"delete from product where item_name ='$fname'");
    
			header("refresh:1; url=tablepro.php");

 ?>