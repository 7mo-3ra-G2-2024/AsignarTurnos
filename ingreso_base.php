<?php
	require "conexion.php";

    $DNI = filter_input(INPUT_POST,'dni');
    $nombre = filter_input(INPUT_POST,'nombre');
    $apellido = filter_input(INPUT_POST,'apellido');
    $telefono = filter_input(INPUT_POST,'telefono');
    $correo = filter_input(INPUT_POST,'correo');
    $f = filter_input(INPUT_POST,'fecha');
    
    
	$new_insert= $conexion->prepare("INSERT INTO `usuarios` (`Nombre`,`Apellido`, `DNI`,`fecha`, `Correo`,`Telefono`) VALUES (:nom, :ape, :dni,:fec, :cor, :tel)");
    $new_insert->bindParam(':nom',$nombre);
    $new_insert->bindParam(':ape',$apellido);
    $new_insert->bindParam(':dni',$DNI);
    $new_insert->bindParam(':cor',$correo);
    $new_insert->bindParam(':tel',$telefono);
    $new_insert->bindParam(':fec',$f);

    $new_insert->execute();

    header('Location:index.php');
   
?>