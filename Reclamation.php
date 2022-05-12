<?php

    class Reclamation{
        private $ID=null;
        private $Contenu=null;
        private $ID_utilisateur=null;
        private $Type_paiement=null;
        
        
        
        function __construct($Contenu, $ID_utilisateur, $Type_paiement){
            $this->Contenu=$Contenu;
            $this->ID_utilisateur=$ID_utilisateur;
            $this->Type_paiement=$Type_paiement;
        }

        //getters
        function getID(){
            return $this->ID;
        }
        function getContenu(){
            return $this->Contenu;
        }
        function getID_utilisateur(){
            return $this->ID_utilisateur;
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
        function setID_utilisateur(string $ID_utilisateur){
            $this->ID_utilisateur=$ID_utilisateur;
        }
        function setPaiement(string $Type_paiement){
            $this->Type_paiement=$Type_paiement;
        }
    }


?>