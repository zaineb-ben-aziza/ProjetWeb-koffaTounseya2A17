<?php
include_once 'C:/xampp/htdocs/projet2/CommentaireC.php';
$Commentaire = new CommentaireC();
if ($Commentaire->supprimerCommentaire($_GET['deletevar']))
    header ("Location:afficherCommentaire.php");
?>