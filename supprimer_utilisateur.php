<?php
include_once 'C:/xampp/htdocs/projet2/utilisateurC.php';
	$utilisateur=new utilisateurC();
if ($utilisateur->supprimerutilisateur($_GET['deletevar']))
	header('Location:afficher_utilisateur.php');

?>