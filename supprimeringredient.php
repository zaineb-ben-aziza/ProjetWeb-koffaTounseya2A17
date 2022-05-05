<?php
require 'C:/xampp/htdocs/projet/Controller/ingredientC.php';
	$ingredient=new ingredientC();
if ($ingredient->supprimeringredient($_GET['deletevar']))
	header('Location:afficheringredient.php');

?>