<?php
//header('Content-Type: application/json');

$conn1=mysqli_connect("localhost","root","");
                    mysqli_select_db($conn1,"fcpo");
                    //-----En Cours----
                    $req1="SELECT count(*) as total FROM projet where id_etat=1 ";
                    //-----Suspendu----
                    $req2="SELECT count(*) as total FROM projet where id_etat=2 ";
                    //-----Termine----
                    $req3="SELECT count(*) as total FROM projet where id_etat=3 ";
                    //-----Annule----
                    $req4="SELECT count(*) as total FROM projet where id_etat=4 ";
                    $resu1=mysqli_query($conn1,$req1);
                    $resu2=mysqli_query($conn1,$req2);
                    $resu3=mysqli_query($conn1,$req3);
                    $resu4=mysqli_query($conn1,$req4);


$val1 =mysqli_fetch_assoc($resu1);
$val2 =mysqli_fetch_assoc($resu2);
$val3 =mysqli_fetch_assoc($resu3);
$val4 =mysqli_fetch_assoc($resu4);
$data = array();
$data[0]=(int) $val1['total'];
$data[1]=(int) $val2['total'];
$data[2]=(int) $val3['total'];
$data[3]=(int) $val4['total'];
mysqli_close($conn1);

echo json_encode($data);
?>