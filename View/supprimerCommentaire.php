<?php
include_once 'C:/xampp/htdocs/Projet/Controller/CommentaireC.php';
$Commentaire = new CommentaireC();
if ($Commentaire->supprimerCommentaire($_GET['deletevar']))
    header ("Location:afficherCommentaire.php");
?>