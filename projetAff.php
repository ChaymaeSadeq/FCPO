<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>project</title>
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
                        <h3 class="title">Projets<span>/Tous les Projets</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!-- Top Report Start -->
               <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Liste des Projets</h3>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-default">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Type de Projet</th>
                                        <th>Date de réception </th>
                                        <th>Date de début </th>
                                        <th>Date de livraison </th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                     <?php
                    $conn1=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn1,"fcpo");
                    $req1="SELECT c.id_client, num_projet,titre,type_projet, date_reception,date_debut, date_livraison  FROM projet p,type_p t,client c where p.id_p=t.id_p and c.id_client=p.id_client";
                    $resu=mysqli_query($conn1,$req1);
                    if($resu == true)
                    {
                        while($ligne1=mysqli_fetch_object($resu))
                        {
                            $idPr=$ligne1->num_projet;
                            $idC=$ligne1->id_client;
                                 echo "<tr>
                                        <td>".$ligne1->titre."</td>
                                        <td>".$ligne1->type_projet."</td>
                                        <td>".$ligne1->date_reception."</td>
                                        <td>".$ligne1->date_debut."</td>
                                        <td>".$ligne1->date_livraison."</td>
                                        <td><div class='table-action-buttons'>
                                                    <a class='view button button-box button-xs button-primary' href='Projetdetails.php?idP=".$idPr."'><i class='zmdi zmdi-more'></i></a>
                                                    
                                                </div></td>
                                    </tr>";
                                        
                        }
                    }
                    mysqli_close($conn1);
            ?>
                                </tbody>
                                    <tfoot>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Default Data Table End-->

            </div>

        </div><!-- Content Body End -->
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

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>
    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>


</body>

</html>