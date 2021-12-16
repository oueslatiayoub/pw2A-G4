<?php
     require_once ("../../../controller/formationC.php");	
     require_once ("../../../controller/configg.php");
     require_once ("../../../model/formation.php");
    $error = "";
    $formation = null;

    // create an instance of the controller
    $commandeC = new commandeC();
    $commandeC->delete("$id");
    header('Location:formationlist.php');
    ?>