<?php
	
	include_once '../config.php';
	include_once "$_SERVER[DOCUMENT_ROOT]/projet/Model/Sponsors.php";

	
	class SponsorsC {
		function afficherSponsors(){
			$sql="SELECT * FROM sponsors";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function triNomASC(){
			$sql="SELECT * FROM sponsors ORDER BY Nom_Sponsors ASC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function triNomDESC(){
			$sql="SELECT * FROM sponsors ORDER BY Nom_Sponsors DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function supprimerSponsors($id_Sponsors){
			$sql="DELETE FROM sponsors WHERE id_Sponsors=:id_Sponsors";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_Sponsors', $id_Sponsors);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		function ajouterSponsors($Sponsors){
			
			$sql="INSERT INTO sponsors (id_Sponsors,Nom_Sponsors,Marque,Numero,Adresse_mail) 
			VALUES (:id_Sponsors,:Nom_Sponsors,:Marque, :Numero,:Adresse_mail)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':id_Sponsors' => $Sponsors->getid_Sponsors(),
					':Nom_Sponsors' => $Sponsors->getNom_Sponsors(),
					':Marque' => $Sponsors->getMarque(),
					':Numero' => $Sponsors->getNumero(),
					':Adresse_mail' => $Sponsors->getAdresse_mail()
					
			
				]);		
			} 
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererSponsors($id_Sponsors){
			$sql="SELECT * from sponsors where id_Sponsors=$id_Sponsors";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Sponsors=$query->fetch();
				return $Sponsors;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierSponsors($Sponsors){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE sponsors SET 
						Nom_Sponsors= :Nom_Sponsors, 
						Marque= :Marque, 
						Numero= :Numero,  
						Adresse_mail= :Adresse_mail
						
					WHERE id_Sponsors= :id_Sponsors'
				);
				$query->execute([
					':Nom_Sponsors' => $Sponsors->getNom_Sponsors(),
					':Marque' => $Sponsors->getMarque(),
					':Numero' => $Sponsors->getNumero(),
					':Adresse_mail' => $Sponsors->getAdresse_mail(),
					':id_Sponsors' => $Sponsors->getid_Sponsors(),

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function chercherSponsors($id_Sponsors){

			$sql="SELECT * FROM sponsors where id_Sponsors=$id_Sponsors";
			$db = config::getConnexion();
			try{
			$liste = $db->query($sql);
			return $liste;
			}
			catch(Exception $e){
			die('Erreur:'. $e->getMessage());
			}
			}
			
		function click_Sponsors($id_Sponsors){
			$sql="SELECT * FROM sponsors where id_sponsors= $id_Sponsors";
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