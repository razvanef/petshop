<?php
	include_once('db.php');
 
	if( isset($_GET['del']) )
	{
		$animal = $_GET['anim'];
		$id = $_GET['del'];
		$sql= "DELETE FROM $animal WHERE ID='$id'";
		$res= mysqli_query($connect,$sql) or die("Failed".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
	}
?>