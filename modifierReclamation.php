<?php
include_once 'C:/xampp/htdocs/projet2/ReclamationC.php';

$ReclamationC = new ReclamationC();
if ($ReclamationC->modifierReclamation($_GET['id']))
    header ("Location:afficherReclamation.php");
?>
