<?php
//header('Content-Type: application/json');
session_start();
$conn1=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn1,"fcpo");
                    //----------Janvier-----------
                    $req1="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=1 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------fevrier-----------
                    $req2="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=2 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------mars-----------
                    $req3="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=3 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------avril-----------
                    $req4="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=4 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------mai-----------
                    $req5="SELECT count(*) as total FROM projet  p,user_projet j where MONTH(date_livraison)=5 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------juin-----------
                    $req6="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=6 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------Juillet-----------
                    $req7="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=7 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------aout-----------
                    $req8="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=8 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------septembre-----------
                    $req9="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=9 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------octobre-----------
                    $req10="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=10 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------novembre-----------
                    $req11="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=11 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";                  //----------decembre-----------
                    $req12="SELECT count(*) as total FROM projet p,user_projet j where MONTH(date_livraison)=12 and p.num_projet=j.num_projet and j.id_user=".$_SESSION['iduser']."
";
                    $resu1=mysqli_query($conn1,$req1);
                    $resu2=mysqli_query($conn1,$req2);
                    $resu3=mysqli_query($conn1,$req3);
                    $resu4=mysqli_query($conn1,$req4);
                    $resu5=mysqli_query($conn1,$req5);
                    $resu6=mysqli_query($conn1,$req6);
                    $resu7=mysqli_query($conn1,$req7);
                    $resu8=mysqli_query($conn1,$req8);
                    $resu9=mysqli_query($conn1,$req9);
                    $resu10=mysqli_query($conn1,$req10);
                    $resu11=mysqli_query($conn1,$req11);
                    $resu12=mysqli_query($conn1,$req12);



$val1 =mysqli_fetch_assoc($resu1);
$val2 =mysqli_fetch_assoc($resu2);
$val3 =mysqli_fetch_assoc($resu3);
$val4 =mysqli_fetch_assoc($resu4);
$val5 =mysqli_fetch_assoc($resu5);
$val6 =mysqli_fetch_assoc($resu6);
$val7 =mysqli_fetch_assoc($resu7);
$val8 =mysqli_fetch_assoc($resu8);
$val9 =mysqli_fetch_assoc($resu9);
$val10 =mysqli_fetch_assoc($resu10);
$val11 =mysqli_fetch_assoc($resu11);
$val12 =mysqli_fetch_assoc($resu12);

$data = array();
$data[0]=(int) $val1['total'];
$data[1]=(int) $val2['total'];
$data[2]=(int) $val3['total'];
$data[3]=(int) $val4['total'];
$data[4]=(int) $val5['total'];
$data[5]=(int) $val6['total'];
$data[6]=(int) $val7['total'];
$data[7]=(int) $val8['total'];
$data[8]=(int) $val9['total'];
$data[9]=(int) $val10['total'];
$data[10]=(int) $val11['total'];
$data[11]=(int) $val12['total'];

mysqli_close($conn1);

echo json_encode($data);
?>