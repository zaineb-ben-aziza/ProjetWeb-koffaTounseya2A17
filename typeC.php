<?php

  
  include "$_SERVER[DOCUMENT_ROOT]/projet/config.php";
  include "$_SERVER[DOCUMENT_ROOT]/projet/type.php";
	
		
	class TypeC{
		
		//afficher  recette
		function affichertype(){
			$sql="SELECT * FROM typee ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		
		//ajouter type
		
		function ajoutertype($type){
			$sql="INSERT INTO typee (id_type,nom_type) 
			VALUES (:id_type,:nom_type)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':id_type' => $type->getIdtype(),
					':nom_type'=>$type->getNomtype(),
					
										
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		

	
//supprimer	recette
function supprimertype($id_type){
	$sql="DELETE FROM typee  WHERE id_type=:id_type";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':id_type', $id_type);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
	return $req->execute();
  }

  function modifiertype($type,$id_type)
		{

			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE typee SET 
                    nom_type= :nom_type,
                        id_type= :id_type
                        
                    WHERE id_type= :id_type'
                );
                $query->execute([
                    
                    ':nom_type'=> $type->getNomtype(),
					   ':id_type'=> $id_type
                ]);
                echo $query->rowCount() . " type UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}


		function click_type($id_type){
	   $sql="SELECT * FROM typee where id_type = $id_type";
	   $db = config::getConnexion();
	   try{
	   $liste = $db->query($sql);
	   return $liste;
	   }
	   catch(Exception $e){
	   die('Erreur:'. $e->getMessage());
	   }
	   }
	   
	   function chercherID($code){

		$sql="SELECT * FROM typee where id_type=$code";
		$db = config::getConnexion();
		try{
		$liste = $db->query($sql);
		return $liste;
		}
		catch(Exception $e){
		die('Erreur:'. $e->getMessage());
		}
		}
		
	}
	
?>