<?php

require 'C:/xampp/htdocs/projet/Controller/ingredientC.php';
	$ingredientC=new ingredientC();
	$listeingredient=$ingredientC->afficheringredient(); 



class PDF extends FPDF {
	
 


  // Footer
  function Footer() {
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Helvetica','I',9);
    // Numéro de page, centré (C)
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
  }
 
}


$pdf = new PDF('P','mm','A3');
  
// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// Compteur de pages {nb}
$pdf->AliasNbPages();

// Set font
$pdf->SetFont('Arial','B',16);
// Move to 8 cm to the right
$pdf->Cell(80);

$pdf->Cell(60,8,'LISTE DES  INGREDIENTS',0,1,'C',1);

$pdf->Ln(1);

function entete_table($position_entete) {
  global $pdf;
  $pdf->SetDrawColor(169, 234, 254); // Couleur du fond RVB
 $pdf->SetFillColor(28, 166, 205); // Couleur des filets RVB
  $pdf->SetTextColor(0); // Couleur du texte noir
  $pdf->SetY($position_entete);
  
  
  
 //entete du tableau 
  $pdf->SetX(1);
  $pdf->Cell(30,8,'code ingredient',1,0,'C',1);  

  $pdf->SetX(30); 
  $pdf->Cell(30,8,'nom ingredient',1,0,'C',1);

  $pdf->SetX(60); 
  $pdf->Cell(30,8,'prix ingredient',1,0,'C',1);

  $pdf->SetX(90); 
  $pdf->Cell(30,8,'quantite ingredient',1,0,'C',1);
  
    $pdf->SetX(120); 
  $pdf->Cell(170,8,'Composant',1,0,'C',1);

  	
  $pdf->Ln(); 
}

	 
				foreach($listeingredient as $ingredient){
					
					
					
			  $pdf->SetDrawColor(183);
			$pdf->SetFillColor(221); 
			$pdf->SetTextColor(0);
			$pdf->SetFont('Helvetica','',9);
			
  
		$pdf->SetX(1);
		   $pdf->Cell(30,8,$ingredient['codeing'],1,0,'C',1);
		   
		    
		  $pdf->SetX(30);
		  $pdf->Cell(30,8,$ingredient['noming'],1,0,'C',1);
	
		 
		  
		$pdf->SetX(60);
		   $pdf->Cell(30,8,$ingredient['prixing'],1,0,'C',1);
		   
		
		  $pdf->SetX(90);
		  $pdf->Cell(30,8,$ingredient['qteing'],1,0,'C',1);
		  
		
		  $pdf->SetX(120);
		  $pdf->MultiCell(170,8,utf8_decode($ingredient['composant']),1,0,'C',1);
		  
		  
		 
		  
				}


// AFFICHAGE EN-TÊTE DU TABLEAU
// Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
$position_entete = 10;
// police des caractères
$pdf->SetFont('Helvetica','',9);
$pdf->SetTextColor(0);
// on affiche les en-têtes du tableau
entete_table($position_entete);


$pdf->Output('ingredient.pdf','I');
									

?>