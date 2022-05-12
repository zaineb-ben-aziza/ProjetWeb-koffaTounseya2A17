
<?php

    class achat
    {
        private $id_achat=null;
  
        private $id_panier=null;

        private $id_utilisateur=null;

        private $prixt=null;

        private $etatco=null;

        
        
        
        
        function __construct($id_achat, $id_panier,$id_utilisateur, $prixt, $etatco ){
            $this->id_achat=$id_achat;
            $this->id_panier=$id_panier;
            $this->id_utilisateur=$id_utilisateur;
            $this->prixt=$prixt;
            $this->etatco=$etatco;
            
            
        }
        //getters
        function getid_achat(){
            return $this->id_achat;
        }
        
        function getid_panier(){
            return $this->id_panier;
        }

        function getid_utilisateur(){
            return $this->id_utilisateur;
        }
        function getprixt(){
            return $this->prixt;
        }
        function getetatco(){
            return $this->etatco;
        }
       
       
        
        
        //setters
        function setid_achat(int $id_achat){
            $this->id_achat=$id_achat;
        }
        
        function seid_panier(int $id_panier){
            $this->id_panier=$id_panier;
        }
     
        function seid_utilisateur(int $id_utilisateur){
            $this->id_utilisateur=$id_utilisateur;
        }
        function seprixt(int $prixt){
            $this->prixt=$prixt;
        }
        function seetatco(string $etatco){
            $this->etatco=$etatco;
        }
      
        
    }


?>
