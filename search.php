<?php
	
	require_once("/config.php");
    include_once('db.php');
	include('checklogin.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin.php");
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
	<script src="slidereveal.js"></script>
	<script src="main.js"></script>
	<style type="text/css">
      
      .slider{
        background-color: rgba(0, 0, 0, 0.6);
		font-size: 14px;
      }
	  #slider input[type="submit"] {
	  	display: inline-block;
		border: 1px solid #fff;
		font-size: 14px;
		line-height: 24px;
		border-radius: 3px;
		padding: 2px 15px;
		text-decoration: none;
		margin-top: 5px;
	  }
    
    </style>	

</head>
<body>
  <nav class="navbar" id="top">
  <div class="inner button">
	<a href="index.php">Acasa</a>
	  <a id="trigger">Cauta</a>	
	  <form style="display:inline" method="post"><input id="toate" name="cauta" type="submit" class="button2" value="Toate animalele" ></form>
	
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
	
	<div id="slider" class="slider">
      	<form method="post" style="margin-left: 25px;">
      		Caini cu dim_med > Ciobanesc German:<br/>
			<input name="cauta1"  type="submit" class="button2" value="Filtru1" ><br />
			Caini protectori mai invarsta de <input name="ani" type="text" size="3"> ani
			<input name="cauta2"  type="submit" class="button2" value="Filtru2" ><br />
			Rase de animale energice: <br />
			<input name="cauta3"  type="submit" class="button2" value="Filtru3" ><br />
			Caini masculi su durata de viata mai mare de <input name="ani2" type="text" size="3">  ani: 
			<input name="cauta4"  type="submit" class="button2" value="Filtru4" ><br />
			Pisici afective: <br />
			<input name="cauta5"  type="submit" class="button2" value="Filtru5" ><br />
			Caini negrii mai mari de 40 cm: <br />
			<input name="cauta6"  type="submit" class="button2" value="Filtru6" ><br />
			Pesti cu demensiune medie sub 15 cm
			<input name="cauta7"  type="submit" class="button2" value="Filtru7" ><br />
			Pasari mici si zgomotoase: <br />
			<input name="cauta8"  type="submit" class="button2" value="Filtru8" ><br />
			Pisica cu greutatea peste medie: <br/>
			<input name="cauta9"  type="submit" class="button2" value="Filtru9" ><br />
			Statistica a caracteristicilor pentru rasele de pisici: <br/>
			<input name="cauta10"  type="submit" class="button2" value="Filtru10" ><br />
		</form>
    </div>

  </nav>
 
  <div class="continer">
 ';
	if(isset($_REQUEST['cauta1']))
	{
		$queryInfo="SELECT * FROM `caini` WHERE `Dimensiuni` > (SELECT `Dimensiune_medie` FROM `specii` WHERE `Specie` = 'Ciobanesc German')";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta2']))
	{
		$var=$_REQUEST['ani'];
		$queryInfo="SELECT * FROM caini C, specii S, atribut_rasa A WHERE C.Rasa = S.Specie AND C.Varsta > $var AND A.Rasa = S.Specie AND A.ID_caracteristici = 8";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta3']))
	{
		$queryInfo="SELECT * FROM specii S, caracteristici C, atribut_rasa A WHERE C.ID = A.ID_caracteristici AND S.Specie = A.Rasa AND C.caracteristica = 'energic'";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine" style="min-height: 405px;">
			  		
			  		<div class="rasa">'.$rows['Specie'].'</div>
			  		<div class="varsta">'.$rows['Durata_de_viata'].' ani (medie)</div>
			  		<div class="dimensiune">'.$rows['Dimensiune_medie'].' cm (medie)</div>
			  		<div class="culoare">'.$rows['Comentarii'].'</div>
			  	</div>
				
			 ';}
		 }
	}
	if(isset($_REQUEST['cauta4']))
	{
		$var=$_REQUEST['ani2'];
		$queryInfo="SELECT * FROM caini C WHERE Sex = 'M' AND C.Rasa IN (SELECT S.Specie FROM specii S WHERE S.Durata_de_viata > $var)";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta5']))
	{
		$queryInfo="SELECT * FROM pisici P, specii S, caracteristici C, atribut_rasa A WHERE P.Rasa = S.specie AND C.ID = A.ID_caracteristici AND S.specie = A.Rasa AND C.caracteristica = 'afectiv' ";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta6']))
	{
		$queryInfo="SELECT * FROM caini C WHERE C.greutate >ALL(SELECT Z.greutate FROM caini Z WHERE Z.dimensiuni>40 AND Z.culoare='negru')";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta7']))
	{
		$queryInfo="SELECT * FROM pesti P, specii S WHERE P.Rasa = S.specie AND S.dimensiune_medie < 15";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
			  			<img src="'.$rows['Imagine'].'" />
			  		</div>
			  		<div class="rasa">'.$rows['Rasa'].'</div>
			  		<div class="varsta">'.$rows['Varsta'].' ani</div>
			  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
			  		<div class="culoare">'.$rows['Culoare'].'</div>
			  	</div>
				
			 ';}
		 }
	}
	if(isset($_REQUEST['cauta8']))
	{
		$queryInfo="SELECT * FROM pasari P, specii S, caracteristici C, atribut_rasa A WHERE P.Rasa = S.specie AND C.ID = A.ID_caracteristici AND S.specie = A.Rasa AND C.caracteristica = 'zgomotos' AND P.dimensiuni<15";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
			  			<img src="'.$rows['Imagine'].'" />
			  		</div>
			  		<div class="rasa">'.$rows['Rasa'].'</div>
			  		<div class="varsta">'.$rows['Varsta'].' ani</div>
			  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
			  		<div class="culoare">'.$rows['Culoare'].'</div>
			  		<div class="sex">'.$rows['Sex'].'</div>
			  	</div>
				
			 ';}
		 }
	}
	if(isset($_REQUEST['cauta9']))
	{
		$queryInfo="SELECT * FROM Pisici P WHERE P.greutate>(Select AVG(greutate) FROM Pisici)";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine">
			  		<div class="imganimal">
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
		 }
	}
	if(isset($_REQUEST['cauta10']))
	{
		$queryInfo="SELECT COUNT(P.Rasa) AS Nrderase, C.caracteristica AS Carac
					FROM pisici P, specii S, caracteristici C, atribut_rasa A 
					WHERE P.Rasa = S.specie AND C.ID = A.ID_caracteristici AND S.specie = A.Rasa 
					GROUP BY C.caracteristica";
		 $queryI=mysqli_query($connect,$queryInfo);
		
		 if($queryI){
			 while($rows = mysqli_fetch_array($queryI)) {
			 echo '
				<div class="caine" style="padding: 30px 0;min-height:0;">
			  		
			  		<div class="rasa">'.$rows['Carac'].'</div>
			  		<div class="rasa">'.$rows['Nrderase'].'</div>

			  	</div>
				
			 ';}
		 }
	}
	if(isset($_REQUEST['cauta']))
	{
		$query = mysqli_query($connect, "SELECT * FROM `caini`");
		$query1 = mysqli_query($connect, "SELECT * FROM `pisici`");
		$query2 = mysqli_query($connect, "SELECT * FROM `pesti`");
		$query3 = mysqli_query($connect, "SELECT * FROM `pasari`");
while ($rows = mysqli_fetch_array($query)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">

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


while ($rows = mysqli_fetch_array($query1)) {
	

echo '
  	<div class="caine">
  		<div class="imganimal">
  			
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

  			<img src="'.$rows['Imagine'].'" />
  		</div>
  		<div class="rasa">'.$rows['Rasa'].'</div>
  		<div class="varsta">'.$rows['Varsta'].' ani</div>
  		<div class="dimensiune">'.$rows['Dimensiuni'].' cm</div>
  		<div class="culoare">'.$rows['Culoare'].'</div>
  		<div class="sex">'.$rows['Sex'].'</div>
  	</div>

 ';
}}
echo'  	
  </div>
  
  <script type="text/javascript">
    	$(function(){
        slider = $("#slider").slideReveal({
          // width: 100,
          // push: false,
          position: "right",
          speed: 600,
          trigger: $("#trigger"),
          // autoEscape: false,
          show: function(obj){
            console.log(obj);
          },
          shown: function(obj){
            console.log(obj);
          },
          hide: function(obj){
            console.log(obj);
          },
          hidden: function(obj){
            console.log(obj);
          }
        });

       
        setTimeout(function(){
          slider.slideReveal("show", false);
        }, 1000);

        setTimeout(function(){
          slider.slideReveal("hide", false);
        }, 3000);
    	});

      /*
      Then you call:
      $("#slider").slideReveal("show");
      $("#slider").slideReveal("hide");
      */
    </script>
  
</body>
</html>
';

?>