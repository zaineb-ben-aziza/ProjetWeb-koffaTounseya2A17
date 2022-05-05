
<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
</style>
<?php
    include_once 'C:/xampp/htdocs/projet/utilisateurC.php';
	$UtilisateurC=new UtilisateurC();
	$listeadmin=$UtilisateurC->afficheradmin(); 
	
?>

		<table class="table">
		 
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>prenom</th>
                <th>adresse</th>
				<th>date_naissance</th>
				<th>pseudo</th>
                <th>mot_passe</th>
                <th>email</th>
                <th>type</th>
                <th>date_enregistrement</th>
                
			</tr>
			
			<?php
				foreach($listeadmin as $UtilisateurC){
			?>
			<tr>
				<td><?php echo $UtilisateurC['id']; ?></td>
				<td><?php echo $UtilisateurC['nom']; ?></td>
				<td><?php echo $UtilisateurC['prenom']; ?></td>
				<td><?php echo $UtilisateurC['adresse']; ?></td>
                <td><?php echo $UtilisateurC['date_naissance']; ?></td>
                <td><?php echo $UtilisateurC['pseudo']; ?></td>
                <td><?php echo $UtilisateurC['mot_passe']; ?></td>
                <td><?php echo $UtilisateurC['email']; ?></td>
                <td><?php echo $UtilisateurC['type']; ?></td>
                <td><?php echo $UtilisateurC['date_enregistrement']; ?></td>
			<td><?php
				?>
                </td>
			</tr>
            
			<?php
				}
			?>
			 
		</table>
        <center><button onclick="window.print()" class="btn btn-primary" id="print-btn" >Imprimer maintenant</button></center>