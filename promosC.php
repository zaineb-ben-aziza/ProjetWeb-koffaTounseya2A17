<?php
	include_once 'C:/xampp/htdocs/projet/config.php';
	include_once 'C:/xampp/htdocs/projet/promos.php';
	
		
	class promosC {
		
		//afficher  ingredient
		function afficherpromos(){
			$sql="SELECT * FROM promo";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		//ajouter ingredient
		function ajouterpromos(){
			$sql="INSERT INTO promo (codepr, nompr, datedeb, datefin ,codeing) 
			VALUES (:codepr,:nompr,:datedeb, :datefin , :codeing)";
			$db = config::getConnexion();
			
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':codepr' => $_POST["codepr"],
					':nompr' => $_POST["nompr"],
					':datedeb' => $_POST["datedeb"],
					':datefin' => $_POST["datefin"],
					':codeing' => $_POST["codeing"]
			
				]);				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		//supprimer ingredient
		function supprimerpromos($codepr){
			$sql="DELETE FROM promo WHERE codepr=:codepr";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':codepr', $codepr);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		
		
		function modifierpromos($promos){


try {
	$db = config::getConnexion();
	$query = $db->prepare(
	
		'UPDATE promo SET 
		
			nompr= :nompr, 
			datedeb= :datedeb, 
			datefin= :datefin
		
		WHERE codepr= :codepr'
	);
	
	
	$query->execute([
		':codepr' => $promos->getcodepr(),
		':nompr' => $promos-> getnompr(),
		':datedeb' => $promos->getdatedeb(),
		':datefin' => $promos->getdatefin()


	
	]);
	echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
	$e->getMessage();
}
}

//CLICK MODIFIER
function click_promos($codepr){
			$sql="SELECT * FROM promo where codepr= $codepr";
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