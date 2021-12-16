<?PHP
class event
{   private $id;
    private $name;
    private $date;
    private $place;
    private $description;
    private $capacity;
    private $link;


    function __construct($name,$date,$place,$description,$capacity,$link)
    {   $this->name = $name; 
        $this->date = $date;
		$this->place = $place;
        $this->description = $description;
        $this->capacity = $capacity;
        $this->link = $link;
    }
    // getter 
    function getevent_name()
    {
        return $this->name;
    }
    function getevent_date()
    {
        return $this->date;
    }
    function getevent_place()
    {
        return $this->place;
    }
    function getevent_description()
    {
        return $this->description;
    }
    function getevent_capacity()
    {
        return $this->capacity;
    }
    function getevent_link()
    {
        return $this->link;
    }
    // setter 
     function setevent_name($name)
    {
        return $this->name= $name;
    }
    function setevent_date($date)
    {
        return $this->date= $date;
    }
    function setevent_place($place)
    {
        return $this->place= $place;
    }
    function setevent_description($description)
    {
        return $this->description= $description;
    }
    function setevent_capacity($capacity)
    {
        return $this->capacity= $capacity;
    }
    function setevent_link($link)
    {
        return $this->link= $link;
    }
  
}
  ?>
