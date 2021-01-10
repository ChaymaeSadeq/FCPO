<?php

include ("conx.php");
if(isset($_POST['valid'])){
    include ("img.php");
list ($cont, $nom, $type)= transfert($_FILES['imgD']);
}
else{
    $req = "select * from utilisateur where id_user=".$_GET['idDev'];
    $prepI= $conn->prepare($req);
$prepI->execute();
        $ligne = $prepI->fetch();
    $cont=addslashes($ligne['cont_imgD']);
    $nom=$ligne['name_imgD'];
    $type=$ligne['type_imgD'];
}
$req1="update utilisateur set nom='".$_POST['nom']."',prenom='".$_POST['prenom']."',
tel='".$_POST['tel']."',
mail='".$_POST['email']."'  ,
adresse='".$_POST['adresse']."'  ,
login='".$_POST['login']."',
MDP='".$_POST['mdp']."',
specialite='".$_POST['specialite']."',
cont_imgD='".$cont."',
name_imgD='".$nom."',
type_imgD='".$type."',
id_tuser=".(int)$_POST['slt']." 

where id_user=".$_REQUEST['idDev'];

$resu=$conn->exec($req1);
if($resu){
    header("Location:affiche_dev");
    
}
echo $_REQUEST['slt'];
    ?>