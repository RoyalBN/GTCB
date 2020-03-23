<?php session_start(); ?>

<html>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="style.css" />
      <title> Site Scénario </title>
</head>


<!-- Corps de la Page -->
<body bgcolor = #C1DAE6>
<h1> <center> <u> <b> Site Scénario </b> </u> </center> </h1>

<!-- Lien vers Site IHM -->
<center>
<a href="http://www.openclassroom.com">Lien vers OpenClassroom</a>
</br>
</br>

<form method="POST" action="scenario.php">
<form method="POST" action="logout.php">
<h1> <b> <u> Gestion des Scénarios : </u> </b> </h1>
<input type="submit" name="ModifierScenario" value="Modifier Scénario"/>
<input type="button" name="TelechargerScenario" value="Télécharger Scénario"/>
<br/>
<br/>

<p>
   Choisissez le jour du scénario :   
   <select name="jour" >
     <option value="----" selected>---- </option>
	 <option value="Lundi">Lundi </option>
     <option value="Mardi">Mardi </option>
	 <option value="Mercredi">Mercredi </option>
	 <option value="Jeudi">Jeudi </option>
	 <option value="Vendredi">Vendredi </option>
     <option value="Samedi">Samedi </option>
	 <option value="Dimanche">Dimanche </option>
	</select> 
</p>
</form>
</form>
<br/>

<form method="POST" action="logout.php">
<input type="submit" name="deconnexion" value="Déconnexion"/>
</form>

</center>
</br>
</br>

</body>

</html>

