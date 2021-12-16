<?PHP
class formation
{   private $id;
    private $nameF;
    private $dateF;
    private $placeF;
    private $descriptionF;
    private $capacityF;
    private $linkF;


    function __construct($nameF,$dateF,$placeF,$descriptionF,$capacityF,$linkF)
    {   $this->nameF = $nameF; 
        $this->dateF = $dateF;
		$this->placeF = $placeF;
        $this->descriptionF = $descriptionF;
        $this->capacityF = $capacityF;
        $this->linkF = $linkF;
    }
    // getter 
    function getformation_id()
    {
        return $this->id;
    }
    function getformation_namef()
    {
        return $this->nameF;
    }
    function getformation_datef()
    {
        return $this->dateF;
    }
    function getformation_placef()
    {
        return $this->placeF;
    }
    function getformation_descriptionf()
    {
        return $this->descriptionF;
    }
    function getformation_capacityF()
    {
        return $this->capacityF;
    }
    function getformation_linkf()
    {
        return $this->linkF;
    }
    // setter 
     function setformation_namef($nameF)
    {
        return $this->nameF= $nameF;
    }
    function setformation_datef($dateF)
    {
        return $this->dateF= $dateF;
    }
    function setformation_placef($placeF)
    {
        return $this->placeF= $placeF;
    }
    function setformation_descriptionf($descriptionF)
    {
        return $this->descriptionF= $descriptionF;
    }
    function setformation_capacityF($capacityF)
    {
        return $this->capacityF= $capacityF;
    }
    function setformation_linkf($linkF)
    {
        return $this->linkF
        
        = $linkF;
    }
  
}
  ?>
