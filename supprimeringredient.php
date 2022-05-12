<?php
require 'C:/xampp/htdocs/projet2/ingredientC.php';
	$ingredient=new ingredientC();
if ($ingredient->supprimeringredient($_GET['deletevar']))
	header('Location:afficheringredient.php');

?>