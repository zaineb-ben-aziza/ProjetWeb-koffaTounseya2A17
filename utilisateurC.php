<?php
	include_once 'C:/xampp/htdocs/projet/config.php';
	include_once 'C:/xampp/htdocs/projet/utilisateur.php';
	
		
	class UtilisateurC{
		
		//afficher  utilisateur
		function afficheradmin(){
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		function affichertrie(){
			$sql="SELECT * FROM utilisateur order by nom";
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
		
		function ajouterutilisateur($utilisateur){
			$sql="INSERT INTO utilisateur (nom,prenom,adresse,type,date_naissance,pseudo,mot_passe,email) 
			VALUES (:nom,:prenom,:adresse,:type,:date_naissance,:pseudo,:mot_passe,:email)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':nom'=>  $utilisateur->getnom(),
                    ':prenom'=>  $utilisateur->getprenom(),
                    ':pseudo'=> $utilisateur->getpseudo(),
                    ':mot_passe'=> $utilisateur->getmot_passe(),
					':type'=>$utilisateur->gettype(),
					':adresse'=>$utilisateur->getadresse(),
					':email'=>$utilisateur->getemail(),
					':date_naissance'=>$utilisateur->getdate_naissance()
                   
                ]);		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function supprimerutilisateur($idutilisateur){
			$sql="DELETE FROM utilisateur WHERE id=:idutilisateur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idutilisateur', $idutilisateur);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		function modifierutilisateur($utilisateur)
		{
			
		
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE utilisateur SET 
                        nom= :nom, 
                        prenom= :prenom,  
                        pseudo= :pseudo,
                        mot_passe=:mot_passe,
						type=:type,
						adresse=:adresse,
						email=:email
                    WHERE id= :id'
                );
                $query->execute([
					':nom'=>  $utilisateur->getnom(),
                    ':prenom'=>  $utilisateur->getprenom(),
                    ':pseudo'=> $utilisateur->getpseudo(),
                    ':mot_passe'=> $utilisateur->getmot_passe(),
					':type'=>$utilisateur->gettype(),
					':adresse'=>$utilisateur->getadresse(),
					':email'=>$utilisateur->getemail(),
					':id'=>$utilisateur->getid()

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}

	
	function afficherutilisateur($id){
		
		$sql="SELECT * FROM utilisateur where id=$id ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMeesage());
		}
	}
	function verifutilisateur($email,$password)
	{
		$sql = "SELECT count(id) FROM utilisateur WHERE email='$email' && mot_passe='$password';"; 
		$db = config::getConnexion();
		$result = $db->prepare($sql); 

		$result->execute();
		$row_count =$result->fetchColumn();
		return  $row_count;

	}
	function getclient($email,$password){
		$sql = "SELECT * FROM utilisateur WHERE email='$email' && mot_passe='$password';"; 
		$db = config::getConnexion();
		$liste = $db->query($sql);
			return $liste;
	}
	function getclient2($id){
		$sql = "SELECT * FROM utilisateur WHERE id='$id';"; 
		$db = config::getConnexion();
		$liste = $db->query($sql);
			return $liste;
	}

		function modifierpasseword($email,$password)
		{
			
		
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE utilisateur SET  
                        mot_passe=:mot_passe
                    WHERE email= :email'
                );
                $query->execute([
                    ':mot_passe'=> $password,
					':email'=>$email

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}

		function getenfant(){
			$sql = "SELECT count(id) FROM `utilisateur` WHERE ((SELECT year( NOW() ))-year(date_naissance))<18;"; 
			$db = config::getConnexion();
		$result = $db->prepare($sql); 

		$result->execute();
		$row_count =$result->fetchColumn();
		return  $row_count;
		}
		function getadulte(){
			$sql = "SELECT count(id) FROM `utilisateur` WHERE ((SELECT year( NOW() ))-year(date_naissance)) between 18 and 74;"; 
			$db = config::getConnexion();
			$result = $db->prepare($sql); 
	
			$result->execute();
			$row_count =$result->fetchColumn();
			return  $row_count;
		}
		function getvieux(){
			$sql = "SELECT count(id) FROM `utilisateur` WHERE ((SELECT year( NOW() ))-year(date_naissance))>=75;"; 
			$db = config::getConnexion();
		$result = $db->prepare($sql); 

		$result->execute();
		$row_count =$result->fetchColumn();
		return  $row_count;
		}
		function getannees($annes){
			$sql = "SELECT count(id) FROM `utilisateur` WHERE year(date_enregistrement)='$annes';"; 
			$db = config::getConnexion();
		$result = $db->prepare($sql); 

		$result->execute();
		$row_count =$result->fetchColumn();
		return  $row_count;
		}				

}
?>