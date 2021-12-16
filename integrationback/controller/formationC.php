<?php
include "configg.php";

class commandeC
{
  

public function supprimerformation($id){
    $db=config::getConnexion();
    $sql="DELETE FROM 'formation' WHERE id= :id";
    
    $req=$db->prepare($sql);
    
    $req->bindValue(':id',$id);
    try{
        $req->execute();
        return true ;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
    

}}

    function getallformation()
    {
        $db = config::getConnexion();
        try {
            // Create sql statment
            $sql = " select * from formation";
            $resultp = $db->query($sql);
            return $resultp;
    
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
    }

    function searchresult()
    {
        $db = config::getConnexion();
        $nameF=trim($_POST['search']);
        try {
            // Create sql statment
            $sql = " SELECT * FROM `formation` WHERE `nameF`='$nameF'";
            $resultp = $db->query($sql);
            return $resultp;
    
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
    }

    function getsingleformation()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $stmt="SELECT * FROM `formation` WHERE `id` ='$id'";
            $db = config::getConnexion();
        try
        {
            $query=$db->prepare($stmt);
			$query->execute();
            return $query->fetch();
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
        }
    }

    function delete ()
    {
            $con= config::getConnexion();
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $sqll ="DELETE FROM `inscrif` WHERE `formationID` = '$id' ";
                $sql ="DELETE FROM `formation` WHERE `id` = '$id' ";
                try
                {   
                    $queryy=$con->prepare($sqll);
                    $queryy->execute();
                    $query=$con->prepare($sql);
                    $query->execute();
                    header('formationlist.php');
                }
                catch (Exception $e)
                {
                    die('Erreur: '.$e->getMessage());
                }
            }
    }

    function add_formation()
    {
            $con= config::getConnexion();
            if(isset($_GET['add'])){
            $nameF = trim($_POST['nameF']);
            $descriptionF = trim($_POST['descriptionF']);
            $placeF = trim($_POST['placeF']);
            $dateF= $_POST['dateF'];
            $capacityF= (int) $_POST['capacityF'];
            $linkF=trim($_POST['linkF']);
            //save to database
            $sql = "insert into formation (nameF,descriptionF,placeF,dateF,capacityF,linkF) values ('$nameF','$descriptionF','$placeF','$dateF','$capacityF','$linkF')";
            try{  
                $query=$con->prepare($sql);
                $query->execute();
                header("Location: formationlist.php");
            }catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
	        }
    }

    function update ()
    {
            $con= config::getConnexion();
            if(isset($_GET['update'])){
            $id=$_GET['update'];
            $nameF = trim($_POST['nameF']);
            $descriptionF = trim($_POST['descriptionF']);
            $placeF = trim($_POST['placeF']);
            $dateF= $_POST['dateF'];
            $capacityF= (int) $_POST['capacityF'];
      	 	$sql= "UPDATE `formation` SET `nameF`='$nameF',`descriptionF`='$descriptionF',`capacityF`='$capacityF',`dateF`='$dateF',`placeF`='$placeF' WHERE id='$id'";
               try{  
                $query=$con->prepare($sql);
                $query->execute();
                header("Location: formationlist.php");
            }catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
	        }
    }
    

?>