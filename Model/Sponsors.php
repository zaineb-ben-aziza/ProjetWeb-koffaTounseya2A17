<?php
	class Sponsors{
		private $id_Sponsors=null;
		private $nom=null;
		private $Marque=null;
		private $Numero=null;
		private $Adresse_mail=null;
		
		private $password=null;
		function __construct($id_Sponsors, $Nom_Sponsors, $Marque, $Numero, $Adresse_mail){
			$this->id_Sponsors=$id_Sponsors;
			$this->Nom_Sponsors=$Nom_Sponsors;
			$this->Marque=$Marque;
			$this->Numero=$Numero;
			$this->Adresse_mail=$Adresse_mail;
			
		}
		function getid_Sponsors(){
			return $this->id_Sponsors;
		}
		function getNom_Sponsors(){
			return $this->Nom_Sponsors;
		}
		function getMarque(){
			return $this->Marque;
		}
		function getNumero(){
			return $this->Numero;
		}
		function getAdresse_mail(){
			return $this->Adresse_mail;
		}
	
	
        //setters
        function setid_Sponsors(int $id_Sponsors){
			$this->id_Sponsors=$id_Sponsors;
		}
		function setNom_Sponsors(string $Nom_Sponsors){
			$this->Nom_Sponsors=$Nom_Sponsors;
		}
		function setMarque(string $Marque){
			$this->Marque=$Marque;
		}
		function setNumero(int $Numero){
			$this->Numero=$Numero;
		}
		function setAdresse_mail(string $Adresse_mail){
			$this->Adresse_mail=$Adresse_mail;
		}
	
		
	
		
	}


?>