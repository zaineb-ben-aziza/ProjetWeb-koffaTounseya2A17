
 <?php
include_once 'C:/xampp/htdocs/projet2/ingredientC.php';
if(isset($_GET['deletevar'])){
$ingredient=new ingredientC();
$ingredient->afficher();
}


?>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css_front/style.css">

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
    include 'C:/xampp/htdocs/projet2/panierc.php';
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
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" > *****INFORMATIONS PERSONNELLES*****</h4>
                    </div>

<br>
<br>
<form name="f" action="lol.php" method="get">

<table border="1" width="100%">
<tr>
<td width="145">Nom:</td>

<td><input id="nm" type="text" name="nom" size="20"></td>


</tr>
<tr>
<td width="145">Prénom:</td>
<td><input type="text" name="prenom" size="20"></td>
</tr>
<tr>
<td width="145">Email:</td>
<td><input type="Email" placeholder="contact@exemple.com"size="20"></td>
</tr>
<tr>
<td width="145">Telephone:</td>
<td><input type="text" name="tel" size="20"></td>
</tr>
<tr>
<td width="145">Adresse:</td>

<td><input type="text" name="add" size="20"></td>
</tr>
<tr>
<td width="145">Code Postal:</td>
<td><input type="text" name="code" size="20"></td>
</tr>
</table>
<p> </p>
<p> </p>
<br>
<br>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title" > *****MODE de livraison*****</h4>
                    </div>
                    <td width="145">type_livraison:</td>
</label>
<select name="type_livraison">
    <option value="sel">select</option>
    <option value="info"> a domicile</option>
    <option value="electro">par poste</option>
  
</select>
  <br> <br>

  <td width="160">Si vous voulez nous laisser un message à propos de votre commande, merci de bien vouloir le renseigner dans le champ ci-contre:</td>
<td><input type="text" name="p" size="60"></td>
</tr>
<br> 
<button class="btn btn-danger"><a href="supprimer_panier.php? sisi='.$panier['id_panier'].'" class="text-dark">Annuler</a></button>
  <button class="btn btn-info"><a href="view1.php? sisi='.$panier['id_panier'].'" class="text-dark">Enregistrer</a></button>

</form>
<?php
foreach($listpanier as $panier){
echo'
<tr>






<td>

  



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
<p id="contact">Contact : telephone: +216 70 000 000 | Facebook/Instagram:  Koffa Tounseya | Gmail: Koffa Tounseya@gmail.com | &copy; 2021, Koffa Tounseya .</p>
</footer>
</body>
</html>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js_front/script.js"></script>

</body>
</html>
	



	
	
	
			

			
			

   

