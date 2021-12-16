<?php
	include '../Controller/messageC.php';
	$messageC=new messageC();
	$messageC->supprimermessage($_GET["idmessage"]);
	header('Location:afficherMessages.php');
?>