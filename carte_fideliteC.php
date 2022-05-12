<?php
	include 'C:/xampp/htdocs/projet/config.php';
	include_once 'C:/xampp/htdocs/projet/cartefidelite.php';
	
		
	class carte_fidiliteC{
		
		//afficher  utilisateur
		function afficher_cartefidilite(){
			$sql="SELECT * FROM carte_fidelite";
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
		
		function ajouter_cartefidilite($carte_fidelite){
			
			$sql="INSERT INTO carte_fidelite (id,point) 
			VALUES (:id,:point)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					':id'=>  $carte_fidelite->getid(),
                    ':point'=>  $carte_fidelite->getpoint()
                    
                   
                ]);		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function supprimer_cartefidilite($idcarte_fidilite){
			$sql="DELETE FROM carte_fidelite WHERE id=:idcarte_fidilite";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcarte_fidilite', $idcarte_fidilite);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
			return $req->execute();
		}
		
		function modifier_cartefidilite($carte_fidelite)
		{
			
		
			try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE carte_fidelite SET 
                        point= :point 
                        
                    WHERE id= :id'
                );
                $query->execute([
					':point'=>  $carte_fidelite->getpoint(),
                    
					':id'=>$carte_fidelite->getid()

                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
		}

	
	function afficher_id($id){
		$sql="SELECT * FROM carte_fidelite where id=$id";
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