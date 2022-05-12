<?php
	include 'C:/xampp/htdocs/web/config.php';
	include_once 'C:/xampp/htdocs/web/livraison.php';
	
		
	class livraisonc{
		
		//afficher liv
		function afficherliv(){
			$sql="SELECT * FROM livraison";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		//ajouter 
		
		function ajouterliv(){
			$sql="INSERT INTO livraison(nom, prenom,email ,telephone, adresse,code_postal,type_livraison,text) 
			VALUES (:nom,:prenom,:email,:telephone,:adresse,:code_postal,:type_livraison,:text)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					':nom' => $_POST["nom"],
		            ':prenom'=>$_POST["prenom"],
					':email'=>$_POST["telephone"],
					':adresse'=>$_POST["adresse"],
					':code_postal'=>$_POST["code_postal"],
                    ':type_livraison'=>$_POST["type_livraison"],
					':text1'=>$_POST["text"]


					
			
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}}