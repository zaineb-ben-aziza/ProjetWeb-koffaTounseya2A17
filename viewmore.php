
       <?php
    include_once'C:/xampp/htdocs/projet/Controller/ingredientC.php';
	$ingredientC=new ingredientC();
	$listeingredient=$ingredientC->afficheringredient(); 
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
	<?php
				foreach($listeingredient as $ingredient){
			echo'
			
			<div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/a.png" alt="">
            <div class="content">
                <h3>'.$ingredient['noming'].'</h3>
                <span class="price">prix: '.$ingredient['prixing'].'TND</span>
                <span class="quantity">qte: '.$ingredient['qteing'].'</span>
            </div>
        </div>
    
			';
				?>
		
			<?php
				}
			?>
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

<!-- header section ends -->

<!-- home section starts  -->


     

<!-- -------------------------------------------------------------------------------------------------------------->

<!-- categories section starts  -->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="jsfront/script.js"></script>

</body>
</html>
	



	
	
	
			

			
			

   

