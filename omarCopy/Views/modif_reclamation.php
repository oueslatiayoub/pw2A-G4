<?php

 include_once '../Controller/reclamationC.php';
			include_once '../Model/reclamation.php';

    // create an instance of the controller
    if (
       
		isset($_POST["reclamation"])
    ) {
        if (
         
			!empty($_POST['reclamation']) 
        ) {
           
			$reclamationC = new reclamationC();
            $reclamation = new reclamation(
                $_POST['reclamation']
            );
           // header('Location:afficherListeReclamation.php');
            $reclamationC->modifierReclamation($reclamation,$_POST['id']);
 
            header('Location:afficherReclamations.php');
        }
        else
            $error = "Missing information";
    }

    
?>