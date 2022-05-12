<?php

    class Type{
        private $id_type=null;
        private $nom_type=null;
        
       
        function __construct($id_type, $nom_type){
            $this->id_type=$id_type;
            $this->nom_type=$nom_type;
 
            
        }
        //getters
        function getIdtype(){
            return $this->id_type;
        }
        function getNomtype(){
            return $this->nom_type;
        }
        
        //setters
        function setIdtype(int $id_type){
            $this->id_type=$id_type;
        }
        function setNomtype(string $nom_type){
            $this->nom_type=$nom_type;
        }
    
        
    }


?>
