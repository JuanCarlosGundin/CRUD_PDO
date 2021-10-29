<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table table">
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    </th>
        <tr>
        <form METHOD='POST' action='insertar.php'>
            <td><input type='email' name='mail' value=<?php echo $_POST['modificar'];?>></td>
            <td><input type='text' name='nombre' value=<?php echo $_POST['nom'];?>></td>
            <td><input type='text' name='apellido' value=<?php echo $_POST['apellido'];?>></td>
            <td><input type='number' name='age' value=<?php echo $_POST['telf'];?>></td>
            <input type='hidden' name='id' value=<?php echo $_POST['modificar'];?>>
            <td><input type='submit' value='Modificar el usuario' onclick="return confirm('Quieres modificar el usuario?')"class="btn btn-success"></td>
        </form>
        <form METHOD='POST' action='ver.php'>
        <td><input type='submit' value='Volver' onclick="return confirm('Quieres salir sin modificar el usuario?')"class="btn btn-danger"></td>
        </form>
        </tr>
    </table>
</div>
</body>
</html>