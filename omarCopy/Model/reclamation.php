<?php
	class reclamation{
		private $idreclamation=null;
	
		private $reclamation=null;
		
		
		
		function __construct( $reclamation){
			
			
			$this->reclamation=$reclamation;
			
		}

        
		function getIdreclamation(){
			return $this->idreclamation;
		}
		function getreclamation(){
			return $this->reclamation;
		}

		function setIdreclamation($idreclamation)
		{
			return $this->idreclamation=$idreclamation;

		}

		function setreclamation($reclamation)
		{
			return $this->reclamation=$reclamation;

		}

		
	}


?>