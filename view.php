
 <?php
include_once 'C:/xampp/htdocs/projet2/ingredientC.php';
if(isset($_GET['deletevar'])){
$ingredient=new ingredientC();
$ingredient->afficher();
}


?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="cssfront/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="frontafficheing.php" class="logo"> <i class="fas fa-shopping-basket"></i> KOFFA TOUNSEYA</a>

   

   

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>

    </form>

<!-- ------------------------------------panier cart-------------------------------------------------------------------->
     <div class="shopping-cart">
	
    <!-- ------------------------------------END-------------------------------------------------------------------->    
 
    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

</header>


<?php

$panierc=new panierc();
$listpanier=$panierc->afficher1();
?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<table class="table">

<tr>

<th>codeing</th>
<th>quantite</th>
<th>prix</th>






</tr>
<?php
foreach($listpanier as $panier){
echo'
<tr>

<td>  '.$panier['codeing'].' </td>
<td>  '.$panier['quantite'].' </td>
<td>  '.$panier['prix'].' </td>




<td>

  <button class="btn btn-danger"><a href="supprimer_panier.php? sisi='.$panier['id_panier'].'" class="text-dark">Supprimer commande</a></button>
  <button class="btn btn-info"><a href="view1.php? sisi='.$panier['id_panier'].'" class="text-dark">confirmer achat</a></button>



</td>';
?>
</tr>
<?php
}
?>

</table>
</form>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p id="contact">Contact : telephone: +216 70 000 000 | Facebook/Instagram:  Koffa Tounseya | Gmail: Koffa Tounseya@gmail.com | &copy; 2021, Koffa Tounseya .</p>
</footer>
</body>
</html>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="jsfront/script.js"></script>

</body>
</html>
	



	
	
	
			

			
			

   

