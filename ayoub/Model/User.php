<?php
	class User
    {
        private $cin=null;
		private $nom=null;
		private $prenom=null;
		private $email=null;
		private $classe=null;
		private $adresse=NULL;
        private $datenaissance=NULL;
        private $password=null;

     
        function __construct($cin, $nom, $prenom, $email, $classe, $adresse,
         $datenaissance, $password)
        {
			$this->cin=$cin;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->classe=$classe;
			$this->adresse=$adresse;
            $this->datenaissance=$datenaissance;
            $this->password=$password;
		}

        function getCin()
        {
			return $this->cin;
		}
		function getNom()
        {
			return $this->nom;
		}
		function getPrenom()
        {
			return $this->prenom;
		}
		function getEmail()
        {
			return $this->email;
		}
		function getClasse()
        {
			return $this->classe;
		}
		function getAdresse()
        {
			return $this->adresse;
		}
        function getPassword()
        {
			return $this->password;
		}
        function getDatenaissance()
        {
			return $this->datenaissance;
		}
        function setCin(int $cin)
        {
			$this->cin=$cin;
		}
		function setNom(string $nom)
        {
			$this->nom=$nom;
		}
		function setPrenom(string $prenom)
        {
			$this->prenom=$prenom;
		}
		function setEmail(string $email)
        {
			$this->email=$email;
		}
        function setAdresse(string $Adresse)
        {
			$this->Adresse=$Adresse;
		}
		function setPassword(string $password)
        {
			$this->password=$password;
		}
		function setDatenaissance(string $datenaissance)
        {
			$this->datenaissance=$datenaissance;
		}
    }
?>       