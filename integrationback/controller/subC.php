<?php
class subC
{
  



public function supprimersub($id){
    $db=config::getConnexion();
    $sql="DELETE FROM 'inscriptons' WHERE id= :id";
    
    $req=$db->prepare($sql);
    
    $req->bindValue(':id',$id);
    try{
        $req->execute();
        return true ;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
    

}
}
{
function inscri ()
{
    $con= config::getConnexion();
    if(isset($_GET['sub']))
    {
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    //something was posted
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $mobile = $_POST['mobile'];
    $eventid= $_GET['sub'];
    if(!empty($fname) && !empty($email) && !empty($mobile))
    {
        //save to database
        $sql = "insert into inscriptions (fname,lname,email,mobile,eventid) values ('$fname','$lname','$email','$mobile','$eventid')";
        try{  
            $query=$con->prepare($sql);
            $query->execute();
            header("Location:index.html");
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        die;
    }
    }
    }
}
function getallsub()
{
    $con= config::getConnexion();
    try {
        // Create sql statment
        $sql = " select * from inscriptions";
        $resultp = $con->query($sql);
        return $resultp;

    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
}

function delete_sub()
{
    $con= config::getConnexion();
    if(isset($_GET['deletesub'])){
        $id = $_GET['deletesub'];
        $sql ="DELETE FROM `inscriptions` WHERE `id` = '$id' ";
        try{  
            $query=$con->prepare($sql);
            $query->execute();
            header("Location:subs.php");
        }catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

function nbr_total($f)
{
    $con= config::getConnexion();
    try {
        // Create sql statment
        $sql = "SELECT * FROM `inscriptions` WHERE `eventid`='$f'";
        $resultp = $con->query($sql);
        $count = $resultp->rowCount();
        return $count;
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
}
}
?>
