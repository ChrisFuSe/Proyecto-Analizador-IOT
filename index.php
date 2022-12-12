<?php 
    include 'funciones/conexionDB.php';
    $certificado = $_POST['certificado'];
    $latitud = $_POST['latitud'];
    $longitud = $_POST['longitud'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $sensor = $_POST['sensor'];
    $directorio = $_POST['directorio'];

    $query = "INSERT INTO imagenes (certificado, latitud, longitud fecha, hora, directorio, sensor) VALUES ($certificado, $latitud, $longitud, $fecha, $hora, $sensor, $directorio);";

    $db->query($query);

    echo $pass;
?>