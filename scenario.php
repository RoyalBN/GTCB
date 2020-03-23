<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	   <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	   <link rel="stylesheet" href="style.css" />
	   <title> Modifier Scénario </title>
</head>
<body bgcolor = #C1DAE6>
<center>
</center>
</body>
</html>


<!-- TRAITEMENTS OPTIONS -->

<?php

$selectjour;
$telecharger;

// *****************************************
//  APPUI sur la Touche "Modifier Scénario" 
// *****************************************
  if(isset($_POST['ModifierScenario']))
   {
    if($_POST['jour'] == "----"){
      	echo "Veuillez choisir un jour pour le scénario"; 
	   } 
	else if($_POST['jour'] != "----")
            { 
	         $selectjour = $_POST['jour'];
        
			 // Enregistrement des informations de la Date dans des variables
			 $jour = date('d');
			 $mois = date('m');
			 $annee = date('Y');

			 $heure = date('H');
			 $minute = date('i');

			 // Affichage de la Date et du Jour de Scénario
			 echo "<br/>";
			 echo "<center>";
			 echo "<font size=\"6\">"."<u>"."<b>";		
			 echo "Scénario du ".$_POST['jour']."<br/>"."<br/>";
			 echo "</font>"."</u>"."</b>";
			 echo 'Bienvenue ! '.'<br/>'; 
			 echo 'Nous sommes le '."<font>".$jour.'/'.$mois.'/'.$annee."</font>".' et il est '."<font>".$heure.' h '.$minute."."."</font>"."<br/>";
			 echo "<u>"."Vous avez selectionné le jour suivant pour le scénario : "."</u>"."<font>".$_POST['jour']."</font>";
			 echo "</center>";
			 echo "<br/>"."<br/>";		
			
			
			 // ************************	
			 //  AFFICHAGE DES TABLEAUX
			 // ************************  
			 $min = array("00","15","30","45");
			 $heure = array("00H","04H","08H","12H","16H","20H");	
			 $etatrad = array("A","H","E","C","-1","-2");
			 $etattor = array("0","1");
			 $nb_passage=0;
			 $i=0;	
			 $j=0; 
			
			
			 // ************
			 //  RADIATEURS 
			 // ************
			 
			 // MODIFICATIONS ETAT RADIATEUR N°1	
			 echo "<u>";
			 echo "Radiateur N°1 - ".$_POST['jour']." :";
			 echo "</u>"."<br/>";
			 echo "<br/>";
			 echo '<form method="POST" action="scenario.php" name="formrad1">';
			 echo '<table border="1" name="rad1" cellpadding="0" align="left">';
			 echo '<tr> <td> Heure / Minutes </td>'; 
			 
			 // AFFICHAGE Minutes en HORIZONTAL
			 while($nb_passage <= 3)
				   {
			        for($i=0; $i<=3; $i++)
					    {
					     echo '<td>'.$min[$i].'</td>';
					    } 
				    $nb_passage++;
                   } 					 
			 echo '</tr>';
			 
			 // AFFICHAGE Heures en VERTICAL
			 $nb_passage=0;
			 while($nb_passage !=1)
			       {
				  	for($i=0; $i<=5; $i++)
					    {
					     echo '<tr>';
						 echo "<td>"."<br/>".$heure[$i];
						 for($j=0; $j<=15; $j++)
						    {
							 // AFFICHAGE Liste Déroulante
							 echo '<td><select name="etatrad1" >';
								   foreach($etatrad as $key => $value):
								   echo '<option value="'.$key.'">'.$value.'</option>';
								   endforeach;
							 echo '</select></td>'; 								   
								 
						    }
						 echo "</td>"; 
						 echo '</tr>';
                        } 						 
					$nb_passage++; 
				   }
				   
			 echo '</table>';
			 echo "<br/>";  
             echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
			 echo '<input type="submit" name="retour" value="Retour"/>';
             echo '</form>'; 
			 echo "<br/>"."<br/>";				


								
			 // MODIFICATIONS ETAT RADIATEUR N°2	
			 echo "<br/>";
			 echo "<u>";
			 echo "Radiateur N°2 - ".$_POST['jour']." :";
			 echo "</u>"."<br/>";
			 echo "<br/>";
             echo '<form method="POST" action="scenario.php" name="formrad2">';
			 echo '<table border="1" name="rad2" cellpadding="0" align="left">';
			 echo '<tr> <td> Heure / Minutes </td>'; 
			 
			 // AFFICHAGE Minutes en HORIZONTAL
			 $nb_passage=0;
			 while($nb_passage <= 3)
				   {
			        for($i=0; $i<=3; $i++)
					    {
					     echo '<td>'.$min[$i].'</td>';
					    } 
				    $nb_passage++;
                   } 					 
			 echo '</tr>';
			 
			 // AFFICHAGE Heures en VERTICAL
			 $nb_passage=0;
			 while($nb_passage !=1)
			       {
				  	for($i=0; $i<=5; $i++)
					    {
					     echo '<tr>';
						 echo "<td>"."<br/>".$heure[$i];
						 for($j=0; $j<=15; $j++)
						    {
							 // AFFICHAGE Liste Déroulante
							 echo '<td><select name="etatrad1" >';
								   foreach($etatrad as $key => $value):
								   echo '<option value="'.$key.'">'.$value.'</option>';
								   endforeach;
							 echo '</select></td>'; 
							 
						    }
						 echo "</td>"; 
						 echo '</tr>';
                        } 						 
					$nb_passage++; 
				   }
				   
			 echo '</table>';
			 echo "<br/>";
             echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
			 echo '<input type="submit" name="retour" value="Retour"/>';			 
             echo '</form>';
			 echo "<br/>"."<br/>";	
				 
				 
				 
			 // ******
			 //  TORs
			 // ******
			 
			 // MODIFICATIONS ETAT TOR N°1	
			 echo "<br/>";
			 echo "<u>";
			 echo "TOR N°1 - ".$_POST['jour']." :";
			 echo "</u>"."<br/>";
			 echo "<br/>";
             echo '<form method="POST" action="scenario.php" name="formtor1">';
			 echo '<table border="1" name="tor1" cellpadding="0" align="left">';
			 echo '<tr> <td> Heure / Minutes </td>'; 
			 
			 // AFFICHAGE Minutes en HORIZONTAL
			 $nb_passage=0;
			 while($nb_passage <= 3)
				   {
			        for($i=0; $i<=3; $i++)
					    {
					     echo '<td>'.$min[$i].'</td>';
					    } 
				    $nb_passage++;
                   } 					 
			 echo '</tr>';
			 
			 // AFFICHAGE Heures en VERTICAL
			 $nb_passage=0;
			 while($nb_passage !=1)
			       {
				  	for($i=0; $i<=5; $i++)
					    {
					     echo '<tr>';
						 echo "<td>"."<br/>".$heure[$i];
						 for($j=0; $j<=15; $j++)
						    {	
							 // AFFICHAGE Liste Déroulante
							 echo '<td><select name="etatrad1" >';
								   foreach($etattor as $key => $value):
								   echo '<option value="'.$key.'">'.$value.'</option>';
								   endforeach;
							 echo '</select></td>'; 
							 
						    }
						 echo "</td>"; 
						 echo '</tr>';
                        } 						 
					$nb_passage++; 
				   }
				   
			 echo '</table>';
		     echo "<br/>";
			
             echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
			 echo '<input type="submit" name="retour" value="Retour"/>';
             echo '</form>';
			 echo "<br/>"."<br/>";	
			 
			 
			 
			 // MODIFICATIONS ETAT TOR N°2	
			 echo "<br/>";
			 echo "<u>";
			 echo "TOR N°2 - ".$_POST['jour']." :";
			 echo "</u>"."<br/>";
			 echo "<br/>";
             echo '<form method="POST" action="scenario.php" name="formtor2">';
			 echo '<table border="1" name="tor2" cellpadding="0" align="left">';
			 echo '<tr> <td> Heure / Minutes </td>'; 
			 
			 // AFFICHAGE Minutes en HORIZONTAL
			 $nb_passage=0;
			 while($nb_passage <= 3)
				   {
			        for($i=0; $i<=3; $i++)
					    {
					     echo '<td>'.$min[$i].'</td>';
					    } 
				    $nb_passage++;
                   } 					 
			 echo '</tr>';
			 
			 // AFFICHAGE Heures en VERTICAL
			 $nb_passage=0;
			 while($nb_passage !=1)
			       {
				  	for($i=0; $i<=5; $i++)
					    {
					     echo '<tr>';
						 echo "<td>"."<br/>".$heure[$i];
						 for($j=0; $j<=15; $j++)
						    {
							 // AFFICHAGE Liste Déroulante
							 echo '<td><select name="etatrad1" >';
								   foreach($etattor as $key => $value):
								   echo '<option value="'.$key.'">'.$value.'</option>';
								   endforeach;
							 echo '</select></td>'; 
							 
						    }
						 echo "</td>"; 
						 echo '</tr>';
                        } 						 
					$nb_passage++; 
				   }
				   
			 echo '</table>'; 
			 echo "<br/>";
			 
             echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
 			 echo '<input type="submit" name="retour" value="Retour"/>'; 
			 echo '</form>';
			 echo "<br/>"."<br/>";	 
			
			
			
			
			
			} // FIN du ELSE IF
         
   } // FIN du IF
    


	


// ***********************************************   
//  APPUI sur la Touche "Retour" sur scenario.php 
// ***********************************************
  if(isset($_POST['retour']))
    {							                                               	                                                                              
	 // Ouverture Fichier $selectjour
	 switch($selectjour){
						 // Lundi
						 case $selectjour = "Lundi":
								
						      $fichier = "Scenario/LundiScenario.txt"; 
						      $lundi = fopen($fichier, "r+") 
						      or die("Impossible d'ouvrir le fichier");
													
				
						      // EFFACER CONTENU Fichier
						      ftruncate($lundi, 0); 
				                         
				              // Pour Chaque Element Tableau --> GET VALUE
                              
								        
							  foreach($etatrad as $key => $value):
							  echo 'Clé: '.$key.', Valeur: '.$value;
							  
						
							  file_put_contents("Scenario/LundiScenario.txt", $value[$j]);	
										   
							  endforeach;    						 
								   	
                                								   
											
							  // Ecrire VALUE de Chaque Tableau dans Fichier avec à la fin \r\n
											
							  // Si Ecriture FINIE --> FERMER Fichier, RETOUR sur Page Précédente
											
							  fclose($lundi);
							  				
							  /*echo "
								    <script type=\"text/javascript\" language=\"javascript\">
								    window.location.href='/sitescenario.php';								   
								    </script>								   								  	                                      
								   ";*/
												
						      break;
							
									
									
									
									
									
									
						 // Mardi
						 case $selectjour = "Mardi":
										
							  $fichier = "Scenario/MardiScenario.txt"; 
							  $mardi = fopen("Scenario/MardiScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;
									
						 // Mercredi
						 case $selectjour = "Mercredi":
										
							  $fichier = "Scenario/MercrediScenario.txt"; 
							  $mercredi = fopen("Scenario/MercrediScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;	
									
						 // Jeudi
						 case $selectjour = "Jeudi":
										
							  $fichier = "Scenario/JeudiScenario.txt"; 
							  $jeudi = fopen("Scenario/JeudiScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;
									
						 // Vendredi
						 case $selectjour = "Vendredi":
						 			
						      $fichier = "Scenario/VendrediScenario.txt"; 
							  $vendredi = fopen("Scenario/VendrediScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;
									
						 // Samedi
						 case $selectjour = "Samedi":
										
							  $fichier = "Scenario/SamediScenario.txt"; 
							  $samedi = fopen("Scenario/SamediScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;
									
						 // Dimanche
						 case $selectjour = "Dimanche":
										
						      $fichier = "Scenario/DimancheScenario.txt"; 
							  $dimanche = fopen("Scenario/DimancheScenario.txt", "r+") 
							  or die("Impossible d'ouvrir le fichier");
							  break;						
				                    
									
						} // Fin Switch(case)
				
                                				
		                       
					
					
               } // Fin IF(Appui Retour)  
   
   
   
   
   
   
   

	

 

?>