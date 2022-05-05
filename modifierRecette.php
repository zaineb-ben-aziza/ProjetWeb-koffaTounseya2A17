<?php
include_once "$_SERVER[DOCUMENT_ROOT]/projet/recetteC.php";
$Recette = null;
$error='';

 // create an instance of the controller
 $RecetteC = new RecetteC();
 if (
     isset($_POST["nom_rec"]) &&		
     isset($_POST["type_rec"]) &&
     isset($_POST["ingredient_rec"]) && 
     isset($_POST["description"]) &&
     isset($_POST["id_type"])
 ) {
     if (
         !empty($_POST['nom_rec']) &&
         !empty($_POST["type_rec"]) && 
         !empty($_POST["ingredient_rec"]) && 
         !empty($_POST["description"]) &&
         !empty($_POST["id_type"])
     ) {
       
         $Recette = new Recette(
             $_GET['ach'],
             $_POST['nom_rec'],
             $_POST['type_rec'], 
             $_POST['ingredient_rec'],
             $_POST['description'],
             $_POST['id_type']
         );
         $RecetteC->modifierRecette($Recette,$_GET['ach']);
         header ("Location:afficherRecette.php");
     }
     else
         $error = "Missing information";
 }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Kofa Tounseya</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
       <link rel="icon" type="image/png" sizes="32x32" href="C:/xampp/htdocs/projet/icon/icon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                     
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>


                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="C:/xampp/htdocs/projet/icon/adem.png" alt="user-img" width="50"
                                    class="img-circle"><span class="text-white font-medium">achref allala</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                               <i class="bi bi-house-fill"></i>
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
                                <span class="hide-menu"> &nbsp &nbsp &nbsp &nbsp Home</span>
                            </a>
                        </li>
  <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="afficherRecette.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Gestion des Recettes</span>
                            </a>
                        </li>

                     
                       
                 

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gestion recette</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="Dashboard.html" class="fw-normal">Home</a></li>
                            </ol>
                            <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">front
                                </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
       
            <!-- =======================FORMULAIRE GESTION DES RECETTES======================================= -->
            <?php $RecetteC=new  RecetteC();
$listerecette=$RecetteC->click_recette ($_GET['ach']);
foreach($listerecette as $Recette_r){
?>
           <form name="f" method="POST" id="myForm">
  <div class="container">
<br>
<br>
  
    <input type="hidden" name="id" class="form-control" id="myForm" aria-describedby="emailHelp">
 
 
  <div class="">
    <label for="exampleInputPassword1" class="">Nom_rec:</label>
    <input type="text"  name="nom_rec" class="form-control" id="Nom_rec" value="<?php echo $Recette_r['nom_rec'];?>">
    <span id="error"></span>
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="">type_rec:</label>
    <input type="text"  name="type_rec" class="form-control" id="type_rec" value="<?php echo $Recette_r['type_rec'];?>">
    <span id="error2"></span>
  </div>
    <div class="">
    <label for="exampleInputPassword1" class="">ingredient_rec:</label>
    <input type="text"  name="ingredient_rec" class="form-control" id="ingredient_rec"  value="<?php echo $Recette_r['ingredient_rec'];?>">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="">description:</label>
    <input type="text"  name="description" class="form-control" id="description"value="<?php echo $Recette_r['description'];?>">
  </div>
  <div class="">
    <label for="exampleInputPassword1" class="">id_type:</label>
    <input type="text"  name="id_type" class="form-control" id="id_type"value="<?php echo $Recette_r['id_type'];}?>">
  </div>
  
 
  <br>

<p><input type="submit"  value="Modifier" class="btn btn-info"  name="modifier">&nbsp;
<button type="reset" class="btn btn-danger">Reset</button></p>


</form>
<script> let myForm = document.getElementById('myForm');
    let myError = "";
    myForm.addEventListener('modifier', function(e){
        let myInput = document.getElementById('nom_rec');
        let myInput2 = document.getElementById('type_rec');
        let myRegex = /^[a-zA-Z-\s]+$/;  

    if(myInput.value.trim() == "" || !myRegex.test(myInput.value) ) {
        let myError = document.getElementById('error');
        myError.innerHTML = "le champ champ comporte uniquement des lettres et des tirets.";
        //myError.innerHTML = 'red';
        e.preventDefault();
      }else if (myRegex.test(myInput2.value) == false) {
        let myError2 = document.getElementById('error2');
        myError2.innerHTML = "le champ comporte uniquement des lettres et des tirets.";
        //myError.style.color = 'red';
        e.preventDefault(); 
      } 
    })      </script>


        <!-- ================================================================================================= -->


    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>