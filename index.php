<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FCPO- Dashboard/Admin</title>
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
                        <h3>Dashboard <span>/ Administrateur</span></h3>
                    </div>
                </div><!-- Page Heading End -->

                <!-- Page Button Group Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-date-range">
                        <input type="text" class="form-control input-date-predefined">
                    </div>
                </div><!-- Page Button Group End -->

            </div><!-- Page Headings End -->

            <!-- les projets -->
            <div class="row">
                <?php
                    $conn1=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn1,"fcpo");

                    $req1="SELECT p.num_projet,p.titre,p.date_livraison,c.nom,p.id_etat FROM projet p,client c where p.id_client=c.id_client  ";

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
                            echo " <div class='col-xlg-3 col-md-6 col-12 mb-30'>
                    <div class='top-report'>
                    <div class='head'>
                            <h4>".$ligne1->titre. " </h4>
                            <a href='Projetdetails-dev.php' class='view' ><i class='zmdi zmdi-eye'></i></a>
                        </div>
                        <div class='content'>
                            <h3>". $ligne1->nom ."</h3>
                            <h5>".$ligne1->date_livraison."</h5>
                        </div>
                         <div class='footer'>
                            <div class='progess'>
                                <div class='progess-bar' style='background: ".$prs.";width: 100%;'></div>
                            </div>
                        </div>
                        </div>
                </div>
                
                    ";
                            //$_SESSION['id']=$id;
                        } 
                    }
                    else
                    {
                         echo "<script> alert('Il y a pas des Projets a afficher');</script>"; 
                    }
                    mysqli_close($conn1);
                        
               ?>
               
                        </div><!-- Top Report Wrap End -->

            <div class="row mbn-30">

                <!-- Revenue Statistics Chart Start -->
                <div class="col-md-8 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Projets par développeur</h4>
                        </div>
                        <div class="box-body">
                        
                            <div class="chartjs-revenue-statistics-chart">
                                <canvas id="example-chartjs-barV"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- Revenue Statistics Chart End -->

                <!-- Market Trends Chart Start -->
                <div class="col-md-4 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">projets par etat</h4>
                        </div>
                        <div class="box-body">
                            <div class="chartjs-market-trends-chart">
                                <canvas id="chartjs-market-trends-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                          

            </div>

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2019 &copy; tous droits réservés </a></p>
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

    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/plugins/vmap/vmap.active.js"></script>

</body>

</html>