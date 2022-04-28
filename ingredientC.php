<?php
	include_once 'C:/xampp/htdocs/projet/config.php';
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
		
			//$image=$_FILES["image"]["name"];
					//$upload="image/".$image;
			//move_uploaded_file($_FILES["image"]["tmp_name"],$upload);
			
			$sql="INSERT INTO ingredient (codeing, noming, prixing, qteing ,composant) 
			VALUES (:codeing,:noming,:prixing, :qteing ,:composant)";
		
			$db = config::getConnexion();
			
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':codeing' => $_POST["codeing"],
					':noming' => $_POST["noming"],
					':prixing' => $_POST["prixing"],
					':qteing' => $_POST["qteing"],
					':composant' => $_POST["composant"]
					
				
				
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
			qteing= :qteing,
			composant= :composant
			
		WHERE codeing= :codeing'
	);

	$query->execute([
		':codeing' => $ingredient->getcodeing(),
		':noming' => $ingredient-> getNoming(),
		':prixing' => $ingredient->getPrixing(),
		':qteing' => $ingredient->getqteing(),
		':composant' => $ingredient->getcomposant(),

	
	]);
	echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
	$e->getMessage();
}
}


function chercherID($code){
	
			$sql="SELECT * FROM ingredient where codeing=$code";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}	
		}
		function chercherNom($code){
	
			$sql="SELECT * FROM ingredient where noming=$code";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}	
		}
		
		
		function click_ingredient($codeing){
			$sql="SELECT * FROM ingredient where codeing= $codeing";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		function triNomASC(){
            $sql="SELECT * FROM ingredient ORDER BY noming ASC";
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
            $sql="SELECT * FROM ingredient ORDER BY noming DESC";
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