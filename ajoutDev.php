<?php
include ("img.php");

list ($cont, $nom, $type)= transfert($_FILES['imgD']);


include ("conx.php");
$id=(int)$_REQUEST['slt'];
echo "name".$nom;
$req1="insert into utilisateur (login,MDP,id_tuser,nom,prenom,mail,adresse,tel,specialite,cont_imgD,name_imgD,type_imgD) values('".$_REQUEST['nom']."','".$_REQUEST['prenom']."',".$id.",'".$_REQUEST['nom']."','".$_REQUEST['prenom']."','".$_REQUEST['email']."','".$_REQUEST['adresse']."','".$_REQUEST['tel']."','".$_REQUEST['specialite']."','".$cont."','".$nom."','".$type."')";

$resu1=$conn->exec($req1);
if($resu1)
{
    //echo "if";
    header("Location:affiche_dev");
    /*
    echo '<div class="alert alert-solid-success" role="alert"><a class="alert-link" href="#">Développeur</a> était ajouter avec succès 
                            </div>';*/
}
else
{
    //echo "else";
    header("Location:form_dev.php");
    /*
    echo '<div class="alert alert-solid-danger" role="alert"><a class="alert-link" href="#">Développeur</a> n\'était pas ajouter 
                            </div>';*/
}
?>