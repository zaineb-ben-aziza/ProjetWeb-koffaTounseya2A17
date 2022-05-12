<?php
include "$_SERVER[DOCUMENT_ROOT]/projet2/typeC.php";
	$type=new typeC();
if ($type->supprimertype($_GET['deletevar']))
	header('Location:afficherType.php');

?>