<?php


	$idc=$_REQUEST['idc'];
	$type_projet=$_REQUEST['typeprojet'];
	$nomp=$_REQUEST['nomp'];
	$dr=$_REQUEST['dr'];
	$dl=$_REQUEST['dl'];
	$dd=$_REQUEST['dd'];
	$mots=$_REQUEST['mots'];
	$site=$_REQUEST['site'];
	$region=$_REQUEST['region'];
	$red=$_REQUEST['red'];
	$tech=$_REQUEST['tech'];
	$comm=$_REQUEST['comm'];
	$domaine=$_REQUEST['domaine'];
	$ftph=$_REQUEST['ftph'];
	$ftpn=$_REQUEST['ftpn'];
	$ftpp=$_REQUEST['ftpp'];
	$bds=$_REQUEST['bds'];
	$bdn=$_REQUEST['bdn'];
	$bdu=$_REQUEST['bdu'];
	$bdp=$_REQUEST['bdp'];


		if ($type_projet=='mobile') 
	{
		$idt=2;
	}
	if ($type_projet=='site')
	{
			$idt=1;
	}

	 $cnx=mysqli_connect("localhost","root","");
      mysqli_select_db($cnx,"fcpo");
      $req="select max(num_projet) from projet ";

     

      	$resu=mysqli_query($cnx,$req);
      	if ($resu==true)
           {
           	$ligne=mysqli_fetch_row($resu);
           	$idp=++$ligne[0];

			
           	 $req2="INSERT INTO projet (num_projet, titre, date_reception, date_debut, date_livraison, commentaire, site_ref, technologie, domaine,ftp_host, ftp_name, ftp_password,bd_name, bd_username, bd_password, bd_server,id_p, id_client,id_etat) VALUES(".$idp.",'".$nomp."','".$dr."','".$dd."','".$dl."','".$comm."','".$site."','".$tech."','".$domaine."','".$ftph."','".$ftpn."','".$ftpp."','".$bdn."','".$bdu."','".$bdp."','".$bds."',".$idt.",".$idc.",1)";
           		$resu2=mysqli_query($cnx,$req2);
           	if ($resu2==true){
           		$req3="INSERT INTO user_projet (num_projet,id_user)  VALUES (".$idp.",".$red.")";
           		$resu3=mysqli_query($cnx,$req3);
           		    	foreach($_REQUEST['utili'] as $valeur)
					{
					   $req3="INSERT INTO user_projet (num_projet,id_user)  VALUES (".$idp.",".$valeur.")";
           				$resu4=mysqli_query($cnx,$req3);
					}
					if($resu4){
						header("location:projetAff.php");
					}
           	}
           }
                                           
  mysqli_close($cnx);
	

		

			

?>