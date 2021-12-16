<?php

include_once '../Model/communt.php';
include_once '../Controller/messageC.php';
    $error = "";

    // create message
    $message = null;

    // create an instance of the controller
    $messageC = new messageC();
    if (
       
		isset($_POST["name"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["subject"]) && 
        isset($_POST["contenue"])
    ) {
        if (
         
			!empty($_POST['name']) &&
            !empty($_POST["email"]) && 
			!empty($_POST["subject"]) && 
            !empty($_POST["contenue"])
        ) {

            $messageC = new messageC();
            $message = new message(
            
				$_POST['name'],
                $_POST['email'], 
				$_POST['subject'],
                $_POST['contenue'],
            );
            $messageC->ajoutermessage($message);
            header('Location:afficherMessages.php');
        }
        else
            $error = "Missing information";
    }

    
?>