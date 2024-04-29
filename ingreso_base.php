<?php
	require "conexion.php";
    require "headerSession.php";

	$consulta = $conexion->prepare("SELECT * FROM infopacientes");
	$consulta->execute();
	$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
	
    $DNI = filter_input(INPUT_POST,'DNI');
    $nombre = filter_input(INPUT_POST,'nombre');
    $apellido = filter_input(INPUT_POST,'apellido');
    $telefono = filter_input(INPUT_POST,'telefono');
    $correo = filter_input(INPUT_POST,'correo');
    
	$new_insert= $conexion->prepare("INSERT INTO `usuarios` (`Nombre`,`Apellido`, `DNI`, `Correo`,`Telefono`,`Id_user`) VALUES (:nom, :ape, :dni, :cor, :tel, :id)");
    $new_insert->bindParam(':nom',$nombre);
    $new_insert->bindParam(':ape',$apellido);
    $new_insert->bindParam(':dni',$DNI);
    $new_insert->bindParam(':cor',$correo);
    $new_insert->bindParam(':tel',$telefono);
    $new_insert->bindParam(':id',$Id);

    $new_insert->execute();

    header('Location:index.php');
   
?>