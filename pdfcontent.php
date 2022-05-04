<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/Controller/SponsorsC.php";
	$Sponsors=new SponsorsC();
    $listeSponsors=$Sponsors->afficherSponsors();
    ?>
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<table class="table">
		 
			<tr>
				<th>id_Sponsor</th>
				<th>Nom_Sponsors</th>	
                <th>Marque</th>
				<th>Numero</th>
				<th>Adresse_mail</th>
             
              
                
			</tr>
			
			<?php
				foreach($listeSponsors as $SponsorsC){
			?>
			<tr>
				<td><?php echo $SponsorsC['id_Sponsors']; ?></td>
				<td><?php echo $SponsorsC['Nom_Sponsors']; ?></td>
				<td><?php echo $SponsorsC['Marque']; ?></td>
				<td><?php echo $SponsorsC['Numero']; ?></td>
                <td><?php echo $SponsorsC['Adresse_mail']; ?></td>
               
              
			<td>
            <?php
                echo  '
			<button class="btn btn-info"><a href="modifierSponsors.php?deletevar='.$SponsorsC['id_Sponsors'].'" class="text-light">Modifier </a></button>
  <button class="btn btn-danger"><a href="supprimerSponsors.php? deletevar='.$SponsorsC['id_Sponsors'].'" class="text-light">Delete</a></button>
		</td>';
				?>
                </td>
			</tr>
            
			<?php
				}
			?>
			 
		</table>

                </body>
                </html>          