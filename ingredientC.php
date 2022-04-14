<?php
	include 'C:/xampp/htdocs/projet/config.php';
	include_once 'C:/xampp/htdocs/projet/ingredient.php';
	
		
	class ingredientC {
		
		//afficher  ingredient
		function afficheringredient(){
			$sql="SELECT * FROM ingredient";
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
		function ajouteringredient(){
			$sql="INSERT INTO ingredient (codeing, noming, prixing, qteing) 
			VALUES (:codeing,:noming,:prixing, :qteing)";
			$db = config::getConnexion();
			
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':codeing' => $_POST["codeing"],
					':noming' => $_POST["noming"],
					':prixing' => $_POST["prixing"],
					':qteing' => $_POST["qteing"]
			
				]);				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		//supprimer ingredient
		function supprimeringredient($codeing){
			$sql="DELETE FROM ingredient WHERE codeing=:codeing";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':codeing', $codeing);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		
		
		function modifieringredient($ingredient){


try {
	$db = config::getConnexion();
	$query = $db->prepare(
	
		'UPDATE ingredient SET 
		
			noming= :noming, 
			prixing= :prixing, 
			qteing= :qteing
		
		WHERE codeing= :codeing'
	);
	var_dump($ingredient->getcodeing());
	var_dump($ingredient-> getNoming());
	var_dump($ingredient->getPrixing());
	var_dump($ingredient->getqteing());
	$query->execute([
		':codeing' => $ingredient->getcodeing(),
		':noming' => $ingredient-> getNoming(),
		':prixing' => $ingredient->getPrixing(),
		':qteing' => $ingredient->getqteing()


	
	]);
	echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
	$e->getMessage();
}
}
	}
?>