<?php
require "config.php";
class Club {
private $id ;
private $nom ;
private $descreption ;
private $adresse ;
private $domaine ;


function __construct( $id,$nom,$descreption,$adresse,$domaine ) {
    $this->id = $id;
    $this->nom = $nom;
    $this->descreption = $descreption;
    $this->adresse = $adresse;
    $this->domaine = $domaine;
}
function  afficher_club(){
    return "id ".$this->id."nom".$this->nom."descreption".$this->descreption."adresse".$this->adresse."domaine".$this->domaine;
}
function  ajouter_club(){
    $con=new config();
    $connecxion=$con->getConnexion();
    $sql= $connecxion->prepare("INSERT INTO club VALUES (?,?,?,?,?)");
    $sql->bindParam(1, $this->id);
    $sql->bindParam(2, $this->nom);
    $sql->bindParam(3, $this->descreption);
    $sql->bindParam(4, $this->adresse);
    $sql->bindParam(5, $this->domaine);
    $sql->execute();
}
function afficherclub()
{
    $con=new config();
    $connecxion=$con->getConnexion();
    $stmt = $connecxion->query("SELECT * FROM club");
    echo"___________________________________";
    echo "<table border=1> <tr>
    <th>id</th>
    <th>nom</th>
    <th>description</th>
    <th>adresse</th>
    <th>domaine</th>
    </tr>
    ";
    while ($row = $stmt->fetch()) {
        echo "<tr><th>".$row['id']."</th><th>".$row['nom']."</th><th>".$row['description']."</th><th>".$row['adresse']."</th><th>".$row['domaine']."</th></tr>";

}
echo "</table>";
}
}


?>