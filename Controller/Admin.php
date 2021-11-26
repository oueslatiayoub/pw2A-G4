<?php
	@session_start();
	include '../config.php';
	include_once '../model/Admin.php';
    
    class AdminController
    {        
    function recupererUser($Email)
    {
        $sql="SELECT * from admin ";
        $db = config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
            $query->execute();

            $admins=$query->fetch();
            return $admins;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function ajouterAdmin($Email,$Password)
    {
        $sql=("INSERT INTO admin (Email, Password)
        VALUES (:Email, :Password)");
        $db = config::getConnexion();
        try
        {
            $query = $db->prepare($sql);
            $query->execute([
                'Email' => $admin->getEmail(),
                'Password' => $admin->getPassword()
            ]);			
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }			
    }

    function loginAdmin($Email, $Password)
    {
        $db = config::getConnexion();
        try{
            $stmt=$db->prepare("SELECT * from admin where (Email='".$Email."' AND Password='".$Password."')");
            $stmt->execute();
            if ($stmt->rowCount() > 0) 
            {
                while($found_user = $stmt->fetch(PDO::FETCH_ASSOC)) 
                {
                    if (!array_key_exists('Email',$_SESSION)) 
                    {
                        $_SESSION["Email"] = $found_user["Email"];
                        $_SESSION["Password"] = $found_user["Password"];
                        }
                }
                header('Location:../table_users.php');

            }
            else {
                echo "<script type='text/javascript'>alert('Username/Password are wrong');</script>";
                header('Location:../Users/login.php');
            }

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}    
?>  
