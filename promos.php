<?php
	class promos{
		private $codepr=null;
		private $nompr=null;
		private $datedeb=null;
		private $datefin=null;
		private $codeing=null;
		
		
		
		function __construct($codepr, $nompr, $datedeb, $datefin,$codeing){
			$this->codepr=$codepr;
			$this->nompr=$nompr;
			$this->datedeb=$datedeb;
			$this->datefin=$datefin;
			$this->codeing=$codeing;
			
		}
		//getters
		function getcodepr(){
			return $this->codepr;
		}
		function getnompr(){
			return $this->nompr;
		}
		function getdatedeb(){
			return $this->datedeb;
		}
		function getdatefin(){
			return $this->datefin;
		}
		
		function getcodeing(){
			return $this->codeing;
		}
		
		
		
		
	}


?>