<?php 
               include("conx.php");
$a=$_GET['idP'];

//-------------------- change etat
if (isset($_POST['etatS'])) {
if(isset($_POST['adomx-radio-2'])){
    $eta=$_POST['adomx-radio-2'];
    $reqE = "UPDATE projet
SET id_etat = (select id_etat from etat_fabrication where Nom_Etat='".$eta."')
WHERE num_projet=".$_GET['idP'];
    $conn->exec($reqE);
                header("Refresh:0;url=Projetdetails-dev.php?idP=".$_GET['idP']."");

}
            }
//---------------------- aff etat 
$queryEt = "select * from projet,etat_fabrication where projet.id_etat=etat_fabrication.id_etat and projet.num_projet=$a" ;
$prepEt= $conn->prepare($queryEt);
$prepEt->execute();
//------------------------ info projet + client
$queryC = "SELECT * FROM projet,client WHERE projet.id_client=client.id_client and num_projet =$a " ;
$prepC= $conn->prepare($queryC);
$prepC->execute();
                           $ligneC = $prepC->fetch();

$query = "SELECT * FROM projet WHERE num_projet =$a" ;
$prep= $conn->prepare($query);
$prep->execute();
                           $ligne = $prep->fetch();
//---------------- dev de projet
 $numP=$ligne['num_projet'];
                                    
$queryD = "select * from projet,user_projet,utilisateur where 
projet.Num_projet=user_projet.Num_projet and utilisateur.id_user=user_projet.id_user
and projet.num_projet=$numP and utilisateur.id_tuser=2" ;
$prepD= $conn->prepare($queryD);
$prepD->execute();


//----------------- red de projet 
$queryR = "select * from projet,user_projet,utilisateur where 
projet.Num_projet=user_projet.Num_projet and utilisateur.id_user=user_projet.id_user
and projet.num_projet=$numP and utilisateur.id_tuser=3" ;
$prepR= $conn->prepare($queryR);
$prepR->execute();
$ligneR = $prepR->fetch();
//------------------ les image 
//--------------logo
$reqL = "SELECT id_logo,name_logo from logo where num_projet=$a" ;
              $prepL= $conn->prepare($reqL);
$prepL->execute();
////--------------photo
$reqPh = "SELECT id_img,name_photo from photo where num_projet=$a" ;
              $prepPh= $conn->prepare($reqPh);
$prepPh->execute();
////--------------ticket
$reqT = "SELECT * from ticket where num_projet=$a order by Date_envoie Desc" ;
              $prepT= $conn->prepare($reqT);
$prepT->execute();
/////-------------add comment
if (isset($_POST['addComent'])) {
    $reqCom = "UPDATE projet
SET commentaire = '".$_POST['Comm']."'where num_projet=".$a;
    $conn->exec($reqCom);
            header("Refresh:0;url=Projetdetails-dev.php?idP=".$_GET['idP']."");

}
////----------------Add Cont 
if (isset($_POST['AddCont'])) {
    $reqCont = "UPDATE projet
SET contenu_text = '".$_POST['Cont']."'where num_projet=".$a;
    $conn->exec($reqCont);
            header("Refresh:0;url=Projetdetails-dev.php?idP=".$_GET['idP']."");

}

?>