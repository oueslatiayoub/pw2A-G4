<?php
    @session_start();
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    $error = "";
    $User = null;

    // create an instance of the controller
    $UserController = new UserController();
    if (isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["datenaissance"]) && 
        isset($_POST["classe"]) && 
        isset($_POST["password"])
    ) {
        if (!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
			!empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["datenaissance"]) && 
            !empty($_POST["classe"]) && 
            !empty($_POST["password"])
        ) {
            $User = new User(
                $_SESSION['cin'],
				$_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['classe'],
				$_POST['adresse'],
                $_POST['datenaissance'],
                $_POST['password']
            );
            $UserController->UpdateUser($User);
            header('Location:logout.php');
        }
        else
            $error = "Missing information";
            echo $error;
    }

    
?>