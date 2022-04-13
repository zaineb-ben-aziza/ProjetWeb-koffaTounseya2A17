<?php
include_once 'C:/xampp/htdocs/Projet/ReclamationC.php';
$Reclamation = new ReclamationC();
if ($Reclamation->supprimerReclamation($_GET['deletevar']))
    header ("Location:afficherReclamation.php");
?>