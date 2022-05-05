<?php
	include 'C:/xampp/htdocs/Projet/config.php';
	include_once 'C:/xampp/htdocs/Projet/Model/Reclamation.php';
	
		
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
		
		function ajouterReclamation($reclamation){
			$sql="INSERT INTO reclamation (Contenu,ID_utilisateur,Type_paiement,Etat) 
			VALUES (:Contenu,:ID_utilisateur,:Type_paiement,:Etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':Contenu'=> $reclamation->getContenu(),
					':ID_utilisateur'=> $reclamation -> getID_utilisateur(),
					':Type_paiement'=> $reclamation -> getPaiement(),
					':Etat'=> "Non Traité"
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


		
		function modifierReclamation($ID){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
						  Etat = :Etat
					WHERE ID_reclamation= :ID_reclamation'
				);
				$query->execute([
					'Etat' => "Traité",
					'ID_reclamation' => $ID
				]);
			} catch (PDOException $e) {
				$e->getMessage();
			}
			return $query->execute();
		}

		function click_reclamation($id){
			$sql="SELECT * FROM reclamation where ID_reclamation = $id";
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