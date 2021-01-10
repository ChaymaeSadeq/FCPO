 <?php
                             
$conn1=mysqli_connect("localhost","root","");
mysqli_select_db($conn1,"fcpo");
$req="insert into ticket (titre,description,num_projet) values ('".$_POST['titre']."','".$_POST['desc']."',".$_REQUEST['idPr'].") ";
$resu=mysqli_query($conn1,$req);
if($resu){

header("Location:Projetdetails.php?idAd=".$_REQUEST['z']."&idP=".$_REQUEST['idPr']."");
}
else{
   echo '<div class="alert alert-solid-danger" role="alert"><a class="alert-link" href="#">Erreur :</a>  dans la base de donnée
                            </div>';
}
mysqli_close($conn1);
?>