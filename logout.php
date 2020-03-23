<?php
session_start();
// ********************************************************  
//  APPUI sur la Touche "Déconnexion" sur sitescenario.php
// ********************************************************
if(isset($_POST['deconnexion']))
   {
	session_destroy();   
    echo "
	      <script type=\"text/javascript\" language=\"javascript\">
		  window.location.href='/';
		  </script>
	     ";
   }



// **********************************************************
//  APPUI sur la Touche "Modifier Scénario" sur scenario.php
// **********************************************************
  if(isset($_POST['ModifierScenario']))
   {
    if($_POST['jour'] == "----"){
      	echo "Veuillez choisir un jour pour le scénario"; 
	   } 
	else if($_POST['jour'] != "----"){ 
	         $selectjour = $_POST['jour'];
            }		
   }	
   
   
   

   
 
 
   
// ********************************************   
//  APPUI sur la Touche "Télécharger Scénario" 
// ********************************************
if(isset($_POST['TelechargerScenario']))
   {
        
   
   
   
   }
   
   
   
   
   
   
   ?>
   
   