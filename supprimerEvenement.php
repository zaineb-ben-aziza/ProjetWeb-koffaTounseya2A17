<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/EventC.php";
	$Evenement=new EvenementC();
if ($Evenement->supprimerEvent($_GET['deletevar']))
	header('Location:afficherEvenement.php');

?>