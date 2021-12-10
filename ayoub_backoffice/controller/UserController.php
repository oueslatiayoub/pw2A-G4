<?php
	@session_start();
	include '../config.php';
	include_once '../model/User.php';

    class UserController
{
    function afficherUser()
    {
        $sql="SELECT * FROM users";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
		function deleteUser($CIN)
        {
			$sql="DELETE FROM users WHERE CIN=:CIN";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':CIN', $CIN);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

        function recupererUser($CIN)
        {
            $sql="SELECT * from users ";
            $db = config::getConnexion();
            try
            {
                $query=$db->prepare($sql);
                $query->execute();
    
                $users=$query->fetchALL();
                return $users;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }
        }

        
	}
?>