<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrado</title>
</head>
<body>
<?php

    //Recibir Datos
$nombre = $_GET['nombre'];
$telefono = $_GET['numero'];
$correo = $_GET['correo'];
$estado = $_GET['estado'];
$direccion = $_GET['direccion'];
$fecha = $_GET['registro'];
$hora = $_GET['hora'];
$notificaciones = $_GET['notificacion'];

    //incluir un archivo externo
    include('conexionBDT.php')

    //Escribir una variable de sentencia
    $sentenciaSQL = "INSERT INTO clientes
    values (null,'{$nombre}','{$telefono}','{$correo}','{$estado}','{$direccion}','{$fecha}','{$hora}','{$notificaciones}');";

    //Ejecutar una sentencia
    $resultado = $conexion->query($sentenciaSQL);

    //Verifica la ejecución
    if($resultado){
        echo "<h1 algn=center>Cliente Registrado</h1>";
    }
    
    //Cerrar la Conexión
    $conexion->close();





?>
</body>
</html>