<?php
	require('connection.php'); 
	
		
		
	
		$view=mysqli_query($db,"UPDATE product SET item_name='$_POST[item_name]', price='$_POST[price]', quantity='$_POST[quantity]'
		, item_tag='$_POST[item_tag]', type='$_POST[type]' where item_name='$_POST[item_name]' ");
		if(mysqli_query($db,$view)){
			echo "Not Update";
		}
		else{
			header("refresh:1; url=search.php");
		}

	

	
?>