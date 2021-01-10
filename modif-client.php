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

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Clients <span>/ Modifier Données Client</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

               <!--Form With Advance Form Elements Start-->
                <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Modifier Données Client</h4>
                        </div>
                        <div class="box-body">
                             <?php
                                     $idC = (int)$_GET['idC'];
                                       
                                        
                                        $cnx=mysqli_connect("localhost","root","");
                                        mysqli_select_db($cnx,"fcpo");
                                        $req="select nom,prenom,tel,mail,adresse,code_postal,civilite,num_compte_bancaire,ice,tva,raison_social,secteur_activite,site_actuel, id_client from  client where id_client=".$idC."";
                                        $resu=mysqli_query($cnx,$req);
                                        if ($resu==true)
                                           { $ligne=mysqli_fetch_row($resu);
                                            echo'
                            <form action="updateC.php" >
                                <div class="row mbn-20">
                                        <input type="text" name="idC"  value="'.$ligne[13].'" style="display:none;"">
                                    <div class="col-12 mb-20">
                                        <label for="nom">Nom</label>
                                        <input type="text" name="nom" class="form-control" value="'.$ligne[0].'">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="prenom">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" value="'.$ligne[1].'">
                                    </div>
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Téléphone</h6>
                                    <input type="text" name="tel"class="form-control" value="'.$ligne[2].'">
                                    <span class="form-help-text">e.g "(212) 999-99-99-99"</span>
                                </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="email">E-Mail</label>
                                        <input type="email" name="email" class="form-control" value="'.$ligne[3].'">
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" name="adresse" class="form-control" value="'.$ligne[4].'">
                                    </div>
                                    
                                    <div class="col-12 mb-15">
                                        <label for="cp">Code Postal</label>
                                        <input type="text" name="cp"class="form-control" value="'.$ligne[5].'"">                                         </div>
                                                                          
                                    <div class="col-lg-4 mb-20">

                                                <label for="civilite">Civilité</label>
                                                <select name="civilite" class="form-control select2">';
                                                if($ligne[6]=="Mme") echo'
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mme" selected >Mme</option>
                                                    <option value="Mlle">Mlle</option>';
                                                    if($ligne[6]=="Mr") echo'
                                                    <option value="Mr" selected>Mr</option>
                                                    <option value="Mme" >Mme</option>
                                                    <option value="Mlle">Mlle</option>';
                                                    if($ligne[6]=="Mlle") echo'
                                                    <option value="Mr" >Mr</option>
                                                    <option value="Mme" >Mme</option>
                                                    <option value="Mlle" selected>Mlle</option>';
                                                    if(is_null($ligne[6])) echo'
                                                    <option value="Mr" >Mr</option>
                                                    <option value="Mme" >Mme</option>
                                                    <option value="Mlle" >Mlle</option>';
                                                    echo'</select>
                                     </div>
                                     
                                    <div class="col-12 mb-15">
                                        <label for="ncp">Numéro du Compte Bancaire</label>
                                        <input type="text" name="ncp"class="form-control" value="'.$ligne[7].'">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="ice">I.C.E</label>
                                        <input type="text" name="ice" class="form-control" value="'.$ligne[8].'">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="tva">T.V.A</label>
                                        <input type="text" name="tva"class="form-control" value="'.$ligne[9].'">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="rs">Raison Sociale</label>
                                        <textarea name="rs"class="form-control" >'.$ligne[10].'</textarea>                                     </div>
                                    <div class="col-12 mb-15">
                                    <label for="secteur_activite">Secteur d'.'Activité</label>
                                    <textarea name="secteur_activite" class="form-control" >'.$ligne[11].'</textarea>                                         </div>
                                    
                                    <div class="col-12 mb-15">
                                        <label for="site_actuel">Site Actuel</label>
                                        <input type="text" name="site_actuel"class="form-control" value="'.$ligne[12].'">                                         </div>
                                     <div class="col-12 mb-20">
                                        <input type="submit" value="submit" class="button button-primary">
                                    </div>
                                     </div>
                            </form>';}
                            ?>
                       </div>
                 </div>
                </div>
                <!--Form With Advance Form Elements End-->
            </div><!-- Content Body End -->

          <!-- Footer Section Start -->
        

    </div>
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

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/plugins/select2/select2.active.js"></script>
    <script src="assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="assets/js/plugins/dropify/dropify.active.js"></script>

</body>

</html>