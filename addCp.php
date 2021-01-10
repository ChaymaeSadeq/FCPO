<?php
	
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

		if(isset($rs)) {
			$type=2;
		}
		else{
			$type=1;
		}
	 $cnx=mysqli_connect("localhost","root","");
       mysqli_select_db($cnx,"fcpo");
       $req="insert into client (nom,prenom,tel, mail,adresse, code_postal, civilite, num_compte_bancaire, ice, tva,raison_social,secteur_activite, site_actuel,id_c) 
       values("."'".$nom."','".$prenom."','".$tel."','".$email."','".$adresse."','".$cp."','".$civilite."','".$ncp."','".$ice."','".$tva."','".$rs."','".$secteur."','".$site."','".$type."')";
       	 $resu=mysqli_query($cnx,$req);
          if ($resu) {
          	header ("location: ajoutProjet.php);
          }
          mysqli_close($cnx);
         ?>