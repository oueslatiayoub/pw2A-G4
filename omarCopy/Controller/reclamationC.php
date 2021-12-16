<?php
	include '../connect.php';
	include_once '../Model/reclamation.php';
	class reclamationC {
		function afficherReclamation(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerReclamation($idreclamation){
			$sql="DELETE FROM reclamation WHERE id=:idreclamation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idreclamation', $idreclamation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getReclamation());
			}
		}
		function ajouterReclamation($reclamation){
			$sql="INSERT INTO reclamation ( reclamation ) 
			VALUES (:contenue)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'contenue' => $reclamation->getreclamation()
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererReclamation($idreclamation){
			$sql="SELECT * from reclamation where id=$idreclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierReclamation($reclamation, $idreclamation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						 
                         reclamation= :reclamation 
						
					WHERE id= :idreclamation'
				);
				$query->execute([
					
					'reclamation' => $reclamation->getreclamation(),
					'idreclamation' => $idreclamation
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>