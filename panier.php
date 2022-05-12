<?php

    class panier
    {   private $id_panier=null;
        private $codeing=null;
        private $quantite=null;
        private $prix=null;
        private $montant_total=null;

        
        
        
        
        function __construct($id_panier, $codeing, $quantite,$prix){
            $this->id_panier=$id_panier;
            $this->codeing=$codeing;
            $this->quantite=$quantite;
            $this->prix=$prix;
           
            
            
        }
        //getters
        function getcodeing(){
            return $this->codeing;
        }
        function getquantite(){
            return $this->quantite;
        }
        function getid_panier(){
            return $this->id_panier;
        }
       
        
        function getprix(){
            return $this->prix;
        }
        function getmontant_total(){
            return $this->montant_total;
        }
        //setters
        function setcodeing(int $codeing){
            $this->codeing=$codeing;
        }
        function setquantite(int $quantite){
            $this->quantite=$quantite;
        }
        function setprix(int $prix){
            $this->prix=$prix;
        }
        function setid_panier(int $id_panier){
            $this->id_panier=$id_panier;
        }
        function setmontant_total(int $montant_total){
            $this->montant_total=$montant_total;
        }
     
        
        
    }


?>
