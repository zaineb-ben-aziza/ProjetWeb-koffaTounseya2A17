<?php
if (isset($_POST['envoyer']))
{
include_once 'C:/xampp/htdocs/projet2/ReclamationC.php';
$reclamation = null;

$reclamationC = new ReclamationC();


if (isset($_POST['Contenu']) &&
    isset($_POST['Type_paiement'])){
    
        if (!empty($_POST['Contenu']) &&
        !empty($_POST['Type_paiement'])) {
            $reclamation = new Reclamation($_POST['Contenu'], $_POST["idd"], $_POST['Type_paiement']);
            $reclamationC->ajouterReclamation($reclamation);
        
        }
      
    }
}
?>
<!DOCTYPE html>
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

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i>  KOFFA TOUNSEYA </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <!--<input type="search" id="search-box" placeholder="search here...">-->
        <!--<label for="search-box" class="fas fa-search"></label>-->
        <a href="bot.php" class="btn">bot</a>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
        
    </div>
    
    <form action="" class="login-form">
    <h1 style="color:#ff7c04;">Information</h1>
    <?php
include_once'C:/xampp/htdocs/projet2/ingredientC.php';
$utilisateurC = new utilisateurC();
$listeadmin=$utilisateurC->getclient2($_GET["id"]);
foreach($listeadmin as $Util){
    echo "<p>nom:<h2 id='a' >".$Util['nom']."</h2>
    prenom:<h2 id='a' >".$Util['prenom']."</h2></p>
    <p>email:<h2 id='a' >".$Util['email']."</h2></p>
    <p>adresse:<h2 id='a' >".$Util['adresse']."</h2></p>
    <p>date_naissance:<h2 id='a' >".$Util['date_naissance']."</h2></p>";
}

?>
        
        <a href="front.php">Deconnexion</a>
        
    </form>
    <style>
#div_az{
    position:absolute;
    left:1745px;
    top:17px;

    width: 100px; 
    height: 100px;
    }
</style>
    <div id="div_az">
    <?php
 echo "<h2 style='color:#ff7c04;' >".$Util['nom']."</h2>
 <h2>".$Util['prenom']."</h2>";
    ?>
    </div>
    
      
</header>


<!-- header section ends -->



<!-- features section starts  -->
<section class="products" id="products">
</section>
<section class="products" id="products">
</section>
<section class="products" id="products">

<h4 class="heading"> Nos<span>Recettes</span> </h4>

    <div class="swiper product-slider">
   

        <div class="swiper-wrapper">
        <?php
            include_once "$_SERVER[DOCUMENT_ROOT]/projet2/recetteC.php";
            $Recette=new RecetteC();
            $listerecette=$Recette->afficherrecette(); 
            foreach($listerecette as $RecetteC){
           ?>
       
            <div class="swiper-slide box">
          
            <img src="imageFront/<?php echo $RecetteC["id"];?>.jpg" >
            <h3><?php echo $RecetteC["nom_rec"]; ?></h3>
                <p><?php echo $RecetteC["description"]; ?></p>
                <p><?php echo $RecetteC["ingredient_rec"]; ?></p>
                <div class="price"><?php echo $RecetteC["type_rec"];?> 
                <br>
                <a href="frontRecette.html" class="btn">view more</a>
            
            </div>
            </div>
            <?php
            }
        ?>

            </div>
              
          

        </div>
       


</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Nos<span>ingrédients</span> </h1>

    <div class="swiper product-slider">
   

        <div class="swiper-wrapper">
        <?php
             
         $ingredientC=new ingredientC();
$listeingredient=$ingredientC->afficheringredient();

            foreach($listeingredient as $ingredient){
           ?>
       
            <div class="swiper-slide box">
         
            <img src="image/<?php echo $ingredient["noming"];?>.png" >
            <h3><?php echo $ingredient["noming"]; ?></h3>
                <p class="price">prix: <?php echo $ingredient["prixing"]; ?></p>
<p class="price">Quantité: <?php echo $ingredient["qteing"]; ?></p>
                <div class="price">
                <br>
                <a href="viewmore.php" class="btn">view more</a>
           
            </div>
            </div>
            <?php
            }
        ?>

            </div>
             
         

        </div>
       


</section>
<section class="products" id="products">

    <h1 class="heading"> Nos <span>evenements</span> </h1>

    <div class="swiper product-slider">
   

        <div class="swiper-wrapper">
        <?php
            include_once "$_SERVER[DOCUMENT_ROOT]/projet2/EventC.php";
            $evenement=new EvenementC();
            $listeEvenement=$evenement->afficherEvent(); 
            foreach($listeEvenement as $EvenementC){
           ?>
       
            <div class="swiper-slide box">
          
            <img src="imageFront/<?php echo $EvenementC["id_event"];?>.png" >
            <h3><?php echo $EvenementC["Nom"]; ?></h3>
                <p><?php echo $EvenementC["description"]; ?></p>
                <div class="price"><?php echo $EvenementC["dateDebut"];?> 
                <br>
                <a href="http://localhost/contact/indexx.php" class="btn">view more</a>
            
            </div>
            </div>
            <?php
            }
        ?>

            </div>
              
          

        </div>
       


</section>


<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/cat-1.png" alt="">
            <h3>vegitables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-3.png" alt="">
            <h3>dairy products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="image/cat-4.png" alt="">
            <h3>fresh meat</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> customer's <span>review</span>
    <form method="POST" action="#review">
        <div class="box">
                <h6 style="color :red"><input type="checkbox" name="check1"/>Favorable</h6>
                <h6 style="color :red"><input type="checkbox" name="check2"/>Non Favorable</h6>
                <input type="submit" value="Confirmer" class="btn" name="trie">
        </div></h1>
    </form>
<?php
    include_once 'C:/xampp/htdocs/projet2/CommentaireC.php';
    $Commentaire = new CommentaireC();
    $liste = $Commentaire->afficherCommentaire();
?>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">
        <?php
                foreach($liste as $Commentairec){
        ?>
            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p><?php echo $Commentairec['Contenu'];?></p>
                <h3><?php echo $Commentaire -> afficherPseudonyme($Commentairec['ID_utilisateur']); ?></h3>
                <div class="stars">
                <?php
  
                for ($i = 1; $i <= $Commentairec['Avis']; $i++){
                    ?> <i class="fas fa-star"></i>
                <?php
                    }
                ?>
                
                    <!-- <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i> -->
                </div>
            </div>
        
        <?php
            }
        ?>
            <!-- <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div> -->

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> by user </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic vegitables and fruits</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> groco <i class="fas fa-shopping-basket"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>
        <form action="" method="POST">
            <div class="box">
                <h3>Reclamation</h3>
                <p>Contenu</p>
                <textarea name="Contenu"  cols="10" rows="3" class="email"></textarea>
                <input type="text" placeholder="Type_paiement" class="email" name="Type_paiement">
                <input type="submit" value="Envoyer" class="btn" name="envoyer">
                <img src="image/payment.png" class="payment-img" alt="">
                <input type="hidden"   name="idd" value="<?php echo $_GET["id"] ?>">
            </div>
        </form>


    </div>

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js_front/script.js"></script>

</body>
</html>