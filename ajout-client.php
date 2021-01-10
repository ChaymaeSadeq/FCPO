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
                        <h3 class="title">Clients <span>/ Ajout Nouveau Client</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

               <!--Form With Advance Form Elements Start-->
                <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Nouveau Client</h4>
                        </div>
<?php

$conn1=mysqli_connect("localhost","root","");
mysqli_select_db($conn1,"fcpo");
//include("conx.php");



  if (isset($_POST['submit'])){
 if(isset($_POST['first']) && isset($_POST['second']) && isset($_POST['phone'])&& isset($_POST['add1'])&& isset($_POST['add2'])&& isset($_POST['codePostal'])&& isset($_POST['civ']) && isset($_POST['ice']) && isset($_POST['tva']) && isset($_POST['rs']) && isset($_POST['siteActuel']) && isset($_POST['mail']) && isset($_POST['numCompte']) && isset($_POST['rs']) ){
     echo $_POST['first'];
   $n=$_POST['first'];
  $p=$_POST['second'];
  $tl=$_POST['phone'];
  $adr1=$_POST['add1'];
  $adr2=$_POST['add2'];
  $code_p=$_POST['codePostal'];
  $civ=$_POST['civ'];
  $mail=$_POST['mail'];
  $num_compte_banc=$_POST['numCompte'];
  $ICE=$_POST['ice'];
  $TVA=$_POST['tva'];
  $raison_soc=$_POST['rs'];
  $secteur_active=$_POST['sa'];
  $site_actuel=$_POST['siteActuel'];
$query = "INSERT INTO client (Nom,Prenom,tel,adresse,code_postal,civilite,mail, num_compte_bancaire,ice,tva,raison_social,secteur_activite,site_actuel,id_c) VALUES ('".$n."','".$p."','".$tl."','".$adr1."','".$code_p."','".$civ."','".$mail."','".$num_compte_banc."','".$ICE."','".$TVA."','".$raison_soc."','".$secteur_active."','".$site_actuel."',1)";

$resu=mysqli_query($conn1,$query);
 $data=mysqli_fetch_array($resu);
if($resu){
       echo "insert avec success";
    
}
}
    }
  
    ?>
                        <div class="box-body">
                            <form method="POST" action="#">
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Nom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" placeholder="Nom" name="first">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Prénom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" placeholder="Prénom" name="second">
                                    </div>
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Téléphone</h6>
                                    <input type="text" class="form-control" data-mask="(999) 999-9999" name="phone">
                                    <span class="form-help-text">e.g "(999) 999-9999"</span>
                                </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="formLayoutEmail4">E-Mail</label>
                                        <input type="email" id="formLayoutEmail4" class="form-control" placeholder="Email" name="mail">
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutAddress3">Adresse</label>
                                        <input type="text" id="formLayoutAddress3" class="form-control" placeholder="Address" name="add1">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutAddress4">Adresse 2</label>
                                        <input type="text" id="formLayoutAddress4" class="form-control" placeholder="Address 2" name="add2">
                                    </div>
                                    <div class="col-12 mb-15">
                                        <label for="f">Code Postal</label>
                                        <input type="text" class="form-control" placeholder="Code Postal" name="codePostal">                                         </div>
                                    <div class="col-lg-4 mb-20">
                                                <label for="formLayoutState2">Civilité</label>
                                                <select id="formLayoutState2" class="form-control select2" name="civ">
                                                    <option>Mr</option>
                                                    <option>Mme</option>
                                                    <option>Mlle</option>
                                                </select>
                                     </div>
                                    <div class="col-12 mb-15">
                                        <label for="f">Numéro du Compte Bancaire</label>
                                        <input type="text" class="form-control" placeholder="N° de Compte" name="numCompte">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="f">I.C.E</label>
                                        <input type="text" class="form-control" placeholder="I.C.E" name="ice">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="f">T.V.A</label>
                                        <input type="text" class="form-control" placeholder="T.V.A" name="tva">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="f">Raison Sociale</label>
                                        <textarea class="form-control" placeholder="R.S" name="rs"></textarea>                                     </div>
                                    <div class="col-12 mb-15">
                                    <label for="f">Secteur s'Activité</label>
                                    <textarea class="form-control" placeholder="S.A" name="sa"></textarea>                                         </div>
                                    
                                    <div class="col-12 mb-15">
                                        <label for="f">Site Actuel</label>
                                        <input type="text" class="form-control" placeholder="Site Actuel" name="siteActuel">                                         </div>
                                     <div class="col-12 mb-20">
                                        <input type="submit" value="submit" class="button button-primary " name="submit">
                                        <input type="submit" value="cancle" class="button button-danger" name="return">
                                    </div>
                                     </div>
                            </form>
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