<?php
	$connect = new mysqli("localhost", "root", "", "petshop");

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
	
	/* return name of current default database */
	if ($result = $connect->query("SELECT DATABASE()")) {
	    $row = $result->fetch_row();
	    //printf("Default database is %s.\n", $row[0]);
	    $result->close();
	}

	if( isset($_POST['ins']) )
	{
	  $animal = $_POST['animal'];
	  $rasa = $_POST['rasa'];
	  $varsta = $_POST['varsta'];
	  $greutate = $_POST['greutate'];
	  $dimensiuni = $_POST['dimensiuni'];
	  $culoare = $_POST['culoare'];
	  $sex = $_POST['sex'];
	  $imagine = $_POST['imagine'];
 		if($animal == 'pesti') {
 			$insertq = "INSERT INTO $animal (`Rasa`, `Varsta`, `Dimensiuni`, `Culoare`, `Imagine`) VALUES ('$rasa',$varsta,$dimensiuni,'$culoare','images/$imagine')" or die(mysql_error());	
 		}
		else if($animal == 'pasari') {
 			$insertq = "INSERT INTO $animal (`Rasa`, `Varsta`, `Dimensiuni`, `Culoare`, `sex`, `Imagine`) VALUES ('$rasa',$varsta,$dimensiuni,'$culoare', '$sex','images/$imagine')" or die(mysql_error());	
 		}
		else {
	 		 $insertq = "INSERT INTO $animal (`Rasa`, `Varsta`, `Greutate`, `Dimensiuni`, `Culoare`, `Sex`, `Imagine`) VALUES ('$rasa',$varsta,$greutate,$dimensiuni,'$culoare','$sex','images/$imagine')" or die(mysql_error()); 
		}
	  $res = mysqli_query($connect, $insertq) or die('Error: '.mysql_error());
	
	  echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
	}

?>