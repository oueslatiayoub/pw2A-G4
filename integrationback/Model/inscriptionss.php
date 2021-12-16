<?PHP
class formation
{   private $id;
    private $name;
    private $lname;
    private $email;
    private $mobile;
    private $formationID;


    function __construct($fname,$lname,$email,$mobile,$eventid)
    {   $this->fname = $fname; 
        $this->lname = $lname;
		$this->email = $email;
        $this->mobile = $mobile;
        $this->eventid = $eventid;
    }
    // getter 
    function getinscription_fname()
    {
        return $this->fname;
    }
    function getinscription_lname()
    {
        return $this->lname;
    }
    function getinscription_email()
    {
        return $this->email;
    }
    function getinscription_mobile()
    {
        return $this->mobile;
    }
    function getinscription_eventid()
    {
        return $this->eventid;
    }
    // setter 
     function setinscription_fname($fname)
    {
        return $this->fname= $fname;
    }
    function setinscription_lname($lname)
    {
        return $this->lname= $lname;
    }
    function setinscription_email($email)
    {
        return $this->email= $email;
    }
    function setinscription_mobile($mobile)
    {
        return $this->mobile= $mobile;
    }
    function setinscription_eventid($eventid)
    {
        return $this->eventid= $eventid;
    }
}
  ?>
