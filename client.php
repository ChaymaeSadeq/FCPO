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


        <!-- Header Section Start -->
       
        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title">Clients <span>/ Clients</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3 class="title"><a href="ajout-client.html">+<span>Ajout Client</span> </a></h3>
                    </div>
                </div>
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!-- Top Report Start -->
               <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Liste des Clients</h3>
                        </div>
                        <div class="box-body">
                                        <?php
                                        $cnx=mysqli_connect("localhost","root","");
                                        mysqli_select_db($cnx,"fcpo");
                                        $req="select nom,prenom,tel,raison_social,id_client from client";
                                        $resu=mysqli_query($cnx,$req);
                                        if ($resu==true)
                                        {
                                            echo" <table class="."table table-bordered data-table data-table-default>
                                        
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Téléphone</th>
                                        <th>Raison Sociale</th>
                                        <th> </th>
                                    </tr> </thead><tbody>";
                                while($ligne=mysqli_fetch_row($resu))
                                {
                                    echo'  <tr>
                                        <td>'.$ligne[0].'</td>
                                        <td>'.$ligne[1].'</td>
                                        <td>'.$ligne[2].'</td>
                                        <td>'.$ligne[3].'</td>
                                        <td><div class="table-action-buttons">
                                                    <a class="view button button-box button-xs button-primary" href="affiche_client.php?idC='.$ligne[4].'"><i class="zmdi zmdi-more"></i></a>
                                                    <a class="edit button button-box button-xs button-info" href="modif-client.php?idC='.$ligne[4].'"><i class="zmdi zmdi-edit"></i></a>
                                                </div></td>
                                    </tr>
                                    <tr>';
                                }
                                    echo'</tfoot></table></div></div> </div>';
                                }
            else{

                    echo'erreur dans la requête !!';
                }
                    mysqli_close($cnx);
                                ?>
                               
                                                <!--Default Data Table End-->

            </div>

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

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>
    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>


</body>

</html>