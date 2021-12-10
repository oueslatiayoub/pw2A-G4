<?php
include "../config.php";

class commandeC
{
  

public function supprimerevent($id){
    $db=config::getConnexion();
    $sql="DELETE FROM 'event' WHERE id= :id";
    
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

    function getallevent()
    {
        $db = config::getConnexion();
        try {
            // Create sql statment
            $sql = " select * from event";
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
        $name=trim($_POST['search']);
        try {
            // Create sql statment
            $sql = " SELECT * FROM `event` WHERE `name`='$name'";
            $resultp = $db->query($sql);
            return $resultp;
    
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
            exit();
        }
    }

    function getsingleevent()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $stmt="SELECT * FROM `event` WHERE `id` ='$id'";
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
                $sqll ="DELETE FROM `inscriptions` WHERE `eventid` = '$id' ";
                $sql ="DELETE FROM `event` WHERE `id` = '$id' ";
                try
                {   
                    $queryy=$con->prepare($sqll);
                    $queryy->execute();
                    $query=$con->prepare($sql);
                    $query->execute();
                    header('eventlist.php');
                }
                catch (Exception $e)
                {
                    die('Erreur: '.$e->getMessage());
                }
            }
    }

    function add_event()
    {
            $con= config::getConnexion();
            if(isset($_GET['add'])){
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $place = trim($_POST['place']);
            $date= $_POST['date'];
            $capacity= (int) $_POST['capacity'];
            $link=trim($_POST['link']);
            //save to database
            $sql = "insert into event (name,description,place,date,capacity,link) values ('$name','$description','$place','$date','$capacity','$link')";
            try{  
                $query=$con->prepare($sql);
                $query->execute();
                header("Location: eventlist.php");
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
            $name = trim($_POST['name']);
            $description = trim($_POST['description']);
            $place = trim($_POST['place']);
            $date= $_POST['date'];
            $capacity= (int) $_POST['capacity'];
      	 	$sql= "UPDATE `event` SET `name`='$name',`description`='$description',`capacity`='$capacity',`date`='$date',`place`='$place' WHERE id='$id'";
               try{  
                $query=$con->prepare($sql);
                $query->execute();
                header("Location: eventlist.php");
            }catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
	        }
    }
    

?>