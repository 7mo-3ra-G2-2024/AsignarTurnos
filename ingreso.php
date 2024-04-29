<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ingreso</title>
</head>
<body>
    <section >   
        <form action="ingreso_base.php" method="post" class="form">
            <h1 style="text-align: center; padding: 10px 0px;">Nuevo ingreso</h1>
            <label>DNI</label>
            <input type="number" name="dni" min="0" ><br>
    
            <label>Apellido</label>
            <input type="text" name="apellido" required><br>
    
            <label>Nombre</label>
            <input type="text" name="nombre" required><br>
    
            <label>Teléfono</label>
            <input type="number" name="telefono" min="0" required><br>
    
            <label>Email</label>
            <input type="email" name="correo" placeholder="nombre@gmail.com" required><br>
    
            <label>Fecha</label>
            <input type="date" name="fecha" required><br>
    
            <input type="submit" value="Ingresar" class="form-s">
    
            <a href="index.php">
                <input type="button" value="Volver">
            </a>    
        </form>
    </section>
</body>
</html>