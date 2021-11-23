<?php
	@session_start();
	include '../../config.php';
	include_once '../../Model/User.php';
	class UserController {
		function addUser($User){
			$db = config::getConnexion();
            
			try{
				      // prepare sql and bind parameters
				$stmt = $db->prepare("INSERT INTO users (CIN, Nom, Prenom, Adresse, Email, Classe, Password, DateNaissance)
					VALUES (:cin, :nom, :prenom, :adresse, :email, :classe, :password, :datenaissance)");
				$stmt->bindParam(':cin', $User->getCin());
				$stmt->bindParam(':nom', $User->getNom());
				$stmt->bindParam(':prenom', $User->getPrenom());
				$stmt->bindParam(':adresse', $User->getAdresse());
				$stmt->bindParam(':email', $User->getEmail());
				$stmt->bindParam(':classe', $User->getClasse());
				$stmt->bindParam(':password', $User->getPassword());
				$stmt->bindParam(':datenaissance', $User->getDatenaissance());
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function UpdateUser($User){
			$db = config::getConnexion();

			try{
				      // prepare sql and bind parameters
				$sql = "UPDATE `users` SET `Nom` = '".$User->getNom()."', `Prenom` = '".$User->getPrenom()."', `Email` = '".$User->getEmail()."', `Classe` = '".$User->getClasse()."', `Adresse` = '".$User->getAdresse()."',`DateNaissance` = '".$User->getDatenaissance()."', `Password` = '".$User->getPassword()."' WHERE `users`.`CIN` = '".$User->getCin()."'";
				$stmt = $db->prepare($sql);	
				
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function loginUser($Email, $Password){
			$db = config::getConnexion();
			try{
				$stmt=$db->prepare("SELECT * from users where (Email='".$Email."' AND Password='".$Password."')");
				$stmt->execute();
				if ($stmt->rowCount() > 0) {
					while($found_user = $stmt->fetch(PDO::FETCH_ASSOC)) {
						if (!array_key_exists('email',$_SESSION)) {
							$_SESSION["cin"] = $found_user["CIN"];
							$_SESSION["email"] = $found_user["Email"];
							$_SESSION["name"] = $found_user["Nom"];
							$_SESSION["prenom"] = $found_user["Prenom"];
							$_SESSION["adresse"] = $found_user["Adresse"];
							$_SESSION["classe"] = $found_user["Classe"];
							$_SESSION["datenaissance"] = $found_user["DateNaissance"];
							$_SESSION["password"] = $found_user["Password"];
							}
					}
					header('Location:../index.php');

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

		function deleteUser($CIN){
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

	}
?>