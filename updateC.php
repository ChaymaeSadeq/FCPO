<?php
	$idc=$_GET['idC'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$tel=$_GET['tel'];
	$email=$_GET['email'];
	$adresse=$_GET['adresse'];
	$cp=$_GET['cp'];
	$civilite=$_GET['civilite'];
	$ncp=$_GET['ncp'];
	$ice=$_GET['ice'];
	$tva=$_GET['tva'];
	$rs=$_GET['rs'];
	$secteur=$_GET['secteur_activite'];
	$site=$_GET['site_actuel'];


	 $cnx=mysqli_connect("localhost","root","");
       mysqli_select_db($cnx,"fcpo");
       $req="update client set nom='".$nom."', prenom='".$prenom."', tel='".$tel."', mail='".$email."', adresse='".$adresse."', code_postal='".$cp."', civilite='".$civilite."', num_compte_bancaire='".$ncp."', ice='".$ice."', tva='".$tva."', raison_social='".$rs."', secteur_activite ='".$secteur."', site_actuel='".$site."' where id_client=".$idc."";

        $resu=mysqli_query($cnx,$req);
          if ($resu) {
          	echo "client modifié avec success";
          	header ("Refresh: 5;url=modif-client.php?idC=".$idc."");
          }
          mysqli_close($cnx);
         ?>