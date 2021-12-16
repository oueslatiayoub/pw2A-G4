<?php
	include '../connect.php';
	include_once '../Model/communt.php';
	class messageC {
		function affichermessage(){
			$sql="SELECT * FROM message";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerMessage($idmessage){
			$sql="DELETE FROM message WHERE id=:idmessage";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idmessage', $idmessage);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutermessage($message){
			$sql="INSERT INTO message ( name, email,subject,contenue ) 
			VALUES (:name,:email, :subject, :contenue)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'name' => $message->getName(),
					'email' => $message->getEmail(),
					'subject' => $message->getSubject(),
					'contenue' => $message->getContenue()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperermessage($idmessage){
			$sql="SELECT * from message where id=$idmessage";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$message=$query->fetch();
				return $message;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiermessage($message, $idmessage){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE message SET 
						name= :name, 
						email= :email, 
						subject= :subject, 
						contenue= :contenue 
						
					WHERE id= :idmessage'
				);
				$query->execute([
					'name' => $message->getName(),
					'email' => $message->getEmail(),
					'subject' => $message->getSubject(),
					'contenue' => $message->getContenue(),
					'idmessage' => $idmessage
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>