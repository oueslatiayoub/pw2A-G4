<?php	// create reclamation
			include_once '../Controller/reclamationC.php';
			include_once '../Model/reclamation.php';
  $reclamation = null;

    // create an instance of the controller
   
    if (
        isset($_POST["reclamation"])
    ) {
        if (
            !empty($_POST["reclamation"])
        ) { 
			

			$reclamationC = new reclamationC();
            $reclamation = new reclamation(
                $_POST['reclamation']
            );
            $reclamationC->ajouterreclamation($reclamation);
           header('Location:afficherReclamations.php');
        }
        else
            $error = "Missing information";
    }
?>