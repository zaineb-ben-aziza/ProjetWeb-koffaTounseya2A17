<?php
	include 'C:/xampp/htdocs/Projet/config.php';
	include_once 'C:/xampp/htdocs/Projet/Model/commentaire.php';
	
		
	class CommentaireC{
		
		//afficher  utilisateur
		function afficherCommentaire(){
			if (!isset($_POST['trie'])){
				$sql="SELECT * FROM commentaire";
				$db = config::getConnexion();
				try{
					$liste = $db->query($sql);
					return $liste;
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}
			}
			else{
				if (isset($_POST['check1'])){
					$sql="SELECT * FROM commentaire where Avis > 2";
					$db = config::getConnexion();
					try{
						$liste = $db->query($sql);
						return $liste;
					}
					catch(Exception $e){
						die('Erreur:'. $e->getMessage());
					}	
				}
				else if (isset($_POST['check2'])){
					$sql="SELECT * FROM commentaire where Avis < 3";
					$db = config::getConnexion();
					try{
						$liste = $db->query($sql);
						return $liste;
					}
					catch(Exception $e){
						die('Erreur:'. $e->getMessage());
					}	
				}
				else{
					$sql="SELECT * FROM commentaire";
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
		}
		
		
		//ajouter ingredient
		
		function ajouterCommentaire($commentaire){
			$sql="INSERT INTO commentaire (Contenu,Pseudonyme,Avis,) 
			VALUES (:Contenu,:Pseudonyme,:Avis)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':Contenu'=> $commentaire->getContenu(),
					':Pseudonyme'=> $commentaire -> getPseudonyme(),
					':Avis'=> $commentaire -> getAvis()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}


		function supprimerCommentaire($ID){
			$sql="DELETE FROM commentaire WHERE ID_commentaire=:ID";
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


		
		function modifierCommentaire($commentaire, $ID){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commentaire SET 
						Contenu= :Contenu, 
						Pseudonyme= :Pseudonyme, 
						Avis= :Avis
					WHERE ID_commentaire= :ID_commentaire'
				);
				$query->execute([
					'Contenu' => $commentaire->getContenu(),
					'Pseudonyme' => $commentaire->getPseudonyme(),
					'Avis' => $commentaire->getAvis(),
					'ID_commentaire' => $ID
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		function click_commentaire($id){
				$sql="SELECT * FROM commentaire where ID_commentaire = $id";
				$db = config::getConnexion();
				try{
				$liste = $db->query($sql);
				return $liste;
				}
				catch(Exception $e){
				die('Erreur:'. $e->getMessage());
				}
			}

			function afficherPseudonyme($id)
			{
					$pdo = config::getConnexion();
					$sql="SELECT Pseudonyme FROM utilisateur where ID = :id";
					$query = $pdo -> prepare($sql);
					$query -> execute([
						'id' => $id
					]);
					return $query -> fetchColumn();	
			}

	}


?>