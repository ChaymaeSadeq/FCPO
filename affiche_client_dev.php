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
                            <h4 class="text-primary fw-600 m-0">Clients 1</h4>
                        </div>
                        
                    </div>
                </div>
                <!--Order Details Head End-->
                
                <!--Order Details Customer Information Start-->
            
                <div class="col-12 mb-30">
                    <div class="order-details-customer-info row mbn-20">

                        <!--Billing Info Start-->
                        <div class="col-lg-4 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Info Cilent</h4>
            <?php 
                            
        include("conx.php");
        $a=$_GET['idC'];
$query = "SELECT * FROM client WHERE id_client =$a" ;
$prep= $conn->prepare($query);
$prep->execute();
                           $ligne = $prep->fetch()?>
                            <ul>
                                <li> <span>Name</span>
                                    <span><?php echo $ligne['Nom'] ; ?></span> </li>
                                <li> <span>Prénom</span> <span><?php echo $ligne['Prenom'] ; ?></span> </li>
                                <li> <span>Téléphone</span> <span> <?php echo $ligne['tel'] ; ?> </span> </li>
                                <li> <span>E-Mail</span> <span><?php echo $ligne['mail'] ; ?></span> </li>
                                <li> <span>Adresse</span> <span><?php echo $ligne['adresse'] ; ?></span> </li>
                                <li> <span>Code Postal</span> <span><?php echo $ligne['code_postal'] ; ?></span> </li>
                                <li> <span>Civilité</span> <span><?php echo $ligne['civilite'] ; ?></span> </li>
                                
                                <li> <span>Numéro de Compte Bancaire</span> <span><?php echo $ligne['num_compte_bancaire'] ; ?></span> </li>
                                <li> <span>I.C.E</span> <span><?php echo $ligne['ice'] ; ?></span> </li>
                                <li> <span>T.V.A</span> <span><?php echo $ligne['tva'] ; ?></span> </li>
                                <li> <span>R.S</span> <span><?php echo $ligne['raison_social'] ; ?></span> </li>
                                <li> <span>Secteur d'Activité</span> <span><?php echo $ligne['secteur_activite'] ; ?></span> </li>
                                <li> <span>Site Actuel</span> <span><?php echo $ligne['site_actuel'] ; ?></span> </li>
                            </ul>
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