<?php
	include_once 'C:/xampp/htdocs/projet2/utilisateurC.php';
	require_once 'C:/xampp/htdocs/projet2/ingredient.php';
	require("fpdf/fpdf.php");
		
	class ingredientC {

		function geting($id){
			$sql = "SELECT count(*) FROM `panier2` WHERE id_ing='$id'"; 
			$db = config::getConnexion();
			$result = $db->prepare($sql); 
	
			$result->execute();
			$row_count =$result->fetchColumn();
			return  $row_count;
		}
		
	
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
			
			$sql="INSERT INTO ingredient (codeing, noming, prixing, qteing ) 
			VALUES (:codeing,:noming,:prixing, :qteing )";
		
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

function ajouterpanier2($id){
	$sql="INSERT INTO panier2 (id_ing) 
	VALUES (:codeing)";
	$db = config::getConnexion();
	try{
		
		$query = $db->prepare($sql);
		$query->execute([
			':codeing' => $id		
		]);			
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}			
}

function chercherID($code){
	
			$sql="SELECT * FROM ingredient where prixing=$code";
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
            $sql="SELECT * FROM ingredient ORDER BY prixing ASC";
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
            $sql="SELECT * FROM ingredient ORDER BY prixing DESC";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch(Exception $e){
                die('Erreur:'. $e->getMeesage());
            }
        }

		function afficher(){
			$codeing=$_GET['deletevar'];
			$sql="SELECT * FROM ingredient where codeing=$codeing";
			$db = config::getConnexion();
			
				$liste = $db->query($sql);
				return $liste;
			
		}
		

	}
?>