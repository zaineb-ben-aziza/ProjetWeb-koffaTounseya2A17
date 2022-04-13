<?php

    class Reclamation{
        private $ID=null;
        private $Contenu=null;
        private $Pseudonymenyme=null;
        private $Type_paiement=null;
        
        
        
        function __construct($Contenu, $Pseudonyme, $Type_paiement){
            $this->Contenu=$Contenu;
            $this->Pseudonyme=$Pseudonyme;
            $this->Type_paiement=$Type_paiement;
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
        function getPaiement(){
            return $this->Type_paiement;
        }
        

        
        //setters
        function setID(int $ID){
            $this->ID=$ID;
        }
        function setNom(string $Contenu){
            $this->Contenu=$Contenu;
        }
        function setPseudonyme(string $Pseudonyme){
            $this->Pseudonyme=$Pseudonyme;
        }
        function setPaiement(string $Type_paiement){
            $this->Type_paiement=$Type_paiement;
        }
    }


?>