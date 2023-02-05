
<?php
require "club.php" ;
if (empty($_GET['id']) || empty($_GET['nom']) || empty($_GET['test']) || empty($_GET['adresse'])  || empty($_GET['domaine']))
echo "Champs manquants!!";
else {
$cl=new Club($_GET['id'],$_GET['nom'],$_GET['test'],$_GET['adresse'],$_GET['domaine']);
var_dump ($cl->afficher_club());
echo "
<table>
<tr>
<th>id</th>
<th>nom</th>
<th>description</th>
<th>adresse</th>
<th>domaine</th>
</tr>
<tr>
<th>
";
if (empty($_GET['id']))  echo ""; else  echo $_GET['id'];   echo"</th>
<th>";  if (empty($_GET['nom']))  echo ""; else  echo $_GET['nom'];    echo"</th>
<th>"; if (empty($_GET['test']))  echo ""; else  echo $_GET['test'];    echo"</th>
<th>";  if (empty($_GET['adresse']))  echo ""; else  echo $_GET['adresse'];    echo"</th>
<th>"; if (empty($_GET['domaine']))  echo ""; else  echo $_GET['domaine'];   echo"</th>
<th>";


echo "
</table>";
$cl->afficherclub();
}
?>