<?php
require 'C:/xampp/htdocs/projet/Controller/promosC.php';
	$promos=new promosC();
if ($promos->supprimerpromos($_GET['deletevar']))
	header('Location:afficher_promos.php');

?>