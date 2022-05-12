<?php
include_once 'C:/xampp/htdocs/projet/carte_fideliteC.php';
	$carte=new carte_fidiliteC();
if ($carte->supprimer_cartefidilite($_GET['deletevar']))
	header('Location:afficher_cartefidelite.php');

?>