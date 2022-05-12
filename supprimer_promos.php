<?php
require 'C:/xampp/htdocs/projet2/promosC.php';
	$promos=new promosC();
if ($promos->supprimerpromos($_GET['deletevar']))
	header('Location:afficher_promos.php');

?>