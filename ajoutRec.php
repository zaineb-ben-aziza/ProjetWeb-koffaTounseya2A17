<?php
include_once 'C:/xampp/htdocs/Projet/Controller/ReclamationC.php';
$reclamation = null;

$reclamationC = new ReclamationC();


if (isset($_POST['Contenu']) &&
    isset($_POST['Type_paiement'])){
    
        if (!empty($_POST['Contenu']) &&
        !empty($_POST['Type_paiement'])) {
            $reclamation = new Reclamation($_POST['Contenu'], 55, $_POST['Type_paiement']);
            $reclamationC->ajouterReclamation($reclamation);
            header ("Location:index.php");
        }
        else
        header ("Location:index.php");
    }
?>