
<?php

class livraison
{
    private $nom=null;

    private $prenom=null;

    private $email=null;

    private $telephone=null;

    private $adresse=null;
    private $code_postal=null;

    private $type_livraison=null;

    private $text=null;

    
    
    
    
    function __construct($nom, $prenom,$email, $telephone, $adresse,$code_postal,$type_livraison,$text ){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;

        $this->telephone=$telephone;
        $this->adresse=$adresse;
        $this->code_postal=$code_postal;
        $this->type_livraison=$type_livraison;
        $this->text=$text;
        
        
    }
    //getters
    function getnom(){
        return $this->nom;
    }
    
    function getprenom(){
        return $this->prenom;
    }

    function getemail(){
        return $this->email;
    }
    function telephone(){
        return $this->prixt;
    }
    function adresse(){
        return $this->etatco;
    }
   
   
    
    
    //setters
    function setnom(int $nom){
        $this->nom=$nom;
    }
    
}

?>
