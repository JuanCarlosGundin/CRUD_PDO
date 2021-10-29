<?php 
include 'config.php';
include 'conexion.php';
//echo $pdo->exec("DELETE FROM tbl_persona WHERE id=1");
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
// Bind
$id=$_REQUEST['eliminacion'];
$stmt->bindParam(1, $id);
$stmt->execute();
header('Location:ver.php');