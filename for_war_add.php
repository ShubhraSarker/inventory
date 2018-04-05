
 <?php
  
  if(isset($_POST['save'])){
        require('connection.php'); 
        echo "php1";
        
       if(mysqli_query($db,"insert into warehouse values('{$_POST['item_name']}',
            '{$_POST['item_tag']}',
            '{$_POST['quantity']}',
            '{$_POST['row1']},
            '{$_POST['column1']}',
            '{$_POST['block_no']}',')"))
            echo "yes";
        else
            echo "no";

mysqli_close($db);}
?>
	
<!DOCTYPE HTML>
<html lang="en-US">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Hospital</title>
		<link rel="stylesheet" href="Style.css" type="text/css"/>
</head>
<body>
<div id="center_maker">
		<header id="header">
			<img src="logo1.png" alt="logo" title="Science & Technology" class="logo" width="100" height="65" />
			<h1 >HOSPITAL MANAGEMENT</h1>
		</header>
		
	<nav id="nav">
		<ul>

			
				<li><a href="login.php">Admin</a></li>
				
				
		</ul>
  </nav>



<form action="for_war_add.php" method="POST">

<nav id="nav">

                 name        :<input type="text" name="item_name"><br/>       
                 tag  :<input type="text" name="item_tag"><br/>
                 quantiy:<input type="text" name="quantity"><br/>
                 row    :<input type="text" name="row1"><br/>
                 column:<input type="text" name="column1"><br/>
                 block:	<input type="text" name="block_no"><br/>
                             <input type="submit" value="save" name="save">
                             </nav>
           </form>

</div>
</body>
</html>