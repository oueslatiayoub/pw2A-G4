<?php


	class Admin
    {
		private $email=null;
        private $password=null;
    
        function __construct( $email, $password)
       {
           $this->email=$email;
           $this->password=$password;
       }   

       function getEmail()
        {
			return $this->email;
		}

        function getPassword()
        {
			return $this->password;
		}

        function setEmail(string $email)
        {
			$this->email=$email;
        }
        
        function setPassword(string $password)
        {
			$this->password=$password;
		}
    }
?>            