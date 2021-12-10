<?php
    include_once '../model/Admin.php';
    include_once '../controller/Admin.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $AdminController = new AdminController();
    if (
        isset($_POST["cin"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["datenaissance"]) && 
        isset($_POST["classe"]) && 
        isset($_POST["password"])
    ) {
        if (
            !empty($_POST["cin"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
			!empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["datenaissance"]) && 
            !empty($_POST["classe"]) && 
            !empty($_POST["password"])
        ) {
            $Admin = new Admin(
                $_POST['cin'],
				$_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['classe'],
				$_POST['adresse'],
                $_POST['datenaissance'],
                $_POST['password']
            );
            $AdminController->ajouteradherent($adherent);
            header('Location:table_users.php');
        }
        else
            $error = "Missing information";
    }

    
?>