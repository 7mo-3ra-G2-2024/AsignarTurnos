<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ver turnos</title>
    <style>
        table{

            text-align: center;
            border-collapse: collapse;
            background: #D6DBDF;
            padding: 20px;


            }

            td{
            padding-top:2px;
            padding-bottom:2px;
            }
            th{
            padding: 20px;
            background: cadetblue;
            color:white;

            }
            tr:nth-child(even){
            background: #AEB6BF;
            }
            tr:hover{
            background: #5D6D7E;
            }
    </style>
</head>
<body>
    <section>
        <center>
            <?php
            require 'conexion.php';
                $consulta=$conexion->prepare("SELECT * FROM usuarios");// prepara la consulta SQL
                $consulta->execute();// ejecuta la consulta SQL
                $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);// genera un diccionario con datos de PACIENTE 

                $cuenta=$consulta->rowCount();
                if($cuenta>0){
                    echo '<table border="1" ><tr> <th>Dni</th> <th>Nombre</th> <th>Apellido</th> <th>Telefono</th> <th>Correo</th> <th>Fecha</th></tr>';
                    foreach ($datos as $elem) {
                        echo "<tr>
                        <td>".$elem['DNI']."</td>
                        <td>".$elem['Nombre']."</td>
                        <td>".$elem['Apellido']."</td>
                        <td>".$elem['Telefono']."</td>
                        <td>".$elem['Correo']."</td>
                        <td>".$elem['fecha']."</td> 
                    </tr>";
                    }
                    echo '</table>';
                }
                else{
                    echo "<h2>NO se registro ningún Turno.!!!</h2>";
                }
            
            ?>    
        </center>
        
    </section>
    
</body>
</html>