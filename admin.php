<?php
	include('session.php');
	require_once("/config.php");
    include_once('db.php');
	 



$query = mysqli_query($connect, "SELECT * FROM `caini`");
$query1 = mysqli_query($connect, "SELECT * FROM `pisici`");
$query2 = mysqli_query($connect, "SELECT * FROM `pesti`");
$query3 = mysqli_query($connect, "SELECT * FROM `pasari`");

	if (isset($_GET['upd'])) {
$animal2 = $_GET['animal'];
$id = $_GET['ID'];
$varsta = $_GET['varsta'];
$greutate = $_GET['greutate'];
$dimensiuni = $_GET['dimensiuni'];
$sex = $_GET['sex'];
$imagine = $_GET['imagine'];
if($animal2 == 'pesti') {
	$queryupd = mysqli_query($connection, "update $animal2 set
	Varsta='$varsta', Dimensiuni='$dimensiuni',
	Imagine='images/$imagine' where ID='$id'");
}
	else if($animal2=='pasari') {
		$queryupd = mysqli_query($connection, "update $animal2 set
		Varsta='$varsta', Dimensiuni='$dimensiuni', Sex='$sex',
		Imagine='images/$imagine' where ID='$id'");
	}
	else{
		$queryupd = mysqli_query($connection, "update $animal2 set
		Varsta='$varsta', Greutate='$greutate', Dimensiuni='$dimensiuni',
		Sex='$sex', Imagine='images/$imagine' where ID='$id'");
	}
echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
}

echo '
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Petshop</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="popup.css">
	<script src="modernizr.js"></script> 
	<script src="popup.js"></script> 
	
';
		?>
<script>
	function configureDropDownLists(ddl1,ddl2) {
        var caini = new Array('Terrier', 'Labrador Retriever', 'Ciobanesc German', 'Bulldog', 'Husky');
        var pisici = new Array('Persana', 'Birmaneza', 'Siameza', 'Sfinx');
        var pesti = new Array('Caras Auriu', 'Neon', 'Scalar', 'Piranha');
		var pasari = new Array('Perus', 'Nimfa', 'Canar');
    
        switch (ddl1.value) {
            case 'caini':
                ddl2.options.length = 0;
                for (i = 0; i < caini.length; i++) {
                    createOption(ddl2, caini[i], caini[i]);
                }
                break;
            case 'pisici':
                ddl2.options.length = 0; 
            for (i = 0; i < pisici.length; i++) {
                createOption(ddl2, pisici[i], pisici[i]);
                }
                break;
            case 'pesti':
                ddl2.options.length = 0;
                for (i = 0; i < pesti.length; i++) {
                    createOption(ddl2, pesti[i], pesti[i]);
                }
                break;
            case 'pasari':
                ddl2.options.length = 0;
                for (i = 0; i < pasari.length; i++) {
                    createOption(ddl2, pasari[i], pasari[i]);
                }
                break;
                default:
                    ddl2.options.length = 0;
                break;
        }

    }

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
    
</script>		
		
	<?php
	echo'
</head>
<body>
  <nav class="navbar" id="top">
    <div class="inner button">
	<div id="profile">
		<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
		<b id="logout"><a href="logout.php">Log Out</a></b>
		<a href="#0" class="cd-popup-trigger">Adauga un animalut nou!</a>
	</div>
	</div>
  </nav>

  
  
  
  
  <div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<form method="POST" action="insert.php?ins">
	';	?>
			Animal: <select name="animal" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
				<?php echo'
					<option value=""> </option>
					  <option value="caini">Caine</option>
					  <option value="pisici">Pisica</option>
					  <option value="pesti">Peste</option>
					  <option value="pasari">Pasare</option>
				</select><br />
			Rasa: <select id="ddl2" name="rasa">
					  
				</select><br />
			Varsta: <input type="text" name="varsta"/><br />
			Greutate: <input type="text" name="greutate"/><br />
			Dimensiuni: <input type="text" name="dimensiuni"/><br />
			Culoare: <input type="text" name="culoare"/><br />
			Sex: <select name="sex">
					  <option>M</option>
					  <option>F</option>
				</select><br />
			Imagine: <input type="file" name="imagine"/><br /><br />
			<ul class="cd-buttons">
			<li><a><input name="ins" type="submit" value="Insert"/></a></li>
			<li><a href="#0" class="no">Renunta</a></li>
		</ul>
		</form>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
';
if (isset($_GET['update'])) {
	$animal1 = $_GET['anim1'];
	$update = $_GET['update'];
	$updateq = mysqli_query($connection, "select * from $animal1 where ID=$update");
while ($rows1 = mysqli_fetch_array($updateq)) {
echo'
<div class="cd-popup2" role="alert">
	<div class="cd-popup-container">
		<form method="GET">
			<input type="hidden" name="animal" value="'.$animal1.'"/>
			<input type="hidden" name="ID" value="'.$rows1['ID'].'"/><br />
			Rasa:  <select disabled name="rasa">
					  <option value="'.$rows1['Rasa'].'">'.$rows1['Rasa'].'</option>
				</select><br />
			Varsta:  <input type="text" name="varsta" value="'.$rows1['Varsta'].'"/><br />
			Greutate:  <input type="text" name="greutate" value="'.$rows1['Greutate'].'"/><br />
			Dimensiuni:  <input type="text" name="dimensiuni" value="'.$rows1['Dimensiuni'].'"/><br />
			Culoare:  <input type="text" name="culoare" value="'.$rows1['Culoare'].'"/><br />
			Sex:  <select name="sex">
					  <option>M</option>
					  <option>F</option>
				</select><br />
			Imagine:  <input type="file" name="imagine" value="'.$rows1['Imagine'].'"/><br /><br />
			<ul class="cd-buttons">
			<li><a><input name="upd" type="submit" value="Editeaza"/></a></li>
			<li><a href="#0" class="no">Renunta</a></li>
		</ul>
		</form>
		<a href="#" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container2 -->
</div> <!-- cd-popup 2-->
';
}}
echo'
  <div class="continer">
';

while ($rows = mysqli_fetch_array($query)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">
  			<a href="admin.php?update='.$rows['ID'].'&anim1=caini" class="change update cd-popup-trigger2">Editeaza</a>
  			<a href="delete.php?del='.$rows['ID'].'&anim=caini" class="change delete">Sterge</a>
  			<img src="'.$rows['Imagine'].'" />
  		</div>
  		<div class="rasa">'.$rows['Rasa'].'</div>
  		<div class="varsta">'.$rows['Varsta'].' ani</div>
  		<div class="greutate">'.$rows['Greutate'].' kg</div>
  		<div class="culoare">'.$rows['Culoare'].'</div>
  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
  		<div class="sex">'.$rows['Sex'].'</div>
  	</div>

 ';}
/*
while ($rows1 = mysqli_fetch_array($query)) {
if ($rows1['ID']==$_GET['ide']) {
	var_dump((!empty($_GET['ide'])));
 	if($_GET['ide']==$rows1['ID']){
 		 $idd = $_GET['ide'];
		 echo $idd;
		 $del="DELETE * FROM `caini` WHERE `ID`='.$idd.'";
		 $del = $idd ;
		 $rezdel=mysqli_query($connect, $del) or die(mysqli_error($db));
 		}
	}
}
*/



while ($rows = mysqli_fetch_array($query1)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">
  			<a href="admin.php?update='.$rows['ID'].'&anim1=pisici" class="change update cd-popup-trigger2">Editeaza</a>
  			<a href="delete.php?del='.$rows['ID'].'&anim=pisici" class="change delete">Sterge</a>
  			<img src="'.$rows['Imagine'].'" />
  		</div>
  		<div class="rasa">'.$rows['Rasa'].'</div>
  		<div class="varsta">'.$rows['Varsta'].' ani</div>
  		<div class="greutate">'.$rows['Greutate'].' kg</div>
  		<div class="culoare">'.$rows['Culoare'].'</div>
  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
  		<div class="sex">'.$rows['Sex'].'</div>
  	</div>

 ';
}

while ($rows = mysqli_fetch_array($query2)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">
  			<a href="admin.php?update='.$rows['ID'].'&anim1=pesti" class="change update cd-popup-trigger2">Editeaza</a>
  			<a href="delete.php?del='.$rows['ID'].'&anim=pesti" class="change delete">Sterge</a>
  			<img src="'.$rows['Imagine'].'" />
  		</div>
  		<div class="rasa">'.$rows['Rasa'].'</div>
  		<div class="varsta">'.$rows['Varsta'].' ani</div>
  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
  		<div class="culoare">'.$rows['Culoare'].'</div>
  	</div>

 ';
}

while ($rows = mysqli_fetch_array($query3)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">
  			<a href="admin.php?update='.$rows['ID'].'&anim1=pasari" class="change update cd-popup-trigger2">Editeaza</a>
  			<a href="delete.php?del='.$rows['ID'].'&anim=pasari" class="change delete">Sterge</a>
  			<img src="'.$rows['Imagine'].'" />
  		</div>
  		<div class="rasa">'.$rows['Rasa'].'</div>
  		<div class="varsta">'.$rows['Varsta'].' ani</div>
  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
  		<div class="culoare">'.$rows['Culoare'].'</div>
  		<div class="sex">'.$rows['Sex'].'</div>
  	</div>

 ';
}
echo ' 
  	
  </div>
</body>
</html>
';

?>