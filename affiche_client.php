<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adomx - Responsive Bootstrap 4 Admin Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="assets/css/style-primary.css">

</head>

<body>

    <div class="main-wrapper">


       <?php     
        include("head.php");   
        ?>

        <!-- Content Body Start -->
        <div class="content-body">

            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Clients <span>/ Infos Client</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div>
            
            
            <!--Order Details Head Start-->
                <div class="col-12 mb-30">
                    <div class="row mbn-15">
                        <div class="col-12 col-md-4 mb-15">
                            <h4 class="text-primary fw-600 m-0">Info Cilent</h4>
                        </div>
                        
                    </div>
                </div>
                <!--Order Details Head End-->
                
                <!--Order Details Customer Information Start-->
            
                <div class="col-12 mb-30">
                    <div class="order-details-customer-info row mbn-20">

                       
                            <?php
                                     $idC = (int)$_GET['idC'];
                                       
                                        
                                        $cnx=mysqli_connect("localhost","root","");
                                        mysqli_select_db($cnx,"fcpo");
                                        $req="select id_client,nom,prenom,tel,mail,adresse,code_postal,civilite,num_compte_bancaire,ice,tva,raison_social,secteur_activite,site_actuel from client where id_client=".$idC."";
                                        $resu=mysqli_query($cnx,$req);
                                        if ($resu==true)
                                           { $ligne=mysqli_fetch_row($resu);
                                            echo'
                            <ul>
                                <li> <span>Nom</span><span>'.$ligne[1].'</span> </li>
                                <li> <span>Prénom</span> <span>'.$ligne[2].'</span> </li>
                                <li> <span>Téléphone</span> <span>'.$ligne[3].' </span> </li>
                                <li> <span>E-Mail</span> <span>'.$ligne[4].'</span> </li>
                                <li> <span>Adresse</span> <span>'.$ligne[5].'</span> </li>
                                <li> <span>Code Postal</span> <span>'.$ligne[6].'</span> </li>
                                <li> <span>Civilité</span> <span>'.$ligne[7].'</span> </li>
                                
                                <li> <span>Numéro de Compte Bancaire</span> <span>'.$ligne[8].'</span> </li>
                                <li> <span>I.C.E</span> <span>'.$ligne[9].'</span> </li>
                                <li> <span>T.V.A</span> <span>'.$ligne[10].'</span> </li>
                                <li> <span>R.S</span> <span>'.$ligne[11].'</span> </li>
                                <li> <span>Secteur d'.'Activité</span> <span>'.$ligne[12].'</span> </li>
                                <li> <span>Site Actuel</span> <span>'.$ligne[13].'</span> </li>
                            </ul>';} 
                            else
                            {
                                 echo'erreur dans la requête !!';
                                }
                                    mysqli_close($cnx);
                            ?>
                        </div>
                        <!--Billing Info End-->
                        
                       </div>
                    </div>
                <!--Order Details Customer Information End-->
            
        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; <a href="https://themeforest.net/user/codecarnival">Codecarnival</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>