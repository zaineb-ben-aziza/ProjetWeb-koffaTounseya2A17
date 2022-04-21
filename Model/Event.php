<?php
	class Evenement{
		private $idEvent=null;
		private $nom=null;
		private $dateDebut=null;
		private $dateFin=null;
		private $descriptions=null;
		private $adresse;
		
		private $password=null;
		function __construct($idEvent, $nom, $dateDebut, $dateFin, $descriptions, $adresse){
			$this->idEvent=$idEvent;
			$this->nom=$nom;
			$this->dateDebut=$dateDebut;
			$this->dateFin=$dateFin;
			$this->descriptions=$descriptions;
			$this->adresse=$adresse;
		}
		function getidEvent(){
			return $this->idEvent;
		}
		function getnom(){
			return $this->nom;
		}
		function getdateDebut(){
			return $this->dateDebut;
		}
		function getdateFin(){
			return $this->dateFin;
		}
		function getdescriptions(){
			return $this->descriptions;
		}
		function getadresse(){
			return $this->adresse;
		}
        //setters
        function setidEvent(int $idEvent){
			$this->idEvent=$idEvent;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setdateDebut(string $dateDebut){
			$this->dateDebut=$dateDebut;
		}
		function setdateFin(string $dateFin){
			$this->dateFin=$dateFin;
		}
		function setdescriptions(string $descriptions){
			$this->descriptions=$descriptions;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		
	}


?>