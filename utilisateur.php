<?php

	class Utilisateur{
		private $id=null;
		private $nom=null;
		private $prenom=null;
		private $date_naissance=null;
		private $pseudo=null;
		private $mot_passe=null;
		private $adresse=null;
		private $email=null;
		private $type=null;
		
		
		
		function __construct($id, $nom, $prenom, $date_naissance,$pseudo,$mot_passe,$adresse,$email,$type){
			$this->id=$id;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->date_naissance=$date_naissance;
			$this->pseudo=$pseudo;
			$this->mot_passe=$mot_passe;
			$this->email=$email;
			$this->type=$type;
			$this->adresse=$adresse;
			
		}
		//getters
		function getid(){
			return $this->id;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getpseudo(){
			return $this->pseudo;
		}
		function getmot_passe(){
			return $this->mot_passe;
		}
		function gettype(){
			return $this->type;
		}
		function getadresse(){
			return $this->adresse;
		}
		function getemail(){
			return $this->email;
		}
		function getdate_naissance(){
			return $this->date_naissance;
		}
		
		//setters
		function setid(int $id){
			$this->id=$id;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setpseudo(string $pseudo){
			$this->pseudo=$pseudo;
		}
		function setmot_passe(string $mot_passe){
			$this->mot_passe=$mot_passe;
		}
		function settype(string $type){
			$this->type=$type;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setdate_naissance(string $date_naissance){
			$this->date_naissance=$date_naissance;
		}
		
		
	}


?>