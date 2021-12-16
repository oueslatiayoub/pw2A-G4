<?php
    include_once '../controller/UserController.php';
    $error = "";
    $Admin = null;

    // create an instance of the controller
    $UserController = new UserController();
    $UserController->deleteUser($_GET["CIN"]);
    header('Location:table_users.php');
?>
