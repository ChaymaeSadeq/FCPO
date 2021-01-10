<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FCPO- Ajout Projet</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">

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

    <script type="text/javascript">
        $('.smart-wizard').smartWizard({
    showStepURLhash: false,
});
    </script>

    <script type="text/javascript">$(document).ready(function() {
  $('select').niceSelect();
});</script>

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
                        <h3>Projets <span>/Ajout Projet </span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->
                                        
            <div class="row">

                <!--Form Wizard Horizontal Start-->
                <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Ajout Projet</h3>
                        </div>
                        <div class="box-body">

                            <div class="smart-wizard">
                                <ul>
                                    <li><a href="#step-1">  Etape 1</a></li>
                                    <li><a href="#step-2">  Etape 2</a></li>
                                    <li><a href="#step-3">  Etape 3</a></li>
                                    <li><a href="#step-4">  Etape 4</a></li>
                                    <li><a href="#step-5">  Etape 5</a></li>
                                </ul>

                                <div>
                                    <div id="step-1">
            <div id="formA" style="display:none" class="row mbn-30">

               <!--Form With Advance Form Elements Start-->
                <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Nouveau Client</h4>
                        </div>
                        <div class="box-body">
                            <form action="addCp.php" >
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="nom">Nom</label>
                                        <input type="text"  name="nom" class="form-control" placeholder="Nom">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="prenom">Prénom</label>
                                        <input type="text" name="prenom" name="prenom" class="form-control" placeholder="Prénom">
                                    </div>
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Téléphone</h6>
                                    <input type="text" class="form-control" name="tel">
                                    <span class="form-help-text">e.g "(212) 999-9999"</span>
                                </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="email">E-Mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    
                                    <div class="col-12 mb-20">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" name="adresse" class="form-control" placeholder="Address">
                                    </div>
                                    
                                    <div class="col-12 mb-15">
                                        <label for="cp">Code Postal</label>
                                        <input type="text" class="form-control" name ="cp"placeholder="Code Postal">                                         </div>
                                    <div class="col-lg-4 mb-20">
                                                <label for="civilite">Civilité</label>
                                                <select name="civilite" class="form-control select2">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mme">Mme</option>
                                                    <option value="Mlle">Mlle</option>
                                                </select>
                                     </div>
                                    <div class="col-12 mb-15">
                                        <label for="ncp">Numéro du Compte Bancaire</label>
                                        <input type="text" name="ncp"class="form-control" placeholder="N° de Compte">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="ice">I.C.E</label>
                                        <input type="text" name="ice" class="form-control" placeholder="I.C.E">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="tva">T.V.A</label>
                                        <input type="text" name="tva"class="form-control" placeholder="T.V.A">                                         </div>
                                    <div class="col-12 mb-15">
                                        <label for="rs">Raison Sociale</label>
                                        <textarea class="form-control" name="rs" placeholder="R.S"></textarea>                                     </div>
                                    <div class="col-12 mb-15">
                                    <label for="secteur_activite">Secteur s'Activité</label>
                                    <textarea class="form-control" name="secteur_activite" placeholder="S.A"></textarea>                                         </div>
                                    
                                    <div class="col-12 mb-15">
                                        <label for="site_actuel">Site Actuel</label>
                                        <input type="text" name="site_actuel" class="form-control" placeholder="Site Actuel">                                         </div>
                                     <div class="col-12 mb-20">
                                        <input type="submit" value="submit" class="button button-primary">
                                        <a href="ajoutProjet.php"><input type="button" value="cancel" class="button button-danger"></a>
                                    </div>
                                     </div>
                            </form>
                       </div>
                 </div>
                </div>
                <!--Form With Advance Form Elements End-->
            </div><!-- Content Body End -->
                <form id="lstC" action="addP.php" method="post">
                                            <div  class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Sélectionner le client</h4>
                                                </div>
                                                <div class="row mbn-30">
                                            <div class="col-12 mb-30">
                                            <div class="box">
                        <div class="box-head">
                           <!-- <h3 class="title">Liste des Clients</h3>-->
                            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Liste des Clients</h3>
                    </div>
                </div><!-- Page Heading End -->
                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 id="ajtC" style="cursor:pointer" class="title">+<span>Ajout Client</span> </h3>
                    </div>
                </div>
            </div><!-- Page Headings End -->
                        </div>
                        <div  class="box-body">
                             <?php
                                        $cnx=mysqli_connect("localhost","root","");
                                        mysqli_select_db($cnx,"fcpo");
                                        $req="select nom,prenom,tel,raison_social,id_client from client";
                                        $resu=mysqli_query($cnx,$req);
                                        if ($resu==true)
                                        { 
                                            echo'<table class="table table-bordered data-table data-table-default">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Raison Sociale</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                      while($ligne=mysqli_fetch_row($resu))
                                {
                                        echo' <tr>
                                        <td>'.$ligne[0].'</td>
                                        <td>'.$ligne[1].'</td>
                                        <td>'.$ligne[2].'</td>
                                        <td>'.$ligne[3].'</td>
                                        <td>

                                                 <div class="adomx-checkbox-radio-group ">
                             <label class="adomx-radio success"> <input type="radio" name="idc" id="idc" value="'.$ligne[4].'"> <i class="icon">
                                      
                                                </div></td>';}

                                   echo' </tr></tfoot></table> ';
                               }
                               else
                               {
                                echo'erreur dans la requête !!';
                               }
                               mysqli_close($cnx);
                                ?>

                    
                
            </div></div></div></div>
                
                                            </div>
                                        
                                        
                                    </div>
                                    <div id="step-2">
                                        
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Type de projet</h4>
                                                </div>
                                                <div class="col-sm-6 col-12 mb-20">
                                                <div class="adomx-checkbox-radio-group ">
                             <label class="adomx-radio warning"><input type="radio" name="typeprojet" id="typeprojet" value="mobile"> <i class="icon"></i> Application mobile</label> 
                            <label class="adomx-radio info"><input type="radio" name="typeprojet" id="typeprojet" value="site"> <i class="icon"></i> Site web</label> 
                             </div>
                              </div>
                                 
                                            </div>
                                        
                                    </div>
                                    <div id="step-3">
                                        
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Infos du projet</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20">Nom du projet:<input type="text" placeholder="Nom du projet" class="form-control"id="nomp" name="nomp"></div>
                                                <div class="col-lg-6 col-12 mb-20">Date de réception<input type="Date" placeholder="Date de réception" class="form-control"id="dr" name="dr"></div>
                                                <div class="col-lg-6 col-12 mb-20">Date de livraison<input type="Date" placeholder="Date de livraison" class="form-control"id="dl" name="dl"></div>
                                                <div class="col-lg-6 col-12 mb-20">Date début<input type="Date" placeholder="Date de livraison" class="form-control"id="dd" name="dd"></div>
                                                <div class="col-lg-6 col-12 mb-20">Site de réferencement<input type="text" placeholder="Site de réferencement" class="form-control"id="site" name="site"></div>
                                                <div class="col-12 mb-20">Les mots clés<textarea class="form-control" placeholder="mots clés"id="mots" name="mots"></textarea></div>
                                                 <div class="col-12 mb-20">Régions<textarea class="form-control" placeholder="Régions"id="region" name="region"></textarea></div>
                                                
                                            </div>
                                        
                                    </div>
                                    <div id="step-4">
                                        
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>Informations techniques</h4>
                                                </div>
                                               
                                                                    <!--Single Select-->
                                            <div class="col-lg-4 col-12 mb-30">
                                  <?php   
                                    $cnx2=mysqli_connect("localhost","root","");
                                        mysqli_select_db($cnx2,"fcpo");
                                  $req2="select id_user,prenom,nom from utilisateur where id_tuser=(select id_tuser from type_user where type_usr like 'dev%')";
                                        $resu2=mysqli_query($cnx2,$req2);
                                        if ($resu2==true)
                                        { 
                                            ?>       Développeur :
                                                                 <select class="form-control select2" name="utili[]" multiple size="5"  >
                                            <?php
                                            while($ligne2=mysqli_fetch_row($resu2)){
                              echo ' <option value="'.$ligne2[0].'" >'.$ligne2[1].' '.$ligne2[2].'</option>';}}
                               else{ echo 'probleme d'.'execution de la requete ';}
                                      ?>
                                                                       </select>
                                                                    </div>
                                                                    <!--Single Select-->
                                                          <div class="col-lg-4 col-12 mb-30">
                                                            <?php
                                                           $req3=" select id_user,prenom,nom from utilisateur where id_tuser=(select id_tuser from type_user where type_usr like 'red%')";
                                        $resu3=mysqli_query($cnx2,$req3);
                                        if ($resu3==true){
                                                                 ?>
                                                                 Rédacteur de contenu :
                                                                        <select name="red" class="form-control select2">
                                                                            <?php
                                                        while($ligne3=mysqli_fetch_row($resu3)){
                                                           echo ' <option value="'.$ligne3[0].'" >'.$ligne3[1].' '.$ligne3[2].'</option>';}}
                               else{ echo 'probleme d'.'execution de la requete ';}
                                      mysqli_close($cnx2);               
                                                                              ?>
                                                                        </select>
                                                                    </div>
                                                
                                                <div class="col-12 mb-20">Technologies :<textarea class="form-control" placeholder="Technologies" id="tech" name="tech"></textarea></div>
                                                <div class="col-12 mb-20">Commentaires :<textarea class="form-control" placeholder="commentaire" id="comm" name="comm"></textarea></div>
                                                
                                            </div>
                                        
                                    </div>
                                     <div id="step-5">
                                       
                                            <div class="row mbn-20">
                                                <div class="col-12 mb-20">
                                                    <h4>FTP de domaine</h4>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20">Domaine:<input type="text" placeholder="Domaine" class="form-control"id="domaine" name="domaine"></div>
                                                <div class="col-12 mb-20">
                                                    <h5>FTP </h5>
                                                </div>
                                                <div class="col-lg-6 col-12 mb-20">FTP Host:<input type="text" placeholder="FTP Host" class="form-control"name="ftph" id="ftph"></div>
                                                <div class="col-lg-6 col-12 mb-20">FTP Name:<input type="text" placeholder="FTP name" class="form-control"name="ftpn" id="ftpn"></div>
                                                <div class="col-lg-6 col-12 mb-20">FTP Password:<input type="text" placeholder="FTP Password" class="form-control"name="ftpp" id="ftpp"></div>
                                                <div class="col-12 mb-20">
                                                    <h5>Base de données</h5>
                                                </div>
                                                 <div class="col-lg-6 col-12 mb-20">BD Server:<input type="text" placeholder="BD Server" class="form-control"name="bds" id="bds"></div>
                                                <div class="col-lg-6 col-12 mb-20">BD Name:<input type="text" placeholder="BD name" class="form-control"name="bdn" id="bdn"></div>
                                                <div class="col-lg-6 col-12 mb-20">BD UserName:<input type="text" placeholder="BD UserName" class="form-control"name="bdu" id="bdu"></div>
                                                <div class="col-lg-6 col-12 mb-20">BD Password:<input type="text" placeholder="BD Password" class="form-control"name="bdp" id="bdp"></div>
                                                <div class="col-12 mb-20">
                                                <div class="col-lg-6 col-12 mb-20"><input type="submit" class="button button-primary" value="Submit"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Form Wizard Horizontal End-->

            </div>
               <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; tous droits réservés </a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>


<!--============================================ -->

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

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

       <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/smartWizard/jquery.smartWizard.min.js"></script>
    <script src="assets/js/plugins/smartWizard/smartWizard.active.js"></script>
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>

    <!-- --- ----select----->
      <script src="assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/js/plugins/bootstrap-select/bootstrapSelect.active.js"></script>
     <script src="assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/plugins/select2/select2.active.js"></script>

</body>

</html>