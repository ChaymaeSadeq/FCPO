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
                        <h3 class="title">Développeurs <span>/ Modifier Données Développeur</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

               <!--Form With Advance Form Elements Start-->
                <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Modifier Données Développeur</h4>
                        </div>
                        <div class="box-body">
                            <form enctype="multipart/form-data" action="modifDev.php?idDev=<?php echo $_GET['idDev']; ?>" method="post">
                                <div class="row mbn-20">
    <?php
                                include("conx.php");
                                $req1="SELECT * FROM utilisateur where id_user=".$_GET['idDev']." ";
                                $prep= $conn->prepare($req1);
$resu=$prep->execute();
                    if($resu){
                                $ligne1 = $prep->fetch()  ;
                               echo '  
                               <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Login</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" name="login" value="'.$ligne1['login'] .'">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Mot de Passe</label>
                                        <input type="text" id="formLayoutUsername" class="form-control" name="mdp" value="'.$ligne1['MDP'].'">
                                    </div>
                               
                               
                               
                               <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Nom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" name="nom" value="'.$ligne1['nom'].'">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Prénom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" name="prenom" value="'.$ligne1['prenom'].'">
                                    </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="formLayoutEmail4">E-Mail</label>
                                        <input type="email" id="formLayoutEmail4" class="form-control" name="email" value="'.$ligne1['mail'].'">
                                    </div>
                                   
                                    <div class="col-12 mb-15">
                                        <label for="f">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" value="'.$ligne1['adresse'].'">               </div>
                                    
                                    <div class="col-lg-4 col-12 mb-30">
                                    <select name="slt" class="form-control nice-select">
                                    
                                    ';
                                            if($ligne1['id_tuser']==2) echo"
                                                    <option value='3'>Rédacteur de Contenu</option>
                                                    <option value='2' selected >Développeur</option>";
                                                    if($ligne1['id_tuser']==3) echo"
                                                    <option value='3' selected>Rédacteur de Contenu</option>
                                                    <option value='2' >Développeur</option>";

                                                    echo '
                                    </select>
                                    </div>
                                    
                                    
                                    <div class="col-12 mb-20">Spécialité <textarea class="form-control" name="specialite">'.$ligne1['specialite'].'</textarea></div>
                                    
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Téléphone</h6>
                                    <input type="text" name="tel" class="form-control" value="'.$ligne1['tel'].'"  >
                                    <span class="form-help-text">e.g "(212) 999-99-99-99"</span>
                                </div>
                                
                                <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Photo</h6>
                                   
                    <img src="apercu.php?idD='.$ligne1['id_user'].'" class="table-product-image rounded" alt="mon image" >
                    
                    <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                        <input type="file" name="imgD" size=50 />
                    <input name="valid" type="checkbox" value="ok"> valider the new img

                        
                                </div>
                                
                                
                                
                                    <input type="hidden" name="idDev" value="'.$_GET['idDev'].'">
                                    <div class="col-12 mb-20">
                                        <input type="submit" name="ModD" value="submit" class="button button-primary">
                                        <input type="submit" value="cancle" class="button button-danger">
                                    </div>
                                     </div>
                                        
                                       ';
}
else{
    echo 'errrr requete';
}
                                    ?>

                                </div>
                            </form>
                            
                          
                            
                            
                            
                       </div>
                        
                        
                        
                        
                        
                        
                 </div>
                </div>
                <!--Form With Advance Form Elements End-->
                
                  
                
                     <?php
                    $conn1=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn1,"fcpo");

                    $req1="SELECT * FROM user_projet j,projet p,client c where j.num_projet=p.num_projet and c.id_client=p.id_client and j.id_user=".$_GET['idDev']." ";

                    $resu=mysqli_query($conn1,$req1);
                    if($resu == true)
                    {
                        
                        while($ligne1=mysqli_fetch_object($resu))
                        {
                            $id=$ligne1->num_projet;
                            if(($ligne1->id_etat)==1)
                            {
                                $prs="#7dfb9b";
                            }
                            else
                            {
                               if(($ligne1->id_etat)==2)
                               {
                                    $prs="#ff9666";   
                               }
                               else
                               {
                                   if(($ligne1->id_etat)==3)
                                   {
                                        $prs="#428bfa"; 
                                   }
                                   else
                                   {
                                        if(($ligne1->id_etat)==4)
                                        {
                                            $prs="#fb7da4"; 
                                        }
                                   }
                                }
                            }
                            echo '
                    <div class="col-lg-6 col-sm-4 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>'.$ligne1->titre.'</h4>
                            <a href="Projetdetails-dev.php?idPr='.$ligne1->num_projet.'" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            <h2>'.$ligne1->Nom.'</h2>
                            <h5>'.$ligne1->date_livraison.'</h5>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar"  style="background: '.$prs.';width: 100%;"></div>
                            </div>
                        </div>

                    </div>

                </div><!-- Content Body End -->
                ';
                } 
         }
         else
         {
            echo "<script> alert('Il y a pas des Projets a afficher');</script>"; 
         }
         mysqli_close($conn1);
                        
               ?>
                
                
                                
            

      

    </div>
            <!-- Footer Section Start -->
        
        <?php include('footer.php'); ?>
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