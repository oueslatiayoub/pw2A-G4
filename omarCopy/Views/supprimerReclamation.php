<?php
	include '../Controller/reclamationC.php';
	$reclamationC=new reclamationC();
	$reclamationC->supprimerReclamation($_GET["id"]);
	header('Location:afficherReclamations.php');
?>