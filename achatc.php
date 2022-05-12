<?php
	include_once 'C:/xampp/htdocs/projet2/utilisateurC.php';
	include_once 'C:/xampp/htdocs/projet2/achat.php';
	
		
	class achatc{
		
		//afficher  achat
		function afficherachat(){
			$sql="SELECT * FROM achat";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		//ajouter achat
		
		function ajouterachat(){
			$sql="INSERT INTO achat (id_achat,id_panier,id_utilisateur,prixt,etatco) 
			VALUES (:id_achat,:id_panier,:id_utilisateur,:prixt,:etatco)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':id_achat' => $_POST["id_achat"],
		            ':id_panier'=>$_POST["id_panier"],
					':id_utilisateur'=>$_POST["id_utilisateur"],
					':prixt'=>$_POST["prixt"],
					':etatco'=>$_POST["etatco"]

					
			
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
        //supprimer achat
        function supprimerachat($id_achat){
			$sql="DELETE FROM achat WHERE id_achat=:id_achat";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_achat', $id_achat);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur: '.$e->getMessage());
			}
			return $req->execute();
        }
		
//modifier achat
function modifierachat($achat){
	

	try {
		$db = config::getConnexion();
		$query = $db->prepare(
			'UPDATE achat SET 
			
				 
				id_panier= :id_panier ,
				prixt=:prixt,
				etatco=:etatco
			
			WHERE id_achat= :id_achat'
		);
		$query->execute([
			':id_achat' => $achat->getid_achat(),
			':id_panier' => $achat->getid_panier(),	
			':prixt' => $achat->getprixt(),
			':etatco' => $achat->getetatco()
		
		]);
		echo $query->rowCount() . " records UPDATED successfully <br>";
	} catch (PDOException $e) {
		$e->getMessage();
	}
}
//modif
function click_achat($id_achat){
	$sql="SELECT * FROM achat where id_achat= $id_achat";
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
function chercherA($id_achat){

$sql="SELECT * FROM achat where id_achat= $id_achat";
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
	function triasc(){
		$sql="SELECT * FROM achat ORDER BY id_achat ASC";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	}

	function tridesc(){
		$sql="SELECT * FROM achat ORDER BY id_achat DESC";
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