<?php
	
	include_once '../config.php';
	include_once "$_SERVER[DOCUMENT_ROOT]/projet/Model/Event.php";
	
	
	class EvenementC {
		function afficherEvent(){
			$sql="SELECT * FROM events";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerEvent($id_event){
			$sql="DELETE FROM events WHERE id_event=:id_event";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_event', $id_event);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		function ajouterEvenement($Evenement){
			
			$sql="INSERT INTO events (id_event,Nom,dateDebut,dateFin,description,adresse) 
			VALUES (:idEvent,:nom,:dateDebut, :dateFin,:descriptions,:adresse)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':idEvent' => $Evenement->getidEvent(),
					':nom' => $Evenement->getnom(),
					':dateDebut' => $Evenement->getdateDebut(),
					':dateFin' => $Evenement->getdateFin(),
					':descriptions' => $Evenement->getdescriptions(),
					':adresse' => $Evenement->getadresse()
				]);		
			} 
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererEvenement($id_event){
			$sql="SELECT * from events where id_event=$idEvent";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Evenement=$query->fetch();
				return $Evenement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierEvenement($Evenement){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE events SET 
						Nom= :Nom, 
						dateDebut= :date_debut, 
						dateFin= :date_fin,  
						description= :DateInscription,
						adresse=:adresse
					WHERE id_event= :id_event'
				);
				$query->execute([
					':Nom' => $Evenement->getnom(),
					':date_debut' => $Evenement->getdateDebut(),
					':date_fin' => $Evenement->getdateFin(),
					':DateInscription' => $Evenement->getdescriptions(),
					':id_event' => $Evenement->getidEvent(),
					':adresse' => $Evenement->getadresse()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>