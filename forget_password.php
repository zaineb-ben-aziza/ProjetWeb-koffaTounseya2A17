
<?php
include_once 'C:/xampp/htdocs/projet/utilisateurC.php';
$utilisateurC = new utilisateurC();
 if (isset($_POST["envoyer"])) {
    $password=uniqid();
    $utilisateurC->modifierpasseword(trim($_POST["email"]," "),$password);
$subject = "Nouveau  mot_passe";
$body = "Bonjour ,voici votre nouveau mot_passe:".$password;
$sender = "Koffa-tounsia@gmail.tn";
if(mail($_POST["email"], $subject, $body, $sender)){
    echo'<script type="text/javascript"> alert ("Un nouveau mot_passe a eté enovyer verfier votre Boite email") </script>';
}else{
    echo'<script type="text/javascript"> alert ("echec de l envoie") </script>';
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
    <link href="css/style.min.css" rel="stylesheet">

</head>
<style>
input[type='text'] { font-size: 15px; }
input[type='Submit'] { font-size: 15px; }
input[type='button'] { font-size: 15px; }
select{font-size: 15px;}
input[type='date'] { font-size: 15px; }


</style>
<body>
<form name="f"  method="POST">
<div class="box-container">
 <!--ajout utilisateur!-->
 <section class="blogs" id="blogs">
 <input type="hidden" name="id" class="form-control" id="" aria-describedby="emailHelp">
 <h1 style="color:#ff7c04;" width="350px"> Sign up </h1>
 <br>
 <br>
 
 
  <div class="">
    <p style="font-size:160%;"> Email:</p>
    <input type="text"  name="email" class="form-control" id="1" style="height: 30px;" >
  
  <div class="">
    <label for="exampleInputPassword1" class="" id="nom_c" style="color:#FF0000"></label>
  </div>

  <br>
<input type="Submit"  value="Envoyer" class="btn"  name="envoyer" onclick="return controle_ajout()"  style="background: var(--orange);">&nbsp;
</form>
</div>
</section>
<!--end utilisateur!-->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Koffa-tounsia <i class="fas fa-shopping-basket"></i> </h3>
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
            <a href="#" class="links"> <i class="fas fa-envelope"></i> Koffatounsia@gmail.com </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> recette </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> ingrédiant </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates!!</p>
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>


</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js_front/script.js"></script>

</body>
</html>