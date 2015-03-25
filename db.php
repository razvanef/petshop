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

?>