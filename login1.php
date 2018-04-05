<?php
       
        
        
        require('connection.php'); 
        $sql=mysqli_query($db,"select * from admin where username= ");
        
        if($sql!=NULL)
        {
            header("location: index.php");

        }

    else{
            echo "Your username or password is incorrct!";
        }
  mysqli_close($db);
?>