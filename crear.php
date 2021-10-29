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
    <th>Email</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    </th>
        <tr>
        <form METHOD='POST' action='insertar.php'>
            <td><input type='email' name='email' ></td>
            <td><input type='text' name='nombre' ></td>
            <td><input type='text' name='apellido' ></td>
            <td><input type='number' name='edad' ></td>
            <input type='hidden' name='crear' value='CREATE'>
            <td><input type='submit' value='Crear un nuevo usuario' onclick="return confirm('Quieres Crear un nuevo usuario?')"class="btn btn-success"></td>
        </form>
        </tr>
    </table>
</div>
</body>
</html>