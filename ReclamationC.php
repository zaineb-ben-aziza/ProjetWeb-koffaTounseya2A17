<?php
	include 'C:/xampp/htdocs/Projet/config.php';
	include_once 'C:/xampp/htdocs/Projet/Reclamation.php';
	
		
	class ReclamationC{
		
		//afficher  utilisateur
		function afficherReclamation(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		
		//ajouter ingredient
		
		function ajouterReclamation(){
			$sql="INSERT INTO reclamation (Contenu,Pseudonyme,Type_paiement) 
			VALUES (:Contenu,:Pseudonyme,:Type_paiement)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':Contenu'=>$_POST["Contenu"],
					':Pseudonyme'=>$_POST["Pseudonyme"],
					':Type_paiement'=>$_POST["Type_paiement"]
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}


		function supprimerReclamation($ID){
			$sql="DELETE FROM reclamation WHERE ID_reclamation=:ID";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID', $ID);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
			return $req->execute();
		}

	}
?>