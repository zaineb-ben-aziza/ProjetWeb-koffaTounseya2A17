<?php

    class Recette{
        private $id=null;
        private $nom_rec=null;
        private $type_rec=null;
        private $ingredient_rec=null;
        private $description=null;
        private $id_type=null;
       
        function __construct($id, $nom_rec, $type_rec, $ingredient_rec,$description,$id_type){
            $this->id=$id;
            $this->nom_rec=$nom_rec;
            $this->type_rec=$type_rec;
            $this->ingredient_rec=$ingredient_rec;
            $this->description=$description;
            $this->id_type=$id_type;
 
            
        }
        //getters
        function getid(){
            return $this->id;
        }
        function getNom(){
            return $this->nom_rec;
        }
        function getType(){
            return $this->type_rec;
        }
        function getingredient(){
            return $this->ingredient_rec;
        }
        function getdescription(){
            return $this->description;
        }
        function getid_type(){
            return $this->id_type;
        }
        
        //setters
        function setid(int $id){
            $this->id=$id;
        }
        function setNom(string $nom_rec){
            $this->nom_rec=$nom_rec;
        }
        function setType(string $type_rec){
            $this->type_rec=$type_rec;
        }
        function setingredient(string $ingredient_rec){
            $this->ingredient_rec=$ingredient_rec;
        }
        function setdescription(string $description){
            $this->description=$description;
        }
        function setid_type(string $id_type){
            $this->id_type=$id_type;
        }
        
    }


?>
