
  <?php
		if(isset($_POST['save'])){
		$db=new mysqli("localhost","root","","me1");
		mysqli_query($db,"INSERT into treatment values('{$_POST['treatment_id']}',
			'{$_POST['treatment_name']}',
			'{$_POST['no_of_patient']}',
			'{$_POST['doctor_id']}')");
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

				
				<li><a href="login.php">ADMIN</a></li>	
		</ul>
  </nav>
<form action="add_treat.php" method="POST">

                 Treatment ID:<input type="text" name="treatment_id"><br/>       
                 Treatment Name:<input type="text" name="treatment_name"><br/>
                 Number of patient:<input type="text" name="no_of_patient"><br/>
                 Doctor ID:<input type="text" name="doctor_id"><br/>
                             <input type="submit" value="save" name='save'>
           </form>
</div>
</body>
</html>