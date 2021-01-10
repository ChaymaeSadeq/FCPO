<?php
$conn1=mysqli_connect("localhost","root","");
mysqli_select_db($conn1,"fcpo");
             
//-----------------------titre_bClair------------------------
        if(isset($_REQUEST['ck1']))
        {
            $v=1;
        }
        else
        {
            $v=0;
        }
    
//-----------------------espace_blanc------------------------
        if(isset($_REQUEST['ck2']))
        {
            $a=1;
        }
        else
        {
            $a=0;
        }
        
//-----------------------adapter_mobil------------------------
        if(isset($_REQUEST['ck3']))
        {
            $b=1;
        }
        else
        {
            $b=0;
        }
        
//-----------------------menu_fonc------------------------
        if(isset($_REQUEST['ck4']))
        {
            $c=1;
        }
        else
        {
            $c=0;
        }
    
//-----------------------menu_resp------------------------
        if(isset($_REQUEST['ck5']))
        {
            $d=1;
        }
        else
        {
            $d=0;
        }
        
//-----------------------taille_fond_ecriture------------------------
        if(isset($_REQUEST['ck6']))
        {
            $e=1;
        }
        else
        {
            $e=0;
        }
        
//-----------------------montion_legale------------------------
        if(isset($_REQUEST['ck7']))
        {
            $f=1;
        }
        else
        {
            $f=0;
        }
        
//-----------------------plan_site------------------------
        if(isset($_REQUEST['ck8']))
        {
            $g=1;
        }
        else
        {
            $g=0;
        }
        
//-----------------------form_contact------------------------
        if(isset($_REQUEST['ck9']))
        {
            $h=1;
        }
        else
        {
            $h=0;
        }
//-----------------------champ_form------------------------
        if(isset($_REQUEST['ck10']))
        {
            $i=1;
        }
        else
        {
            $i=0;
        }
        
//-----------------------photo_defilante------------------------
        if(isset($_REQUEST['ck11']))
        {
            $j=1;
        }
        else
        {
            $j=0;
        }
        
//-----------------------ponctuati------------------------
        if(isset($_REQUEST['ck12']))
        {
            $k=1;
        }
        else
        {
            $k=0;
        }
        
//-----------------------carte------------------------
        if(isset($_REQUEST['ck13']))
        {
            $l=1;
        }
        else
        {
            $l=0;
        }
        
  
    $req28="update qualite set  titre_bClair=".$v.",  
    espace_blanc=".$a.",
    adapter_mobil=".$b.",
    menu_fonc=".$c.",
    menu_resp=".$d.",
    taille_fond_ecriture=".$e.",
    montion_legale=".$f.",
    plan_site=".$g.",
    form_contact=".$h.",
    champ_form=".$i.",
    photo_defilante=".$j.",
    ponctuati=".$k.",
    carte=".$l."
  where  num_projet=".$_REQUEST['idPr']." ";
        
    $resu28=mysqli_query($conn1,$req28);
    if($resu28)
    {
    header("Location:Projetdetails.php?idP=".$_REQUEST['idPr']."");

 }
else
    {
        echo 'errr req 28';
    }
                                
 mysqli_close($conn1);
?>