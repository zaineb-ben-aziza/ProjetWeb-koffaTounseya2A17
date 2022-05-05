<?php

    class Commentaire{
        private $ID=null;
        private $Contenu=null;
        private $Pseudonyme=null;
        private $Avis=null;
        
        
        
        function __construct($Contenu, $Pseudonyme, $Avis){
            $this->Contenu=$Contenu;
            $this->Pseudonyme=$Pseudonyme;
            $this->Avis=$Avis;
        }

        //getters
        function getID(){
            return $this->ID;
        }
        function getContenu(){
            return $this->Contenu;
        }
        function getPseudonyme(){
            return $this->Pseudonyme;
        }
        function getAvis(){
            return $this->Avis;
        }
        

        
        //setters
        function setID(int $ID){
            $this->ID=$ID;
        }
        function setContenu(string $Contenu){
            $this->Contenu=$Contenu;
        }
        function setPseudonyme(string $Pseudonyme){
            $this->Pseudonyme=$Pseudonyme;
        }
        function setAvis(int $Avis){
            $this->Avis=$Avis;
        }
    }


?>