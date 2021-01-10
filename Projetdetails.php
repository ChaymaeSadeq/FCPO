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
                        <h3 class="title">Projets<span>/nom projet select</span></h3>
                    </div>
                </div><!-- Page Heading End -->
                
                
            </div><!-- Page Headings End -->

            <div class="row mbn-30">

                <!-- Top Report Start -->
               <div class="col-12 mb-30">
                    <div class="box">
                        
                        <div class="box-body">
                            <ul class="nav nav-pills mb-15 ">
     <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#infos">Infos dossier</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#clientM">Modifier fiche client</a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ControleQ">Contrôle qualité</a></li>
    <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#Ticket">Tickets</a></li>

</ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="infos">
 <?php 
                            
        include("conx.php");
                       include("req.php");
                 
        ?>
                                    <div class="col-xlg-3 col-md-12 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title"><?php echo $ligne['titre'] ; ?></h4>
                        </div>
                        <div class="box-body">
                                    <div class="row">
                                        <div class="col-xlg-3 col-md-6 col-12 mb-30">
                                        <div class="">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">Infos dossier</h4>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul>
                                <li> <span>Raison social du client </span> <span><?php echo $ligneC['raison_social'] ; ?></span> </li>
                                <li> <span>Numéro du dossier</span> <span><?php echo $ligne['num_projet'] ; ?></span> </li>
                                <li> <span>Numéro du suivi</span> <span>khas nzido f bd -_- </span> </li>
                                <li> <span>site de référencement</span> <span><?php echo $ligne['site_ref'] ; ?></span> </li>
                                <hr>
                                <li> <span>Date de réception </span> <span><?php echo $ligne['date_reception'] ; ?></span> </li>
                                <li> <span>Date de début</span> <span><?php echo $ligne['date_debut'] ; ?></span> </li>
                                <li> <span>Date de livraison</span> <span><?php echo $ligne['date_livraison'] ; ?></span> </li>
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>
                                            <br>
                                          <div class="">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">FTP des domaines</h4>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul>
                                <li> <span>Domaine </span> <span><?php echo $ligne['domaine'] ; ?></span> </li>
                                <div><span class="badge badge-success">FTP</span></div>
                                <li> <span>HOST</span> <span><?php echo $ligne['ftp_host'] ; ?></span> </li>
                                <li> <span>USERNAME</span> <span><?php echo $ligne['ftp_name'] ; ?></span> </li>
                                <li> <span>PASSWORD</span> <span><?php echo $ligne['ftp_password'] ; ?></span> </li>
                            <div><span class="badge badge-success">Base de données</span></div>

                                <li> <span>DB NAME </span> <span><?php echo $ligne['bd_name'] ; ?></span> </li>
                                <li> <span>DB USERNAME</span> <span><?php echo $ligne['bd_username'] ; ?></span> </li>
                                <li> <span>DB PASSWORD</span> <span><?php echo $ligne['bd_password'] ; ?></span> </li>
                                <li> <span>DB SERVER</span> <span><?php echo $ligne['bd_server'] ; ?></span> </li>
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>  
                                        </div>
                                        <div class="col-xlg-3 col-md-6 col-12 mb-30"> 
                                        <div class="">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">Infos techniques</h4>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul>
                                <li> <span>Les Développeurs</span> <span>
                  <?php  
                                 /*   $numP=$ligne['num_projet'];
                                    
$query1 = "select * from projet,user_projet,utilisateur where 
projet.Num_projet=user_projet.Num_projet and utilisateur.id_user=user_projet.id_user
and projet.num_projet=$numP and utilisateur.id_tuser=2" ;
$prep1= $conn->prepare($query1);
$prep1->execute();*/
while($ligneD = $prepD->fetch()) { ?>
                            <table class="table-borderless">
                               
                                    <tr>
                                        <td> <?php echo $ligneD['nom'] ; ?>,
                                        <?php echo $ligneD['prenom'] ; ?></td>
                                        
                                    </tr>
                                    
                            </table>
                       <?php } /*$query1 = "select * from projet,user_projet,utilisateur where 
projet.Num_projet=user_projet.Num_projet and utilisateur.id_user=user_projet.id_user
and projet.num_projet=$numP and utilisateur.id_tuser=3" ;
$prep1= $conn->prepare($query1);
$prep1->execute(); $ligne1 = $prep1->fetch()*/?>
                </span> </li>
                                <li> <span>Rédacteur</span> <span><?php echo $ligneR['nom'] ; ?>,
                                        <?php echo $ligneR['prenom'] ; ?></span> </li>
                                <li> <span>Technologie</span> <span><?php echo $ligneR['technologie'] ; ?></span> </li>
                                
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>
                                        <br>
                                        <div class=" ">
                                            
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">Infos Commerciales</h4>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul>
                                <li> <span>Nom et prénom </span> <span><?php echo $ligneC['Nom'] ; ?>,<?php echo $ligneC['Prenom'] ; ?></span> </li>
                                <li> <span>Téléphone</span> <span><?php echo $ligneC['tel'] ; ?></span> </li>
                                <li> <span>Email</span> <span><?php echo $ligneC['mail'] ; ?></span> </li>
                                
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>
                                        <br>
                                            
                                          <div class="">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">Elément(s) de contenu</h4>
                        </div>
                        <div class="box-body">
                           
                        
                            <ul class="nav nav-pills mb-15">
                                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#lg">Logo</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#ContText">Contenu Texte</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#Photo">Photos</a></li>
                            </ul>
                            <?php                
?>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="lg">
    <form enctype="multipart/form-data" action="img.php?idP=<?php echo $a ;?>" method="post">
         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
         <input type="file" name="log" size=50 />
        <button type="submit" name="envI" class="btn btn-primary col-2"  ><i class='fa fa-plus-square'></i></button>
      </form>
                                    <div>
                                    <?php
                            while($ligneL = $prepL->fetch())  
                                
         {
               echo "<a href=\"apercu.php?id=" . $ligneL['id_logo']. "&amp;idP=".$a."\">" .$ligneL['name_logo'] . "</a><br />";
         }
      ?></div>
                                </div>
                                <div class="tab-pane fade" id="ContText">
                                   <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul class="col-xlg-3 col-md-12 col-12 ">
                                <li class="border rounded text-justify px-3"> 
                                <?php echo $ligne['contenu_text'] ?></li>
                                
                            <li >    
                                <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#Contenu">
  Ajouter/ Modifier 

                                </button></li>
                            </ul>
                                                 </div>
                        </div>
                                    

                            <div class="modal fade" id="Contenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter/Modif Contenu text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                  <form action="req.php?idP=<?php echo $a; ?>" method="post">

      <div class="modal-body">
        <textarea class="form-control" placeholder="Contenu Text" name="Cont" id="Comm"><?php echo $ligne['contenu_text']; ?> </textarea>
               
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="AddCont" class="btn btn-primary">Ok</button>
      </div>
        </form>
    </div>
  </div>
</div>
                                    
                                </div>
                                <div class="tab-pane fade" id="Photo">
                                <form enctype="multipart/form-data" action="img.php?idP=<?php echo $a ;?>" method="post">
         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
         <input type="file" name="photo" size=50 />
        <button type="submit" name="envI" class="btn btn-primary col-2"  ><i class='fa fa-plus-square'></i></button>
      </form>
                                    <div>
                                    <?php
                            while($lignePh = $prepPh->fetch())  
                                
         {
               echo "<a href=\"apercu.php?img=" . $lignePh['id_img']. "&amp;idP=".$a."\">" .$lignePh['name_photo'] . "</a><br />";
         }
      ?></div>    
                                </div>
                            </div>
                                
                                
                        </div>
                    </div>
                </div>
                                        </div>
                                 <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark  ">
                            <span class="title text-light col-8">Commentaires
                            </span>
                            <?php if(empty($ligne['commentaire'])){ ?>
                            <button type="button" class="btn btn-primary col-4" data-toggle="modal" data-target="#exampleModalCenter">
 Ajouter
                                </button>
                            <?php }else{  ?>
    <button type="button" class="btn btn-primary col-4" data-toggle="modal" data-target="#exampleModalCenter">
 Modif
                                </button>
    
<?php } ?>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter/Modif Commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                  <form action="req.php?idP=<?php echo $a; ?>" method="post">

      <div class="modal-body">
        <textarea class="form-control" placeholder="Textarea" name="Comm" id="Comm"><?php echo $ligne['commentaire']; ?> </textarea>
               
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addComent" class="btn btn-primary">Ok</button>
      </div>
        </form>
    </div>
  </div>
</div>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul class="col-xlg-3 col-md-12 col-12 ">
                                <li class="border rounded text-justify px-3"> 
                                <?php echo $ligne['commentaire'] ?></li>
                                     
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>
                            <div class="col-xlg-3 col-md-6 col-12 mb-30">
                    <div class="box bg-white border rounded">
                        <div class="box-head bg-dark ">
                            <h4 class="title text-light">Rapports de positionnement</h4>
                        </div>
                        <div class="box-body">
                            <div class="order-details-customer-info row mbn-20">
                            <ul class="col-xlg-3 col-md-12 col-12 ">
                                 <li class="border rounded text-justify px-3"> Le rapport de date</li>
                                 <li class="border rounded text-justify px-3">le rapport de date </li>     
                            </ul>
                                                 </div>
                        </div>
                    </div>
                </div>
                            </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                  <div class="tab-pane fade " id="clientM">
                                     <div class="col-lg-9 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Affiche Client</h4>
                        </div>
                        <div class="box-body">
                         <div class="col-30 mb-30">
                    <div class="order-details-customer-info row mbn-20">

                        <!--Billing Info Start-->
                        <div class="col-lg-12 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Info Cilent</h4>
                            <ul>
                                <li> <span>Name</span><span><?php echo $ligneC['Nom'] ; ?></span> </li>
                                <li> <span>Prénom</span> <span><?php echo $ligneC['Prenom'] ; ?></span> </li>
                                <li> <span>Téléphone</span> <span> <?php echo $ligneC['tel'] ; ?> </span> </li>
                                <li> <span>E-Mail</span> <span><?php echo $ligneC['mail'] ; ?></span> </li>
                                <li> <span>Adresse</span> <span><?php echo $ligneC['adresse'] ; ?></span> </li>
                                <li> <span>Code Postal</span> <span><?php echo $ligneC['code_postal'] ; ?></span> </li>
                                <li> <span>Civilité</span> <span><?php echo $ligneC['civilite'] ; ?></span> </li>
                                
                                <li> <span>Numéro de Compte Bancaire</span> <span><?php echo $ligneC['num_compte_bancaire'] ; ?></span> </li>
                                <li> <span>I.C.E</span> <span><?php echo $ligneC['ice'] ; ?></span> </li>
                                <li> <span>T.V.A</span> <span><?php echo $ligneC['tva'] ; ?></span> </li>
                                <li> <span>R.S</span> <span><?php echo $ligneC['raison_social'] ; ?></span> </li>
                                <li> <span>Secteur d'Activité</span> <span><?php echo $ligneC['secteur_activite'] ; ?></span> </li>
                                <li> <span>Site Actuel</span> <span><?php echo $ligneC['site_actuel'] ; ?></span> </li>
                            </ul>
                        </div>
                        <!--Billing Info End-->
                        
                       </div>
                    </div>
                <!--Order Details Customer Information End-->
                       </div>
                 </div>
                </div>
                                </div>
                                
                                
                                
<div class="tab-pane fade" id="ControleQ">
                                    <div class="col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                            <form   action="test.php" method="get"> 
                                <table class="table table-selectable table-vertical-middle table-striped">
                                    

                                    <!-- Table Head Start -->
                                    <thead class="thead-dark">
                                        <tr>
                                            
                                            <th><span>Question</span></th>
                                            <th><label class="adomx-checkbox"><input type="checkbox"> <span>Technique</span></label></th>
                                            <th><span>Contôle Qualité</span></th>
                                        </tr>
                                    </thead><!-- Table Head End -->

                                    <!-- Table Body Start -->
                                    <tbody>
                                            
                                        
                 <?php
            
                                $conn1=mysqli_connect("localhost","root","");
                                mysqli_select_db($conn1,"fcpo");
                                $req1="SELECT * FROM qualite q,projet p where q.num_projet=p.num_projet and p.num_projet=".$_GET['idP']." ";
                                $resu=mysqli_query($conn1,$req1);
if($resu){
                                $ligne1=mysqli_fetch_row($resu);            
                                $rowcount=mysqli_num_rows($resu);
        if($rowcount==0)
        {      
                                   $req2="insert into qualite (titre_bClair,espace_blanc,adapter_mobil,menu_fonc ,menu_resp,taille_fond_ecriture,montion_legale,plan_site,form_contact,champ_form,photo_defilante,ponctuati,carte,num_projet) values(0,0,0,0,0,0,0,0,0,0,0,0,0,".$_GET['idP'].")";     
                                    $resu2=mysqli_query($conn1,$req2);
                                    if($resu2){  
                                        
                    echo '                  <tr>
                                            
                                            <td><span>Titre bien clairs</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck1" id="ck1" > <i class="icon"></i></label></td>
                                            <td><span id="vv1" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td><span>Pas d\'espaces blancs entre les sections</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck2" id="ck2"  > <i class="icon"></i></label></td>
                                            
                                            <td><span  id="vv2" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr> 
                                            <td><span>Menu bien adapté au mobile</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck3" id="ck3"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv3" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td><span>Menu Fonctionnel</span></td>
                                           <td><label class="adomx-checkbox"><input type="checkbox" name="ck4" id="ck4"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv4" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>Menu respecte le breif</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck5" id="ck5"  > <i class="icon"></i></label></td>         
                                            <td><span  id="vv5" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td><span>Taille et le fond de l\'écriture est unifiée(Titres,sous titrs,paragraphes.....)</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck6" id="ck6"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv6" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>Mentions légales disponibles et bien redigées</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck7" id="ck7"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv7" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>le plan du site est présent</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck8" id="ck8"  > <i class="icon"></i></label></td>   
                                            <td><span id="vv8"  class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>le formulaire de contace est fonctionnel(Envoi de mail)</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck9" id="ck9"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv9" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>Les champs du formulaire de contacts sont validés(Champs obligatoires)</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck10" id="ck10"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv10" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>Photos défilantes(SlideShow)est fonctionnel</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck11" id="ck11"  > <i class="icon"></i></label></td>
                                            <td><span  id="vv11"  class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>Respect de la ponctuation</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck12" id="ck12"  > <i class="icon"></i></label></td>
                                            <td><span id="vv12"  class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr><tr>
                                            
                                            <td><span>la carte s\'affiche en entier en responsive</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck13" id="ck13"  > <i class="icon"></i></label></td>
                                            <td><span id="vv13" class="badge badge-danger">non évaluée</span></td>
                                            
                                        </tr>
                             ';
                    }
                    else
                    { echo 'errr req2';}
            }
            else
            {
                             for($i=1;$i<=13;$i++)
                            {
                                    if(($ligne1[$i]) == 1) 
                                    {
                                        $v1="badge badge-success";
                                        $v2="évaluée";
                                    }
                                    else
                                    {
                                        $v1="badge badge-danger";
                                        $v2="non évaluée";
                                    }
                                
                               if($i==1) echo '
                                        <tr>
                                            
                                            <td><span>Titre bien clairs</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck1" id="ck1" > <i class="icon"></i></label></td>
                                            <td><span id="vv1" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                
                                ';
                                if($i==2) echo '
                                        <tr>
                                        <td><span>Pas d\'espaces blancs entre les sections</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck2" id="ck2"  > <i class="icon"></i></label></td>    
                                            <td><span id="vv2" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                if($i==3) echo '
                                        <tr>
                                        <td><span>Menu bien adapté au mobile</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck3" id="ck3"  > <i class="icon"></i></label></td>    
                                            <td><span id="vv3" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                 if($i==4) echo '
                                        <tr>
                                        <td><span>Menu Fonctionnel</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck4" id="ck4"  > <i class="icon"></i></label></td>    
                                            <td><span id="vv4" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                if($i==5) echo '
                                        <tr>
                                        <td><span>Menu respecte le breif</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck5" id="ck5"  > <i class="icon"></i></label></td>    
                                        <td><span id="vv5" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                if($i==6) echo '
                                        <tr>
                                        <td><span>Taille et le fond de l\'écriture est unifiée(Titres,sous titrs,paragraphes.....)</span></td>
                                         <td><label class="adomx-checkbox"><input type="checkbox" name="ck6" id="ck6"  > <i class="icon"></i></label></td>   
                                            <td><span id="vv6" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                if($i==7) echo '
                                        <tr>
                                        <td><span>Mentions légales disponibles et bien redigées</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck7" id="ck7"  > <i class="icon"></i></label></td>
                                        <td><span id="vv7" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                if($i==8) echo '
                                        <tr>
                                        <td><span>le plan du site est présent</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck8" id="ck8"  > <i class="icon"></i></label></td>
                                        <td><span id="vv8" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                if($i==9) echo '
                                        <tr>
                                    <td><span>le formulaire de contace est fonctionnel(Envoi de mail)</span></td>
                                    <td><label class="adomx-checkbox"><input type="checkbox" name="ck9" id="ck9"  > <i class="icon"></i></label></td>
                                        <td><span id="vv9" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                if($i==10) echo '
                                        <tr>
                                        <td><span>Les champs du formulaire de contacts sont validés(Champs obligatoires)</span></td>
                                        <td><label class="adomx-checkbox"><input type="checkbox" name="ck10" id="ck10"  > <i class="icon"></i></label></td>
                                        <td><span id="vv10" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                if($i==11) echo '
                                        <tr>
                                       <td><span>Photos défilantes(SlideShow)est fonctionnel</span></td>
                                       <td><label class="adomx-checkbox"><input type="checkbox" name="ck11" id="ck11"  > <i class="icon"></i></label></td>
                                        <td><span id="vv11" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                if($i==12) echo '
                                        <tr>
                                            <td><span>Respect de la ponctuation</span></td>
                                            <td><label class="adomx-checkbox"><input type="checkbox" name="ck12" id="ck12"  > <i class="icon"></i></label></td>
                                            <td><span id="vv12" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                if($i==13) echo '
                                        <tr>
                                           <td><span>la carte s\'affiche en entier en responsive</span></td>
                                           <td><label class="adomx-checkbox"><input type="checkbox" name="ck13" id="ck13"  > <i class="icon"></i></label></td>
                                            <td><span id="vv13" class="'.$v1.'">'.$v2.'</span></td>
                                            
                                        </tr>
                                        ';
                                
                                
                                
                            }
            }
}
?>
                                        
                                        
                                      
                                    </tbody><!-- Table Body End -->
                                
                                </table>
                               <?php echo  ' <input name="idPr" type="hidden" value="'. $_GET['idP'].'">  ';?> 
                                   <div style="float:right">
                                       <input type='submit'  value="Valider Modification(s)" class='button button-primary'>
                                    </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                                </div>
                                   
                           

						 <div class="tab-pane fade" id="Ticket">
                                    <!--Accordion Color (Cards) Start-->
                <div class="col-lg-8 col-12 mb-30">
                    <div class="box">
                        <div class="box-head">
                            <h4 class="title">Tickets de ce dossier</h4>
                        </div>
                        <div>
                        <button type="button" class="btn btn-primary col-3" data-toggle="modal" data-target="#ajoutTicket">
 Ajouter
                                </button>
                            </div>
                        <div class="box-body">
                             
                            <div class="modal fade" id="ajoutTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Ticket</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                           <form action="test1.php" method="post">
                                
                               <div class="modal-body">
                               <input type="text" name="titre" id="formLayoutUsername4" class="form-control" placeholder="Titre" >
                                   <?php
echo'
                                   <input type="hidden" name="idPr" value="'.$_GET['idP'].'">
                                   

                                      '; ?>
                                   <textarea class="form-control" name="desc" placeholder="Contenu du Ticket" name="Comm" id="Comm"></textarea>
               
                    
                                </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-primary">Envoi</button>
                               </div>
                               
                         </form>
    </div>
  </div>
</div>
                            
    <!--Accordion Start-->
                            <div class="accordion accordion-icon primary" id="accordionExampleFour">
 <?php
                             
$conn1=mysqli_connect("localhost","root","");
mysqli_select_db($conn1,"fcpo");
$req="select id_ticket,titre,date_envoie,description from ticket where num_projet=".$_GET['idP']." order by date_envoie desc ";
$resu=mysqli_query($conn1,$req);
if($resu){
    
     while($ligne1=mysqli_fetch_object($resu))
    {
    
    echo'
                                <!--Card Start-->
                                <div class="card">

                                    <!--Card Header Start-->
                                    <div class="card-header">
                                        <h2><button data-toggle="collapse" data-target="#collapse'.$ligne1->id_ticket.'"> '.ucwords($ligne1->titre).' <span style="float:right; margin-right:9px;">'.substr($ligne1->date_envoie, 0, 16).'</span></button></h2>
                                    </div>
                                    <!--Card Header End-->

                                    <!--Collapse Start-->
                                    <div id="collapse'.$ligne1->id_ticket.'" class="collapse show" data-parent="#accordionExampleFour">
                                        <div class="card-body">
                                            <p>'.$ligne1->description.'</p>
                                        </div>
                                    </div>
                                    <!--Collapse End-->

                                </div>
                                <!--Card End-->
                            
                            ';
     }

}
else{
    echo '<div class="alert alert-solid-danger" role="alert"><a class="alert-link" href="#">Erreur :</a>  dans la base de donnée
                            </div>';
}
mysqli_close($conn1);
?>  
                            </div>
                            <!--Accordion End-->

                        </div>
                    </div>
                </div>
                <!--Accordion Color (Cards) End-->
                                </div>
                            

                        </div>
                    </div>
                </div>
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
    <script src="assets/js/plugins/datatables/french.lang"></script>

    <!--Main JS-->
    <script src="assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->
    <script src="assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="assets/js/plugins/datatables/datatables.active.js"></script>
    <!--Moment-->
    <script src="assets/js/plugins/moment/moment.min.js"></script>


</body>

</html>