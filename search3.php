<?php
	require('connection.php'); 

		$view=mysqli_query($db,"UPDATE warehouse SET item_name='$_POST[item_name]', item_tag='$_POST[item_tag]', quantity='$_POST[quantity]'
		, row1='$_POST[row1]', column1='$_POST[column1]', block_no='$_POST[block_no]' where item_name='$_POST[item_name]' ");

		if(mysqli_query($db,$view)){
			echo "Not Update";
		}
		else{
			header("refresh:1; url=search2.php");
		}
?>