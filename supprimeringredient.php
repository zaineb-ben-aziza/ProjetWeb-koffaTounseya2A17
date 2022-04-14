<?php
include_once 'C:/xampp/htdocs/projet/ingredientC.php';
	$ingredient=new ingredientC();
if ($ingredient->supprimeringredient($_GET['deletevar']))
	header('Location:afficheringredient.php');

?>