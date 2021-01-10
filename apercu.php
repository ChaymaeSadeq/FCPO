<?php 
if ( isset($_GET['id']) ){
        $id = intval ($_GET['id']);
        include ("conx.php");
    
        $req = "SELECT id_logo, cont_logo,type_logo " . 
               "FROM logo WHERE id_logo = " . $id;
       
    $prepI= $conn->prepare($req);
$prepI->execute();
        $ligne = $prepI->fetch();
        if ( !$ligne['id_logo'] ){
            echo "Id d'image inconnu";
        } else {
            header ("Content-type: " . $ligne['type_logo'] );
            echo $ligne['cont_logo'] ;
        }

    } 
if ( isset($_GET['img']) ){
        $id = intval ($_GET['img']);
        include ("conx.php");
    
        $req = "SELECT id_img, cont_photo,type_photo " . 
               "FROM photo WHERE id_img = " . $id;
       
    $prepI= $conn->prepare($req);
$prepI->execute();
        $ligne = $prepI->fetch();
        if ( !$ligne['id_img'] ){
            echo "Id d'image inconnu";
        } else {
            header ("Content-type: " . $ligne['type_photo'] );
            echo $ligne['cont_photo'] ;
        }

    }
if ( isset($_GET['idD']) ){
        $id = intval ($_GET['idD']);
        include ("conx.php");
        $req = "select * from utilisateur where id_user=".$id;
    $prepI= $conn->prepare($req);
$prepI->execute();
        $ligne = $prepI->fetch();
        /*if ( !$ligne['id_logo'] ){
            echo "Id d'image inconnu";
        } else {*/
            header ("Content-type: " . $ligne['type_imgD'] );
            echo $ligne['cont_imgD'] ;
    //    }

    } 
    ?>