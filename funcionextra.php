<?php
function comprobar($mail){
    $servidor="mysql:dbname=".BD.";host=";SERVIDOR;
    try{
        $func=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
        //echo "<script> alert('conexion establecida')</script>";
   
    }catch(PDOException $e){
       echo $e->getMessage();
       echo "<script> alert('Error de conexion')</script>";
    }
    $stmt = $func->prepare("SELECT email where email=$mail");
    $stmt->execute();
    if(!($stmt->execute()== true)){
        return true;
    }
    else{
        return false;
    }
}
?>