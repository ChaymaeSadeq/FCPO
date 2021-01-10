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
                        <h3 class="title">Développeurs <span>/ Ajout Développeur</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

               <!--Form With Advance Form Elements Start-->
                <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Ajout Développeur</h4>
                        </div>
                        <div class="box-body">
                            <form enctype="multipart/form-data" action="ajoutDev.php" method="post">
                                <div class="row mbn-20">

                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Nom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" name="nom" placeholder="Nom">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label for="formLayoutUsername4">Prénom</label>
                                        <input type="text" id="formLayoutUsername4" class="form-control" name="prenom" placeholder="Prénom">
                                    </div>
                                    
                                     <div class="col-12 mb-20">
                                        <label for="formLayoutEmail4">E-Mail</label>
                                        <input type="email" id="formLayoutEmail4" class="form-control" name="email" placeholder="Email">
                                    </div>
                                   
                                    <div class="col-12 mb-15">
                                        <label for="f">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" placeholder="Adresse">               </div>
                                     <div class="col-lg-4 col-12 mb-30">
                                    <select name="slt" class="form-control nice-select">
                                        <option value="3">Rédacteur de Contenu</option>
                                        <option value="2">Développeur</option>
                                    </select>
                                </div>
                                    <div class="col-12 mb-20">Spécialité <textarea class="form-control" name="specialite" placeholder="Spécialité"> </textarea></div>
                                    
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Téléphone</h6>
                                    <input type="text" name="tel" class="form-control"  >
                                    <span class="form-help-text">e.g "(212) 999-99-99-99"</span>
                                </div>
								 
                                    <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Photo</h6>
                     <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
                        <input type="file" name="imgD" size=50 />
                                    
                                </div>
                                    
                                    <div class="col-12 mb-20">
                                        <input type="submit" name="ajoutD" value="submit" class="button button-primary">
                                        <input type="reset" value="cancle" class="button button-danger">
                                    </div>
                                     </div>
                            </form>
                       </div>
                 </div>
                </div>
                <!--Form With Advance Form Elements End-->
                
                                
            </div><!-- Content Body End -->

          
        

    </div>
    <!-- Footer Section Start -->
         <?php include('footer.php'); ?>
    <!-- Footer Section End -->
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