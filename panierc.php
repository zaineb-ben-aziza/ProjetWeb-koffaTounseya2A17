<?php
	include_once 'C:/xampp/htdocs/projet2/ingredientC.php';
	include_once 'C:/xampp/htdocs/projet2/panier.php';
	
		
	class panierc{
		
		//afficher  panier
		function afficherpanier(){
			$sql="SELECT * FROM panier";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		//ajouter panier
		
		
		function ajouterpanier(){
			$sql="INSERT INTO panier (id_panier,codeing,quantite,prix) 
			VALUES (:id_panier,:codeing,:quantite,:prix)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				$query->execute([
					
					':codeing' => $_POST["codeing"],
					':quantite'=>$_POST["quantite"],
                    ':prix'=>$_POST["prix"],
					':id_panier'=>$_POST["id_panier"]
					
			
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		//recup
		function recupererpanier($id_panier){
			$sql="SELECT * from panier where id_panier=$id_panier";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$panier=$query->fetch();
				return $panier;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        //supprimer panier
      
	   function supprimerpanier($id_panier){
		$sql="DELETE FROM panier WHERE id_panier=:id_panier";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id_panier', $id_panier);
		try{
			$req->execute();
		}
		catch(Exception $e){
			die('Erreur: '.$e->getMessage());
		}
		return $req->execute();
	}
	
//modifier panier
function modifierpanier($panier){


try {
	$db = config::getConnexion();
	$query = $db->prepare(
		'UPDATE panier SET 
		
			codeing= :codeing, 
			quantite= :quantite, 
			prix= :prix
		
		
		WHERE id_panier= :id_panier'
	);
	$query->execute([
		':id_panier' => $panier->getid_panier(),
		':codeing' => $panier->getcodeing(),
		':quantite' => $panier->getquantite(),
		':prix' => $panier->getprix()
		


	
	]);
	echo $query->rowCount() . " records UPDATED successfully <br>";
} catch (PDOException $e) {
	$e->getMessage();
}
}
		//modif
		function click_panier($id_panier){
			$sql="SELECT * FROM panier where id_panier= $id_panier";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
//chercher
function chercherp($id_panier){
	
	$sql="SELECT * FROM panier where id_panier= $id_panier";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMeesage());
	}	
}

	//tri
	function triasc1(){
		$sql="SELECT * FROM panier ORDER BY id_panier ASC";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	}

	function tridesc1(){
		$sql="SELECT * FROM panier ORDER BY id_panier DESC";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}
	
	function calcul(){
		$sql="SELECT * FROM panier where id_panier=id_panier";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
	
	}
	function afficher1(){
		$sql="SELECT * FROM panier where id_panier=14";
	


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