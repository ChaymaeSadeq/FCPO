
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
<?php include("head.php"); ?>

        
        

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Author Profile</h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row mbn-50">

                <!--Author Top Start-->
                <div class="col-12 mb-50">
                    <div class="author-top">
                        <div class="inner">
                            <div class="author-profile">
                                <div class="image">
                                    <img src="assets/images/avatar/profile.jpg" class="d-none" alt="">
                                    <h2>MH</h2>
                                    <button class="edit"><i class="zmdi zmdi-cloud-upload"></i>Change Image</button>
                                </div>
                                <div class="info">
                                    <h5>Madison Howard</h5>
                                    <span>UI UX Designer</span>
                                    <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Author Top End-->

                <!--Timeline / Activities Start-->
                <div class="col-xlg-8 col-12 mb-50">
                    <div class="box">

                       

                        <div class="box-body">

                            <div class="timeline-wrap row mbn-50">

                                


                            </div>

                        </div>

                    </div>
                </div>
                <!--Timeline / Activities End-->

                <!--Right Sidebar Start-->
                <div class="col-xlg-4 col-12 mb-50">
                    <div class="row mbn-30">

                        <!--Author Information Start-->
                        <div class="col-xlg-12 col-lg-6 col-12 mb-30">
                            <div class="box">
                                <div class="box-head">
                                    <h3 class="title">Author Information</h3>
                                </div>
                                <?php


include("conx.php");
  $queryUtil = "select * from utilisateur where id_user=".$_SESSION['iduser'] ;
$prepUtil= $conn->prepare($queryUtil);
$prepUtil->execute();
                                $ligne = $prepUtil->fetch();
    ?>
                                <div class="box-body">
                                    <div class="form">
                                        <form action="#">
                                            <div class="row row-10 mbn-20">
                                                <div class="col-sm-6 col-12 mb-20">
<input type="text" class="form-control" value="<?php echo $ligne['nom'] ; ?>" name="first"></div>
<div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control" value="<?php echo $ligne['prenom'] ; ?>" name="second"></div>
<div class="col-sm-6 col-12 mb-20"><input type="text" class="form-control input-date-single" value="<?php echo $ligne['login'] ; ?>" name="dat"></div>
<div class="col-sm-6 col-12 mb-20">
    <input type="text" class="form-control" value="<?php echo $ligne['tel'] ; ?>" data-mask="(999) 999-9999" name="phone"></div>
    <div class="col-12 mb-20">
<input type="email" class="form-control" value="<?php echo $ligne['mail'] ; ?>" name="mail"></div>
<div class="col-12 mb-20"><input type="text" class="form-control" 
value="<?php echo $ligne['adresse'] ; ?>" name="domaine"></div>
                                                
                                                <div class="col-12 mt-10 mb-20">
                                                    <input type="submit" class="button button-primary button-outline" value="Save Changes">
                                                    <input type="submit" class="button button-danger button-outline" value="Delete Changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Author Information End-->



                    </div>
                </div>
                <!--Right Sidebar End-->

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
    <script src="assets/js/plugins/moment/moment.min.js"></script>

</body>

</html>