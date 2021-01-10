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
                        <h3 class="title">Développeurs <span>/ Développeurs</span></h3>
                    </div>
                </div><!-- Page Heading End -->
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!-- Top Report Start -->
               <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h3 class="title">Liste des Développeurs</h3>
                        </div>
                        <div class="box-body">

                            <table class="table table-bordered data-table data-table-default">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>E-Mail</th>
                                        <th>Téléphone</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
$conn1=mysqli_connect("localhost","root","");
mysqli_select_db($conn1,"fcpo");
$req1="select * from utilisateur  where id_tuser not in (1)";
$resu1=mysqli_query($conn1,$req1);
if($resu1)
{
     while($ligne1=mysqli_fetch_object($resu1))
    {
         $id=$ligne1->id_user; ?>
        
                          <tr>
                                        <td>
                                            <?php if($ligne1->name_imgD==""){?>
                            <img src="assets/images/product/profil.png" alt="" class="table-product-image rounded">
                                            <?php }else {?>
                            <img src="apercu.php?idD=<?php echo $ligne1->id_user;?>" class="table-product-image rounded" alt="mon image" >
                              <?php } ?> </td>
                                        <td><?php echo $ligne1->nom ;?></td>
                                        <td><?php echo $ligne1->prenom ;?></td>
                                        <td> <?php echo $ligne1->mail ;?></td>
                                        <td><?php echo $ligne1->tel ;?></td>
                                        <td><div class="table-action-buttons">
                     <a class="view button button-box button-xs button-primary" href="modif-dev.php?idDev=<?php echo $id;?>"><i class="zmdi zmdi-more"></i></a>
                                                </div></td>
                                    </tr>
                                   
   <?php   }
}
else{
    echo 'errrr requete';
}
mysqli_close($conn1);
?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!--Default Data Table End-->

            </div>

        </div><!-- Content Body End -->
        <!-- Content Body End -->

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
    <script src="assets/js/plugins/clipboard/clipboard.min.js"></script>
    <script src="assets/js/plugins/clipboard/clipboard.active.js"></script>
    
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>

</body>

</html>