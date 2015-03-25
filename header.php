<?php
include('checklogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Petshop</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="jquery-2.1.3.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
  <nav class="navbar" id="top">
    <div class="inner button">
    	<a href="index.php">Acasa</a>
    	<a href="search.php">Cauta</a>
      <a class="buttonlog" href="#">Log-in</a>
      <div class="popup">
        
        <form name="login" method="post" action="">
            <P><span class="title">Username</span> <input id="name" name="username" placeholder="username" type="text" /></P>
            <P><span class="title">Password</span> <input id="password" name="password" placeholder="**********" type="password" /></P>
            <P><input name="submit" type="submit" value="Login" /></P>
            <span><?php echo $error; ?></span>
        </form>
        <a href="#" class="close">X close</a>
    </div>
    </div>
  </nav>