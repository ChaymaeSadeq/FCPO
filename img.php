<?php
$fil=0;
if(isset($_FILES['log'])){
            transfert($_FILES['log']);
        }
        if(isset($_FILES['photo'])){
            transfert($_FILES['photo']);
        }
if(isset($_FILES['imgD'])){
            transfert($_FILES['imgD']);
        }

function transfert($fich){
    //echo $_GLOBALS['fil'];
    if ( isset($_POST["envI"]) || isset($_POST["ajoutD"]) || isset($_POST["ModD"]))
         {
        if(isset($_FILES['log'])){
            $_GLOBALS['fil']=1;
        }
        if(isset($_FILES['photo'])){
            $_GLOBALS['fil']=2;
        }
        if(isset($_FILES['imgD'])){
            $_GLOBALS['fil']=3;  
        }
        if(!isset($_POST["ModD"])){
        $ret        = false;
        }
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 250000;
        $ret        = is_uploaded_file($fich['tmp_name']);
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $fich['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $fich['type'];
            $img_nom  = $fich['name'];
               include("conx.php");
            $img_blob = file_get_contents ($fich['tmp_name']);
         if($_GLOBALS['fil']==1)  {
        $req = "INSERT INTO logo (cont_logo,name_logo,type_logo,num_projet) VALUES ('" . addslashes ($img_blob) . "','" . $img_nom . "','".$img_type."','".$_GET['idP']."') "; 
         }
            if($_GLOBALS['fil']==2)  {
        $req = "INSERT INTO photo (cont_photo,name_photo,type_photo,num_projet) VALUES ('" . addslashes ($img_blob) . "','" . $img_nom . "','".$img_type."','".$_GET['idP']."') "; 
         }
            if($_GLOBALS['fil']==3)  {
                return array(addslashes ($img_blob),$img_nom,$img_type);
         }
            
            
        //$ret = mysql_query ($req) or die (mysql_error ());
            $conn->exec($req);
        

        }
        
 
    }

    header("Refresh:0;url=Projetdetails-dev.php?idP=".$_GET['idP']."");
}
?>