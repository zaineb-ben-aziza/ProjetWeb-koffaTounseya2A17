<?php
include_once 'C:/xampp/htdocs/Projet/Controller/ReclamationC.php';

$ReclamationC = new ReclamationC();
if ($ReclamationC->modifierReclamation($_GET['id']))
    header ("Location:afficherReclamation.php");
?>
