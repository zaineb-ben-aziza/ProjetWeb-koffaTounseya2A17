<?php
	include_once 'C:/xampp/htdocs/projet2/panierc.php';
	$panier =new panierc();
	if($panier->supprimerpanier($_GET['sisi']))
	header('Location:afficher_panier.php');
?>