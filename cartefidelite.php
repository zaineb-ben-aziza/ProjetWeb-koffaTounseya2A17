<?php

	class carte_fidelite{
		private $id=null;
		private $point=null;
		
		
		
		function __construct($id, $point){
			$this->id=$id;
			$this->point=$point;
			
		}
		//getters
		function getid(){
			return $this->id;
		}
		function getpoint(){
			return $this->point;
		}
		
		
		//setters
		function setid(int $id){
			$this->id=$id;
		}
		function setpoint(int $point){
			$this->point=$point;
		}
		
		
	}


?>