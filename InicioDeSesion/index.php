<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion en la cuenta</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<form action="respuesta.php" method="post">

 <section class="form-login">
        <h5>Iniciar sesión</h5>
        <input class="controls" type="text" name="nombre_usuario" placeholder="Usuario">
        <input class="controls" type="password" name="password" required placeholder="Contraseña">
        <button class="button">
            <span>Ingresar</span></button>
        <p><a href="form_registro.php">Registrate.</a></p>
    </section>

 </form>
    
</body>
</html>