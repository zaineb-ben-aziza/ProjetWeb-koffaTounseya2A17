<?php
include "$_SERVER[DOCUMENT_ROOT]/projet/recetteC.php";
	$recette=new recetteC();
if ($recette->supprimerrecette($_GET['deletevar']))
	header('Location:afficherRecette.php');

?>