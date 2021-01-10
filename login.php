<!doctype html>
<?php
include("conx.php");

if(isset($_POST['login'] )){
  $login=addslashes($_POST['login']);
  $motdepasse=addslashes($_POST['pass']);

$query = "SELECT * FROM utilisateur where login like '".$login."' and MDP like '".$motdepasse."'";
$prep = $conn->prepare($query);
$prep->execute();     
if($prep->rowCount()==0){
    $_SESSION['erreur'] =1;  
}
else{
	session_start();
	$ligne=$prep->fetch();
  $_SESSION['login'] = $login;
   $_SESSION['idtuser']=$ligne['id_tuser'];
       $_SESSION['iduser']=$ligne['id_user'];

    if($_SESSION['idtuser']==1){
        header("Location:index.php");
    }
    else{
        header("Location:index_dev.php");
    }
    
}
}
else{
    print ("hey");
}
    ?>
<html class="no-js" lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FCPO - Gestion de projets login</title>
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

        <!-- Content Body Start -->
        <div class="content-body m-0 p-0">

            <div class="login-register-wrap">
                <div class="row">

                    <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                        <div class="login-register-form-wrap">

                            <div class="content">
                                <h1>Authentification</h1>
                           
                            </div>

                            <div class="login-register-form">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-20">
    <input class="form-control" type="text" placeholder="Login" name="login"></div>
                                        <div class="col-12 mb-20">
    <input class="form-control" type="password" placeholder="Password" name="pass"></div>
                                        
                                        <div class="col-12">
                                        </div>
                                        <div class="col-12 mt-10">
                                            <input type="submit" class="button button-primary button-outline" value="Connexion"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                        <div class="content">
                           <b> <h1 style="color: rgb(0,0,0);">Authentification </h1> </b>
                            
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- Content Body End -->

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

</body>

</html>