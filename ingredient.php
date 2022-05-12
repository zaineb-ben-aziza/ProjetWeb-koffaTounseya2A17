<?php

	class ingredient{
		private $codeing=null;
		private $noming=null;
		private $prixing=null;
		private $qteing=null;
		private $composant=null;
	
	
		
		
		
		function __construct($codeing, $noming, $prixing, $qteing){
			$this->codeing=$codeing;
			$this->noming=$noming;
			$this->prixing=$prixing;
			$this->qteing=$qteing;
			
			
			
			
		}
		//getters
		function getcodeing(){
			return $this->codeing;
		}
		function getNoming(){
			return $this->noming;
		}
		function getPrixing(){
			return $this->prixing;
		}
		function getqteing(){
			return $this->qteing;
		}
		function getcomposant(){
			return $this->composant;
		}
		
		
		//setters
		function setcodeing(int $codeing){
			$this->codeing=$codeing;
		}
		function setnoming(string $noming){
			$this->noming=$noming;
		}
		function setprixing(int $prixing){
			$this->prixing=$prixing;
		}
		function setqteing(int $qteing){
			$this->qteing=$qteing;
		}
		function setcomposant(int $composant){
			$this->coposant=$composant;
		}
		
		
		
	}


?>