<?php
include_once 'C:/xampp/htdocs/projet2/ReclamationC.php';
$reclamation = null;

$reclamationC = new ReclamationC();


if (isset($_POST['Contenu']) &&
    isset($_POST['Type_paiement'])){
    
        if (!empty($_POST['Contenu']) &&
        !empty($_POST['Type_paiement'])) {
            $reclamation = new Reclamation($_POST['Contenu'], $_POST["idd"], $_POST['Type_paiement']);
            $reclamationC->ajouterReclamation($reclamation);
            header ("Location:front.php");
        }
        else
        header ("Location:front.php");
    }
?>