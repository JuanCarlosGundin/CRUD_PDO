<?php
include 'config.php';
include 'conexion.php';
include 'alumno.php';
$sentencia=$pdo->prepare("SELECT * FROM alumnos");
$sentencia->execute();
$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div>
        <H1>Tabla de alumnos</H1><br/>
        <form METHOD='POST' action='Crear.php'>
        <input type='hidden' name='modificar'>
        <input type='submit' value='Crear una nueva entrada' class="btn btn-success">
        </form>

    </div>
    <table class="table table">
    <tr>
    <th>Email</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Eliminar</th>
    <th>Modificar</th>
    </th>
<?php
    foreach ($listaProductos as $producto){
        ?>
        <tr>
        <td><?php echo"{$producto['email']}";?></td>
        <td><?php echo"{$producto['nombre']}";?></td>
        <td><?php echo"{$producto['apellido']}";?></td>
        <td><?php echo"{$producto['edad']}";?></td>
        <form METHOD='GET' action='eliminar.php'>
            <input type='hidden' name='eliminacion' value=<?php echo"{$producto['email']}";?>>
            <td><input type='submit' value='Eliminar' onclick="return confirm('Quieres Eliminar?')"class="btn btn-danger"></td>
        </form>
        <form METHOD='POST' action='modificar.php'>
        <input type='hidden' name='nom' value=<?php echo"{$producto['nombre']}";?>>
        <input type='hidden' name='apellido' value=<?php echo"{$producto['apellido']}";?>>
        <input type='hidden' name='telf' value=<?php echo"{$producto['edad']}";?>>
            <input type='hidden' name='modificar' value=<?php echo"{$producto['email']}";?>>
            <td><input type='submit' value='Modificar' onclick="return confirm('Quieres Modificar?')"class="btn btn-success"></td>
        </form>
        </tr>
    <?php 
    }
     ?>
    </table>
</div>
</body>
</html>