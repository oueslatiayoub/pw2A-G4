<?php
	class message{
		private $idmessage=null;
		private $name=null;
		private $email=null;
		private $subject=null;
		private $contenue=null;
		
		
		
		function __construct($name, $email,$subject, $contenue){
			
			$this->name=$name;
			$this->email=$email;
            $this->subject=$subject;
			$this->contenue=$contenue;
			
		}

        
		function getIdmessage(){
			return $this->idmessage;
		}
		function getName(){
			return $this->name;
		}
		function getEmail(){
			return $this->email;
		}
		function getSubject(){
			return $this->subject;
        }
		function getContenue(){
			return $this->contenue;
		}

		function setIdmessage($idmessage){
			return $this->idmessage= $idmessage;
		}
		
		function setname($name){
			return $this->name= $name;
		}

		function setemail($email){
			return $this->email= $email;
		}
		
		function setsubject($subject){
			return $this->subject= $subject;
		}

		
		function setconetenue($contenue){
			return $this->contenue= $contenue;
		}


	}


?>