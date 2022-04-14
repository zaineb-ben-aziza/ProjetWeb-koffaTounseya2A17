<?php
include_once 'C:/xampp/htdocs/projet/promosC.php';
	$promos=new promosC();
if ($promos->supprimerpromos($_GET['deletevar']))
	header('Location:afficher_promos.php');

?>