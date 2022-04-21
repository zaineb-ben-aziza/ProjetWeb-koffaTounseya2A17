<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/SponsorsC.php";
	$Sponsors=new SponsorsC();
if ($Sponsors->supprimerSponsors($_GET['deletevar']))
	header('Location:afficherSponsors.php');

?>