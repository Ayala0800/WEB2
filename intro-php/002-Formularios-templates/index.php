<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulario</title>
</head>
<body>
    <?php require './templates/header.php';?>

    <h1>Registrate</h1>

    <form action="registro.php" method="POST">
        <input type="text" name="nombre" placeholder="Ingrese nombre" required>
        <input type="email" name="email" placeholder="Ingrese email" required>
        <input type="password" name="password" placeholder="Ingrese contraseña" required>

        <button type="submit">Registrarme</button>
    </form>
</body>
</html>