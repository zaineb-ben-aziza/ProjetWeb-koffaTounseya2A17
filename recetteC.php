<?php

  
  include "$_SERVER[DOCUMENT_ROOT]/projet/config.php";
  include "$_SERVER[DOCUMENT_ROOT]/projet/recette.php";
	
		
	class RecetteC{
		
		//afficher  recette
		function afficherrecette(){
			$sql="SELECT * FROM recettes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		
		//ajouter recette
		
		function ajouterrecette($recette){
			$sql="INSERT INTO recettes (nom_rec,type_rec,ingredient_rec,description,id_type) 
			VALUES (:nom_rec,:type_rec,:ingredient_rec,:description,:id_type)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':nom_rec' => $recette->getNom(),
					':type_rec'=>$recette->getType(),
					':ingredient_rec'=>$recette->getingredient(),
					':description'=>$recette->getdescription(),
					':id_type'=>$recette->getid_type(),
					
					
			
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		

	
//supprimer	recette
function supprimerrecette($idrecette){
	$sql="DELETE FROM recettes WHERE id=:idrecette";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':idrecette', $idrecette);
	try{
		$req->execute();
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
	return $req->execute();
  }
  function modifierrecette($recette,$id)
		{

			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE recettes SET 
                        nom_rec= :nom_rec, 
                        type_rec= :type_rec,  
                        ingredient_rec= :ingredient_rec,
                        description= :description,
						id_type= :id_type
                    WHERE id= :id'
                );
                $query->execute([
					':nom_rec'=>  $recette->getnom(),
                    ':type_rec'=>  $recette->getType(),
                    ':ingredient_rec'=> $recette->getingredient(),
                    ':description'=> $recette->getdescription(),
					':id_type'=> $recette->getid_type(),
					   ':id'=> $id
                ]);
                echo $query->rowCount() . " recette UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}


		function click_recette($id){
	   $sql="SELECT * FROM recettes where id = $id";
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

		$sql="SELECT * FROM recettes where id=$code";
		$db = config::getConnexion();
		try{
		$liste = $db->query($sql);
		return $liste;
		}
		catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
		}
		}
		
	}
	
?>