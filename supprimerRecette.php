<?php
include_once 'C:/xampp/htdocs/projet2/recetteC.php';
	$recette=new recetteC();
if ($recette->supprimerrecette($_GET['deletevar']))
	header('Location:afficherRecette.php');

?>