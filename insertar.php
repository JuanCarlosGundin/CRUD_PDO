<?php 
include 'config.php';
include 'conexion.php';
include 'alumno.php';
include 'funcionextra.php';
if (isset($_POST['crear'])){
    if(comprobar( $_POST['email'])==false){
        echo "<script> alert('El usuario ya existe')</script>";
        echo "bon appetite";
        echo"<script>window.location.replace('ver.php')</script>";
    }else{
$stmt = $pdo->prepare("INSERT INTO alumnos (email, nombre, apellido, edad) VALUES (?, ?, ?, ?)");
// Bind
$stmt->bindParam(1, $_POST['email']);
$stmt->bindParam(2, $_POST['nombre']);
$stmt->bindParam(3, $_POST['apellido']);
$stmt->bindParam(4, $_POST['edad']);
// Excecute
$stmt->execute();
echo"<script>window.location.replace('ver.php')</script>";
    }
}else{ 
    if(comprobar( $_POST['mail'])==false){
        echo "<script> alert('El email ya existe')</script>";
        echo "bon appetite";
        echo"<script>window.location.replace('ver.php')</script>";
    }else{
$stmt = $pdo->prepare("UPDATE alumnos SET email=?, nombre=?, apellido=?, edad=? where email=?");
// Bind
$stmt->bindParam(1, $_POST['mail']);
$stmt->bindParam(2, $_POST['nombre']);
$stmt->bindParam(3, $_POST['apellido']);
$stmt->bindParam(4, $_POST['age']);
$stmt->bindParam(5, $_POST['id']);

// Excecute
$stmt->execute();
echo"<script>window.location.replace('ver.php')</script>";
}}
////


/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
// Bind
$nombre = "Charles";
$edad = 25;
$stmt->bindParam(':name', $nombre);
$stmt->bindParam(':age', $edad);
// Excecute
$stmt->execute();
*/


/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
$name = "Luis";
$age = 35;
// Bind y execute: no funciona 
try{

if($stmt->execute(array(':name'=>$name, ':age'=>$age))){
    echo 'bien';
}else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
} */

/*$persona=new Persona("pepe",32);
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/

/*$persona=new Persona(null,"pepito",34);
$stmt = $pdo->prepare("INSERT INTO tbl_persona(id, name, age) VALUES (:id, :name, :age)" );
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/