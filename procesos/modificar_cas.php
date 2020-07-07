<?php 

include '../conexion_pg.php';

$id_cas=$_POST['id'];

$nombres=strtoupper($_POST['nombres']);
$ape_pat=strtoupper($_POST['ape_pat']);
$ape_mat=strtoupper($_POST['ape_mat']);
$dni=$_POST['dni'];
$domic=strtoupper($_POST['domic']);
$cel=$_POST['cel'];
$correo=strtolower($_POST['correo']);

$sql= "UPDATE cas_registro SET nombres='$nombres',
                ape_pat='$ape_pat',
                ape_mat='$ape_mat',
                dni='$dni', 
                domic='$domic',
                cel='$cel',
                correo='$correo' WHERE id_cas='$id_cas'";

$result=pg_query($con,$sql);

header('Location: ../cas.php');

// if ($result === TRUE) {
// 	header('Location: ../cas.php');
// } else {
// 	echo "Error: ".$sql. "<br>".$con->error;
// }

pg_close($con);  
?>