<?php
	include_once 'C:/xampp/htdocs/projet2/achatc.php';
	$achat =new achatc();
	if($achat->supprimerachat($_GET['sisi']))
	header('Location:afficher_achat.php');
?>