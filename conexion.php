<?php
	// Ejemplo de conexión a base de datos MySQL con PHP version 7.
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "prueba";
    $conexion=mysqli_connect($servidor,$usuario,$password,$basededatos);

    if (!$conexion) {
		echo"no se pudo conectar";
	}else{
		
		echo "conectado a la base datos";
	}


    
?>